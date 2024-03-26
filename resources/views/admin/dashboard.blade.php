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
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Kasir</h2>
        <a href="/dashboard" class="active"><i class="fas fa-home"></i> <span class="ms-1">Dashboard</span></a>
        <!-- Tambahkan jarak di sini -->
        <a href="/produk"><i class="fas fa-box"></i> Produk</a> <!-- Ganti ikon pengaturan menjadi ikon produk -->
        <a href=""><i class="fas fa-chart-line"></i> Statistik</a>
        <a href="/user"><i class="fas fa-users"></i>User</a>
        <a href="/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a> <!-- Tambahkan tombol log out -->
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
                    <h2 class="mb-4"><i class="fas fa-home"></i> Dashboard</h2>
                    <!-- Tambahkan jarak di sini -->
                </div>
            </div>
            @if (Session::get('success'))
            <div class="alert alert-success w-32 h-10">
                {{ Session::get('success') }}
            </div>
            @endif
            <p>Selamat datang, {{ Auth::user()->name }}!</p>
            <div class="alert alert-secondary" role="alert">
                <h3>Selamat datang Administrator</h3>

            </div>
        </div>

        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>