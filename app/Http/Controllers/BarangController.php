<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('pages.barang.index');
    }

    public function tambah()
    {
        return view('pages.barang.tambah');
    }

    public function tambah_barang(Request $request)
    {

    }

    public function edit()
    {
        return view('pages.barang.edit');
    }
}
