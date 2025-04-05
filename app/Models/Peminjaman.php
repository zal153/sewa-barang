<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    public $timestamps = false;
    protected $fillable = [
        'kode_peminjaman',
        'user_id',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'tujuan_peminjaman',
        'status',
        'catatan',
        'disetujui_oleh',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
