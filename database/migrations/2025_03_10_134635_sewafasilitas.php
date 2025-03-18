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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'mahasiswa', 'dosen', 'staff']);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('kategori_fasilitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->integer('kapasitas');
            $table->string('lokasi');
            $table->enum('status', ['tersedia', 'dibooking', 'pemeliharaan']);
            $table->decimal('harga_per_jam', 10, 2);
            $table->foreignId('kategori_id')->constrained('kategori_fasilitas')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('gambar_fasilitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fasilitas_id')->constrained('fasilitas')->onDelete('cascade');
            $table->string('path_gambar');
            $table->timestamps();
        });

        Schema::create('fasilitas_tambahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        Schema::create('fasilitas_tambahan_pivot', function (Blueprint $table) {
            $table->foreignId('fasilitas_id')->constrained('fasilitas')->onDelete('cascade');
            $table->foreignId('fasilitas_tambahan_id')->constrained('fasilitas_tambahan')->onDelete('cascade');
            $table->primary(['fasilitas_id', 'fasilitas_tambahan_id']);
        });

        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengguna_id')->constrained('pengguna')->onDelete('cascade');
            $table->foreignId('fasilitas_id')->constrained('fasilitas')->onDelete('cascade');
            $table->date('tanggal_pemesanan');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->enum('status', ['pending', 'disetujui', 'ditolak', 'selesai']);
            $table->decimal('total_harga', 10, 2);
            $table->enum('status_pembayaran', ['belum_dibayar', 'dibayar', 'dibatalkan']);
            $table->text('catatan')->nullable();
            $table->timestamps();
        });

        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemesanan_id')->constrained('pemesanan')->onDelete('cascade');
            $table->string('metode_pembayaran');
            $table->decimal('jumlah', 10, 2);
            $table->dateTime('tanggal_pembayaran');
            $table->string('id_transaksi')->nullable();
            $table->enum('status', ['pending', 'sukses', 'gagal']);
            $table->text('bukti_pembayaran')->nullable();
            $table->timestamps();
        });

        Schema::create('ulasan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengguna_id')->constrained('pengguna')->onDelete('cascade');
            $table->foreignId('fasilitas_id')->constrained('fasilitas')->onDelete('cascade');
            $table->foreignId('pemesanan_id')->constrained('pemesanan')->onDelete('cascade');
            $table->integer('rating');
            $table->text('komentar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
        Schema::dropIfExists('kategori_fasilitas');
        Schema::dropIfExists('fasilitas');
        Schema::dropIfExists('gambar_fasilitas');
        Schema::dropIfExists('fasilitas_tambahan');
        Schema::dropIfExists('fasilitas_tambahan_pivot');
        Schema::dropIfExists('pemesanan');
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('ulasan');
        
    }
};
