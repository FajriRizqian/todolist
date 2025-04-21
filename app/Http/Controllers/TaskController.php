<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class TaskController extends Controller
{
    /**
     * Tampilkan halaman form & list tugas
     */
    public function index(Request $request)
    {
        // Ambil atau buat user_id dari cookie
        $userId = $request->cookie('user_id');

        if (!$userId) {
            $userId = (string) Str::uuid();
            Cookie::queue('user_id', $userId, 10080); // cookie berlaku 1 minggu
        }

        $keyword = $request->input('keyword');

        $tasks = Task::where('user_id', $userId)
            ->when($keyword, function ($query, $keyword) {
                $query->where('title', 'like', "%{$keyword}%")
                      ->orWhere('priority', 'like', "%{$keyword}%");
            })
            ->latest()
            ->get();

        return view('tasks', compact('tasks'));
    }

    /**
     * Simpan tugas baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|in:tinggi,medium,rendah',
            'due_date' => 'nullable|date',
        ]);

        $userId = $request->cookie('user_id');

        if (!$userId) {
            $userId = (string) Str::uuid();
            Cookie::queue('user_id', $userId, 10080); // cookie berlaku 5 menit
        }

        Task::create([
            'title' => $request->title,
            'priority' => $request->priority,
            'due_date' => $request->due_date,
            'user_id' => $userId,
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil ditambahkan!');
    }

    /**
     * Perbarui tugas
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|in:tinggi,medium,rendah',
            'due_date' => 'nullable|date',
        ]);

        $userId = $request->cookie('user_id');

        // Cegah update task dari user lain
        if ($task->user_id !== $userId) {
            abort(403, 'Akses ditolak.');
        }

        $task->update([
            'title' => $request->title,
            'priority' => $request->priority,
            'due_date' => $request->due_date,
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil diperbarui!');
    }

    /**
     * Hapus tugas
     */
    public function destroy($id, Request $request)
    {
        $task = Task::findOrFail($id);
        $userId = $request->cookie('user_id');

        // Cegah hapus task dari user lain
        if ($task->user_id !== $userId) {
            abort(403, 'Akses ditolak.');
        }

        $task->delete();

        return redirect()->back()->with('success', 'Tugas berhasil dihapus!');
    }
}
