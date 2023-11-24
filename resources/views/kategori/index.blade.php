@extends('layouts.app')

@section('title', 'Kategori')

@section('content')
    <h1>Daftar Kategori</h1>

    <!-- Tampilkan daftar kategori -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="{{ url('/wbpanel/kategori/update/' . $category->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('/wbpanel/kategori/delete/' . $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/wbpanel/kategori/form') }}" class="btn btn-success">Tambah Kategori</a>
@endsection
