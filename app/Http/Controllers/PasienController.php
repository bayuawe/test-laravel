<?php

namespace App\Http\Controllers;

use App\Models\Patient; // Sesuaikan dengan nama model yang sesuai
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function getDataPasienView()
    {
        // Logika untuk mengambil data pasien, misalnya dari model atau database
        $patients = Patient::all();

        return count($patients) > 0
            ? view('pasien.get-data-pasien', compact('patients'))
            : view('pasien.get-data-pasien')->with('message', 'Data tidak ditemukan.');
    }

    public function getDetailPasienView($id)
    {
    // Logika untuk mengambil data pasien berdasarkan ID, misalnya dari model atau database
    $patient = Patient::find($id);

    return view('get-detail-pasien', compact('patient'));
    }

}
