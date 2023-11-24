@extends('layouts.app')

@section('title', 'Get Data Pasien')

@section('content')
    <h1>Data Pasien</h1>

    @if(isset($message))
        <p>{{ $message }}</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->nama }}</td>
                        <td>{{ $patient->alamat }}</td>
                        <td>{{ $patient->umur }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
