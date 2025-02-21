@extends('admin')

@section('title', 'Home Page')

@section('content')

<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-8 px-9">
            <h2 class="text-2xl font-bold">Barang</h2>
            <a href="/modul/tambah" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">Tambah</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">nama barang</th>
                        <th class="px-4 py-2">gambar</th>
                        <th class="px-4 py-2">harga</th>
                        <th class="px-4 py-2">stok</th>
                        <th class="px-4 py-2">Deskripsi</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $a)
                    <tr>
                        <td class="border px-4 py-2">{{ $a->nama_barang }}</td>
                        <td class="border px-4 py-2">
                            <img src="{{ asset('storage/' . $a->gambar) }}" alt="Gambar" class="w-24 h-16 object-cover rounded">
                        </td>
                        <td class="border px-4 py-2">{{ $a->harga }}</td>
                        <td class="border px-4 py-2">{{ $a->stok }}</td>
                        <td class="border px-4 py-2">{{ $a->deskripsi }}</td>
                        <td class="border px-4 py-2">
                            <div class="flex justify-center space-x-4">
                            <a href="/modul/edit/{{ $a->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">Edit</a>
                                <a href="/modul/hapus/{{ $a->id }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection