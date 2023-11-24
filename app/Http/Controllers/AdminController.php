<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Logika untuk menyimpan data baru ke dalam penyimpanan (misalnya, database)
        // Redirect atau tampilkan pesan sukses setelah penyimpanan berhasil
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Logika untuk menampilkan detail data dengan ID tertentu
        return view('admin.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Logika untuk menampilkan formulir pengeditan data dengan ID tertentu
        return view('admin.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Logika untuk memperbarui data dengan ID tertentu di penyimpanan (misalnya, database)
        // Redirect atau tampilkan pesan sukses setelah pembaruan berhasil
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Logika untuk menghapus data dengan ID tertentu dari penyimpanan (misalnya, database)
        // Redirect atau tampilkan pesan sukses setelah penghapusan berhasil
    }
}
