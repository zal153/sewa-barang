<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('kategori_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->unsignedBigInteger('kategori_id');
            $table->text('deskripsi')->nullable();
            $table->string('kondisi');
            $table->string('lokasi_penyimpanan');
            $table->integer('stok_total');
            $table->integer('stok_tersedia');
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategori_barang')->onDelete('cascade');
        });

        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('kode_peminjaman')->unique();
            $table->unsignedBigInteger('user_id');
            $table->datetime('tanggal_peminjaman');
            $table->datetime('tanggal_pengembalian');
            $table->text('tujuan_peminjaman')->nullable();
            $table->enum('status', ['diajukan', 'disetujui', 'dipinjam', 'dikembalikan', 'ditolak', 'terlambat'])->default('diajukan');
            $table->text('catatan')->nullable();
            $table->unsignedBigInteger('disetujui_oleh')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('disetujui_oleh')->references('id')->on('users')->onDelete('set null');
        });

        Schema::create('detail_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peminjaman_id');
            $table->unsignedBigInteger('barang_id');
            $table->integer('jumlah');
            $table->enum('kondisi_saat_dipinjam', ['baik', 'rusak_ringan', 'rusak_berat'])->default('baik');
            $table->enum('kondisi_saat_dikembalikan', ['baik', 'rusak_ringan', 'rusak_berat'])->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();

            $table->foreign('peminjaman_id')->references('id')->on('peminjaman')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barang')->onDelete('cascade');
        });

        Schema::create('log_aktivitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('aktivitas');
            $table->text('deskripsi')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('log_aktivitas');
        Schema::dropIfExists('detail_peminjaman');
        Schema::dropIfExists('peminjaman');
        Schema::dropIfExists('barang');
        Schema::dropIfExists('kategori_barang');
    }
};
