<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = '_barang';
    protected $primarykey = 'id';
    protected $fillable = ['nama_barang', 'gambar', 'harga','stok','deskripsi'];
}
