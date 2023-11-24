@extends('layouts.app')

@section('title', 'Detail Pasien')

@section('content')
    <h1>Detail Pasien</h1>

    @if($patient)
        <ul>
            <li>ID: {{ $patient->id }}</li>
            <li>Nama: {{ $patient->nama }}</li>
            <li>Alamat: {{ $patient->alamat }}</li>
            <li>Umur: {{ $patient->umur }}</li>
            <!-- Tambahkan informasi lainnya sesuai dengan struktur model Pasien -->
        </ul>
    @else
        <p>Pasien tidak ditemukan.</p>
    @endif

    <a href="{{ url('/get-data-pasien') }}" class="btn btn-primary">Kembali ke Data Pasien</a>
@endsection
