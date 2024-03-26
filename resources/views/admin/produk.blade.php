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

    .custom-table {
        border-collapse: separate;
        border-spacing: 0 10px;
    }

    .custom-table th,
    .custom-table td {
        border: 1px solid #dee2e6;
        padding: 10px;
    }

    .custom-table th {
        background-color: #343a40;
        color: #fff;
        text-align: center;
    }

    .custom-table tbody tr:nth-child(odd) {
        background-color: #f8f9fa;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #e9ecef;
    }

    .custom-table tbody tr:hover {
        background-color: #d1d7dd;
    }

    .btn-action {
        padding: 3px 8px;
        margin-right: 5px;
    }

    img {
        width: 100px;
        height: auto;
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
                    <h2 class="mb-4"><i class="fas fa-home"></i> Produk</h2>
                    <!-- Tambahkan jarak di sini -->
                </div>
            </div>
        </div>
        <div class="info">
            @if (Session::get('sucessAdd'))
            <div class="alert alert-success   w-32 h-10">
                {{ Session::get('sucessAdd') }}
                @endif
            </div>
            @if (Session::get('successDelete'))
            <div class="alert alert-danger w-32 h-10">
                {{ Session::get('successDelete') }}
            </div>
            @endif
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Product List</h2>
                    </div>
                    <div class="">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add
                            Product</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Form tambah produk
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('store.produk') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="" class="form-label">Nama
                                                Produk</label>
                                            <input type="text" class="form-control" name="nama_produk" id="nama_produk"
                                                placeholder="Nama Produk">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Dokumentasi
                                            </label>
                                            <input type="file" class="form-control" name="foto" id="foto"
                                                placeholder="foto">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Harga
                                            </label>
                                            <input type="text" class="form-control" name="harga" id="harga"
                                                placeholder="harga">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Stok
                                            </label>
                                            <input type="text" class="form-control" name="stok" id="stok"
                                                placeholder="stok">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger"
                                                data-bs-dismiss="modal">kembali</button>
                                            <button type="submit" value="kirim data siswa"
                                                class="btn btn-success">Simpan
                                                data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Akhir modal -->
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Stock</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama Produk</label>
                                        <input type="text" class="form-control" id="recipient-name">

                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">stok:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table custom-table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($produks as $item)

                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $item['nama_produk'] }}</td>
                            <td class="img"> <a href="../assets/image/{{$item->foto}}" target="_blank">
                                    <img src="{{asset('assets/image/' . $item->foto)}}">
                            </td>
                            <td>{{ $item['harga'] }}</td>
                            <td>{{ $item['stok'] }}</td>
                            <td style="text-align:center;">
                                <a class="btn btn-warning btn-sm btn-action" href="/edit/{{$item->id}}">Edit</a>
                                <button class=" btn btn-info btn-sm btn-action" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@fat">Update Stok</button>
                                <form action="/hapus/{{$item->id}}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class=" btn btn-danger btn-sm btn-action">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach

                </table>
            </div>
            <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous">
            </script>
</body>

</html>