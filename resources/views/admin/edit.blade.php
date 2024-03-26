<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/admin.css">
    <title>Document</title>
</head>

<body>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger w-75">
                {{ $error }}</li>
                @endforeach
        </ul>
        @endif
        <div>
            <div class="card" style="margin:20px; ">
                <div class="card-header">Edit data</div>
                <div class="card-body">
                    <form action="/ubah/{{$produks->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <label>Nama</label><br>
                        <input type="text" name="nama_produk" id="nama" class="form-control" placeholder="Masukkan Nama"
                            value="{{$produks->nama_produk}}">
                        <label>Gambar</label><br>
                        <td> <img src="{{asset('assets/image/' . $produks->foto)}}" width="80"> </td>
                        <input type="file" name="foto">
                        <label>Harga</label><br>
                        <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga"
                            value="{{$produks->harga}}">
                        <label>Stok</label><br>
                        <input type="text" name="stok" id="stok" class="form-control" placeholder="Stok"
                            value="{{$produks->stok}}">
                        <button type="submit" value="Kirim data siswa" class=" btn btn-success">Kirim</button>
                        <a href="/admin" class="btn btn-danger btn-sm">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
                
    </div>

</body>

</html>