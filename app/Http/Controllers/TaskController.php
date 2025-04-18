<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Tampilkan halaman form & list tugas
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $tasks = Task::when($keyword, function ($query, $keyword) {
            $query->where('title', 'like', "%{$keyword}%")
                ->orWhere('priority', 'like', "%{$keyword}%");
        })->latest()->get();

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

        Task::create([
            'title' => $request->title,
            'priority' => $request->priority,
            'due_date' => $request->due_date,
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil ditambahkan!');
    }



    public function update(Request $request, Task $task)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|in:tinggi,medium,rendah',
            'due_date' => 'nullable|date',
        ]);

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
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->back()->with('success', 'Tugas berhasil dihapus!');
    }
}
