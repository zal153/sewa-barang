<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    use HasFactory;

    protected $table = 'kategori_barang';
    public $timestamps = false;
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];
}
