<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoApp | Daftar Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/favicon.png">
</head>
<style>
body {
    font-family: 'Poppins', sans-serif;
    padding-top: 60px;
}

.navbar {
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

.text-muted {
  color: #ffffff;
}


.search-container {
  margin-top: 20px;
  height: 50px;
  width: 84vw;
  border-radius: 10px;
  background-color: #ffffff;
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
  max-width: 1000px;
}

.search-container input {
  background-color: #ffffff;
  color: #000000;
}

.search-container input::placeholder {
  color: #aaa; 
}

.search-container i {
  cursor: pointer;
}


.container-fluid {
    width: 85vw;
    border-radius: 15px;
}

.card {
    border-radius: 15px;
    
}

.form-control {
    border: none;
    border-bottom: 1px solid #d6d6d6;
    border-radius: 0;
    background-color: transparent;
    box-shadow: none;
}

.form-control:focus {
    outline: none;
    box-shadow: none;
    border-bottom-color: #198754
    ;
}

.form-select {
    width: 130px;
    border-radius: 20px;
}

.task-card {
    background-color: #fff;
    color: black;
    border-radius: 15px;
    padding: 15px;
    margin-bottom: 15px;
    display: block;
    overflow: hidden;
    align-items: center;
    justify-content: space-between;
    width: 84vw;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    
}

.task-info {
  display: flex;
  flex-wrap: wrap; 
}

.task-title {
   font-size: 14px;
}


.task-meta {
    font-size: 10px;
    opacity: 0.8;
}
.task-options {
    position: relative;
}
.dropdown-menu {
    background-color: #fff;
    color: #000;
}
.fancy-checkbox {
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    user-select: none;
    font-family: 'Segoe UI', sans-serif;
    font-size: 16px;
    position: relative;
  }
  
  .fancy-checkbox input {
    display: none;
  }
  
  .fancy-checkbox .checkmark {
    width: 20px;
    height: 20px;
    border: 2px solid #666;
    border-radius: 100px;
    position: relative;
    transition: all 0.3s ease;
    flex-shrink: 0;
  }
  
  .fancy-checkbox input:checked + .checkmark {
    background-color: #4CAF50;
    border-color: #4CAF50;
  }
  
  .fancy-checkbox .checkmark::after {
    content: "";
    position: absolute;
    left: 5px;
    top: 1px;
    width: 6px;
    height: 12px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: scale(0) rotate(45deg);
    transition: transform 0.2s ease;
  }
  
  .fancy-checkbox input:checked + .checkmark::after {
    transform: scale(1) rotate(45deg);
  }
  
  .fancy-checkbox .label-text {
    transition: color 0.2s, text-decoration 0.2s;
  }
  
  
  .success {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    width: 320px;
    padding: 12px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: start;
    background: #84D65A;
    border-radius: 8px;
    box-shadow: 0px 0px 5px -3px #111;
    margin: 16px auto;
    z-index: 999;
  }
  
  .success__icon {
    width: 20px;
    height: 20px;
    transform: translateY(-2px);
    margin-right: 8px;
  }
  
  .success__icon path {
    fill: #393A37;
  }
  
  .success__title {
    font-weight: 500;
    font-size: 14px;
    color: #393A37;
  }
  
  .success__close {
    width: 20px;
    height: 20px;
    cursor: pointer;
    margin-left: auto;
  }
  
  .success__close path {
    fill: #393A37;
  }
  
  /* From Uiverse.io by andrew-demchenk0 */ 
.error {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  max-width: 300px;
  padding: 12px;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: start;
  background: #EF665B;
  border-radius: 8px;
  box-shadow: 0px 0px 5px -3px #111;
}

.error__icon {
  width: 20px;
  height: 20px;
  transform: translateY(-2px);
  margin-right: 8px;
}

.error__icon path {
  fill: #fff;
}

.error__title {
  font-weight: 500;
  font-size: 14px;
  color: #fff;
}

.error__close {
  width: 20px;
  height: 20px;
  cursor: pointer;
  margin-left: auto;
}

.error__close path {
  fill: #fff;
}

.cookie-card {
  position: fixed;
  bottom: 20px;
  right: 20px;
  max-width: 320px;
  padding: 1rem;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 20px 20px 30px rgba(0, 0, 0, .05);
  z-index: 9999;
}

.title {
  font-weight: 600;
  color: rgb(31 41 55);
}

.description {
  margin-top: 1rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  color: rgb(75 85 99);
}

.description a {
  color: rgb(59 130 246);
  text-decoration: none;
}

.description a:hover {
  text-decoration: underline;
}

.actions {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 1rem;
  column-gap: 1rem;
}

.pref {
  font-size: 0.75rem;
  line-height: 1rem;
  color: rgb(31 41 55);
  text-decoration: underline;
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.pref:hover {
  color: rgb(156 163 175);
}

.accept {
  font-size: 0.75rem;
  line-height: 1rem;
  background-color: #198754;
  font-weight: 500;
  border-radius: 0.5rem;
  color: #fff;
  padding: 0.625rem 1rem;
  border: none;
  cursor: pointer;
}

.accept:hover {
  background-color: #198754;
}

</style>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top"
        style="background-color: rgb(250, 250, 250); box-shadow: 0 2px 20px rgb(240, 240, 240);">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#">Daftar Tugas Anda</a>
            <button class="btn text-success" id="toggleFormBtn">
                <i class="fa-solid fa-search"></i>
            </button>            
        </div>
    </nav>

    <!-- Cookies alert -->
    @if (!request()->cookie('user_id'))
    <div class="cookie-card" id="cookieCard">
        <span class="title">🍪 Cookie Notice</span>
        <p class="description">
            Hey! Kami pakai cookie biar tugas-tugas kamu tetap nyambung dan nggak hilang. 
        </p>
        <div class="actions">
            <button class="accept" onclick="acceptCookie()">Accept</button>
        </div>
    </div>
@endif


    <!-- Floating button -->
    <button id="taskFloatBtn" class="btn btn-success rounded-circle shadow"
        style="position: fixed; bottom: 40px; right: 30px; width: 60px; height: 60px; z-index: 1050;">
        <i class="fa-solid fa-plus"></i>
    </button>


    <!-- Form Tambah Tugas -->
    <div id="taskForm" class="container-fluid mt-5"
        style="display: none; position: relative; z-index: 1; max-width: 1000px">
        <div class="card">
            <button type="button" class="btn-close btn-sm position-absolute top-0 end-0 m-1"
                style="transform: scale(0.8);" aria-label="Close" id="closeFormBtn"></button>
            <div class="card-body">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label" style="margin-top: 20px;">Nama Tugas</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Masukkan teks disini">

                        <!-- Error Message -->
                        <div id="errorBox" class="error" style="display: none; margin-top: 10px;">
                            <div class="error__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"
                                    height="24" fill="none">
                                    <path fill="#fff" d="m13 13h-2v-6h2zm0 4h-2v-2h2z"></path>
                                </svg>
                            </div>
                            <div class="error__title">Kolom ini wajib diisi!</div>
                            <div class="error__close" onclick="closeError()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20"
                                    height="20">
                                    <path fill="#fff"
                                        d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="priority" class="form-label">Pilih Prioritas</label>
                        <select name="priority" id="priority" class="form-select" required>
                            <option value="tinggi">Tinggi</option>
                            <option value="medium" selected>Medium</option>
                            <option value="rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="due_date" class="form-label"> Tanggal Deadline</label>
                        <input type="date" name="due_date" id="due_date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success" style="border-radius: 20px;">Simpan Tugas</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Form Modal Edit Tugas -->
    <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" id="editTaskForm">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editTaskModalLabel">Edit Tugas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_title" class="form-label">Nama Tugas</label>
                            <input type="text" name="title" id="edit_title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_priority" class="form-label">Pilih Prioritas</label>
                            <select name="priority" id="edit_priority" class="form-select" required>
                                <option value="tinggi">Tinggi</option>
                                <option value="medium">Medium</option>
                                <option value="rendah">Rendah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_due_date" class="form-label">Tanggal Deadline</label>
                            <input type="date" name="due_date" id="edit_due_date" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"
                            style="width: 100%; border-radius: 20px;">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Message kalo gaada tugas -->
    @if ($tasks->isEmpty())
        <div class="position-absolute top-50 start-50 translate-middle text-center text-muted"
            style="z-index: 0; width: 80%;">
            <i class="fa-solid fa-file-circle-xmark mb-3" style="font-size: 64px;"></i>
            <p class="mb-1">Tidak ada tugas saat ini.</p>
            <p>Tambahkan tugas dengan ikon <i class="fa-solid fa-plus"></i> di pojok kanan bawah.</p>
        </div>
    @endif


    <!-- Success Message -->
    @if (session('success'))
        <div class="success" id="successMessage">
            <div class="success__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24"
                    fill="none">
                    <path fill-rule="evenodd" fill="#393a37"
                        d="m12 1c-6.075 0-11 4.925-11 11s4.925 11 11 11 11-4.925 11-11-4.925-11-11-11zm4.768 9.14c.0878-.1004.1546-.21726.1966-.34383.0419-.12657.0581-.26026.0477-.39319-.0105-.13293-.0475-.26242-.1087-.38085-.0613-.11844-.1456-.22342-.2481-.30879-.1024-.08536-.2209-.14938-.3484-.18828s-.2616-.0519-.3942-.03823c-.1327.01366-.2612.05372-.3782.1178-.1169.06409-.2198.15091-.3027.25537l-4.3 5.159-2.225-2.226c-.1886-.1822-.4412-.283-.7034-.2807s-.51301.1075-.69842.2929-.29058.4362-.29285.6984c-.00228.2622.09851.5148.28067.7034l3 3c.0983.0982.2159.1748.3454.2251.1295.0502.2681.0729.4069.0665.1387-.0063.2747-.0414.3991-.1032.1244-.0617.2347-.1487.3236-.2554z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div class="success__title">{{ session('success') }}</div>
            <div class="success__close" onclick="document.getElementById('successMessage').remove()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20">
                    <path fill="#393a37"
                        d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z">
                    </path>
                </svg>
            </div>
        </div>
    @endif

    <!-- Inputan Search -->
    <div class="d-flex justify-content-center align-items-center mt-3 d-none" id="searchFormContainer"
        style="display: none;">
        <form action="{{ route('tasks.index') }}" method="GET"
            class="search-container d-flex align-items-center px-3">
            <i class="fas fa-search text-muted me-2"></i>
            <input type="text" name="keyword" id="searchInput"
                class="form-control border-0 shadow-none flex-grow-1" placeholder="Cari tugas..."
                value="{{ request('keyword') }}">
            <button class="btn btn-success" style="border-radius: 10px;">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>
    </div>

    <!-- Task -->
    @foreach ($tasks as $task)
        <div class="d-flex justify-content-center">
            <div class="task-card" style="margin-top: 20px; max-width: 1000px;">
                <div class="task-info d-flex align-items-start">
                    <label class="fancy-checkbox">
                        <input type="checkbox" class="task-checkbox" data-task-id="{{ $task->id }}">
                        <span class="checkmark"></span>
                    </label>

                    <div style="margin-left: 10px; flex: 1;">
                        <div class="task-title"
                            style="max-width: 100%;
                            word-wrap: break-word;
                            overflow-wrap: break-word;
                            white-space: normal;
                            font-size: 14px;
                            word-break: break-word;"
                            id="task-title-{{ $task->id }}">
                            {{ $task->title }}
                        </div>

                        <div class="task-meta d-flex align-items-center gap-1">
                            <i class="fa-regular fa-calendar"></i>
                            <span>{{ \Carbon\Carbon::parse($task->due_date)->translatedFormat('l, d F Y') }}</span> |
                            <span
                                class="badge 
                            @if ($task->priority == 'tinggi') bg-danger
                            @elseif ($task->priority == 'medium') bg-secondary
                            @else bg-success @endif">
                                {{ ucfirst($task->priority) }}
                            </span>

                            <!-- Tombol Edit dan Hapus -->
                            <button type="button" class="btn btn-sm btn-light text-success edit-task-btn"
                                data-id="{{ $task->id }}" data-title="{{ $task->title }}"
                                data-priority="{{ $task->priority }}" data-due_date="{{ $task->due_date }}"
                                title="Edit">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>

                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-light text-danger" title="Hapus">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Tombol untuk form tambah tugas (floating)
        document.getElementById('taskFloatBtn').addEventListener('click', function() {
            const form = document.getElementById('taskForm');

            // Tampilkan form tambah tugas
            form.style.display = 'block';

            // scroll
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Tombol close form
        document.getElementById('closeFormBtn').addEventListener('click', function() {
            document.getElementById('taskForm').style.display = 'none';
        });
    </script>

    <script>
        const form = document.getElementById('taskForm');
        const titleInput = document.getElementById('title');
        const errorBox = document.getElementById('errorBox');

        form.addEventListener('submit', function(e) {
            if (titleInput.value.trim() === '') {
                e.preventDefault(); // Gaakan submit klo kosong
                errorBox.style.display = 'flex';
            } else {
                errorBox.style.display = 'none';
            }
        });

        function closeError() {
            errorBox.style.display = 'none';
        }
    </script>
    <script>
        // Munculin inputan search yang hidden
        document.getElementById("toggleFormBtn").addEventListener("click", function() {
            const formContainer = document.getElementById("searchFormContainer");
            formContainer.classList.toggle("d-none");

        });
    </script>
    <script>
        // Message ilang pas beberapa detik
        setTimeout(() => {
            const msg = document.getElementById('successMessage');
            if (msg) msg.remove();
        }, 3000);
    </script>
    <script>
        document.querySelectorAll('.edit-task-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();

                const id = this.dataset.id;
                const title = this.dataset.title;
                const priority = this.dataset.priority;
                const dueDate = this.dataset.due_date;

                // Isi form
                document.getElementById('edit_title').value = title;
                document.getElementById('edit_priority').value = priority;
                document.getElementById('edit_due_date').value = dueDate;

                // Ubah action form
                document.getElementById('editTaskForm').action = `/tasks/${id}`;

                // Tampilkan modal
                const editModal = new bootstrap.Modal(document.getElementById('editTaskModal'));
                editModal.show();
            });
        });
    </script>
    <script>
        const searchInput = document.getElementById('searchInput');

        searchInput.addEventListener('input', function() {
            if (this.value.trim() === '') {
                window.location.href = "{{ route('tasks.index') }}"; // redirect ke /tasks
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const keyword = urlParams.get('keyword');

            if (keyword) {
                document.getElementById("searchFormContainer").classList.remove("d-none");
            }
        });
    </script>
    <script>
        // Buat styling checkbox
        document.querySelectorAll('.task-checkbox').forEach(function(checkbox) {
            const taskId = checkbox.dataset.taskId;
            const taskTitle = document.getElementById(`task-title-${taskId}`);

            // Ambil status dari localStorage
            const savedState = localStorage.getItem(`task-${taskId}`);
            if (savedState === 'true') {
                checkbox.checked = true;
                taskTitle.style.color = '#28a745';
                taskTitle.style.textDecoration = 'line-through';
            }

            // Event saat checkbox diklik
            checkbox.addEventListener('change', function() {
                const isChecked = checkbox.checked;
                localStorage.setItem(`task-${taskId}`, isChecked);

                if (isChecked) {
                    taskTitle.style.color = '#28a745';
                    taskTitle.style.textDecoration = 'line-through';
                } else {
                    taskTitle.style.color = '';
                    taskTitle.style.textDecoration = '';
                }
            });
        });
    </script>
    <script>
        function acceptCookie() {
            document.getElementById('cookieCard').style.display = 'none';
        }
    </script>
    

</body>

</html>
