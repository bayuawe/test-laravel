<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman kategori
        return view('kategori.index');
    }

    public function getDetailPasienView($id)
{
    // Logika untuk mengambil data pasien berdasarkan ID, misalnya dari model atau database
    $patient = Patient::find($id);

    return view('get-detail-pasien', compact('patient'));
}

}
