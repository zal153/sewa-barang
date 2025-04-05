<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    public $timestamps = false;
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori_id',
        'deskripsi',
        'kondisi',
        'lokasi_penyimpanan',
        'stok_total',
        'stok_tersedia',
    ];

    public function kategoriBarang()
    {
        return $this->belongsTo(KategoriBarang::class, 'kategori_id', 'id');
    }
}
