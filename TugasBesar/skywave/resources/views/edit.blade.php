<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Organisasi</title>
    <!-- Tambahkan link ke Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
        <div class="mb-6 text-center">
            <h1 class="text-2xl font-bold text-gray-700">Edit Barang</h1>
        </div>
        <div class="mb-6 text-center">
            <a href="/barang" class="text-blue-500 hover:underline">Kembali</a>
        </div>
        <form method="post" action="/modul/update/{{ $barang->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">nama_barang</label>
                <input type="text" name="nama_barang" placeholder="Isi barang" value="{{ $barang->nama_barang }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @if($errors->has('nama_barang'))
                <div class="text-red-500 text-sm mt-1">
                    {{$errors->first('nama_barang')}}
                </div>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Gambar</label>
                <input type="file" name="gambar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                <img src="{{ asset('storage/' . $barang->gambar) }}" alt="Gambar saat ini" class="mt-2 w-32 h-32 object-cover rounded">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700">harga</label>
                <input type="text" name="harga" placeholder="Isi harga" value="{{ $barang->harga }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @if($errors->has('harga'))
                <div class="text-red-500 text-sm mt-1">
                    {{$errors->first('harga')}}
                </div>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">stok</label>
                <input type="text" name="stok" placeholder="Isi stok" value="{{ $barang->stok }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @if($errors->has('stok'))
                <div class="text-red-500 text-sm mt-1">
                    {{$errors->first('stok')}}
                </div>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">deskripsi</label>
                <input type="text" name="deskripsi" placeholder="Isi deskripsi" value="{{ $barang->deskripsi }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @if($errors->has('deskripsi'))
                <div class="text-red-500 text-sm mt-1">
                    {{$errors->first('deskripsi')}}
                </div>
                @endif
            </div>
            <div class="text-center">
                <input type="submit" value="Edit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            </div>
        </form>
    </div>
</body>
</html>