<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah layanan</title>
    <!-- Tambahkan link CDN untuk Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="text-center py-4 bg-gray-200">
                <h2 class="text-xl font-bold">Tambah barang</h2>
            </div>
            <div class="p-6">
                <a href="/barang" class="block text-center text-blue-500 hover:text-blue-700 mb-4">Kembali</a>

                <form method="post" action="/modul/simpan" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control">
                        @if($errors->has('nama_barang'))
                        <div class="text-danger">{{ $errors->first('nama_barang') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" placeholder="...">
                        @if($errors->has('gambar'))
                        <div class="text-danger">{{ $errors->first('gambar') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">harga</label>
                        <input type="text" name="harga" id="harga" class="form-control" placeholder="...">
                        @if($errors->has('harga'))
                        <div class="text-danger">{{ $errors->first('harga') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">stok</label>
                        <input type="text" name="stok" id="stok" class="form-control" placeholder="...">
                        @if($errors->has('stok'))
                        <div class="text-danger">{{ $errors->first('stok') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="...">
                        @if($errors->has('deskripsi'))
                        <div class="text-danger">{{ $errors->first('deskripsi') }}</div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
     <!-- Tambahkan link CDN untuk Bootstrap JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>