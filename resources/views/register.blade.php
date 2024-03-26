<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/admin.css">

    <style>
    .profile-img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        position: fixed;
        top: 10px;
        right: 10px;
        z-index: 1000;
        /* Mengatur posisi di atas konten lain */
    }

    .search-box {
        margin-bottom: 20px;
        margin-top: -10px;
    }

    .dropdown-menu {
        position: fixed;
        padding-left: 1000px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Kasir</h2>
        <a href="/dashboard" class="active"><i class="fas fa-home"></i> <span class="ms-1">Dashboard</span></a>
        <!-- Tambahkan jarak di sini -->
        <a href="/produk"><i class="fas fa-box"></i> Produk</a> <!-- Ganti ikon pengaturan menjadi ikon produk -->
        <a href="/user"><i class="fas fa-chart-line"></i> Statistik</a>
        <a href="/user"><i class="fas fa-users"></i>User</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a> <!-- Tambahkan tombol log out -->
    </div>

    <!-- Page content -->
    <div class="content">
        <div class="container-fluid">
            <div class="search-box">
                <input type="text" class="form-control" placeholder="Cari...">
            </div>
            <div class="dropdown">
                <button class="btn btn-link text-decoration-none text-reset" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://via.placeholder.com/40" alt="Profile Image" class="profile-img me-2">
                </button>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4"><i class="fas fa-home"></i> Register</h2>
                    <!-- Tambahkan jarak di sini -->
                </div>
            </div>
        </div>

        <div class="container">
            <h2>Form Pendaftaran</h2>
            <form method="POST" action="{{route('register.post')}}" class="card py-4 px-4">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session('successs'))
                <div class="alert alert-success">
                    {{ session('successs') }}
                </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select id="role" name="role" required>
                        <option value="">Pilih peran</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Daftar">
                </div>
            </form>
        </div>


        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>