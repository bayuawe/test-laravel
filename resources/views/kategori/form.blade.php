@extends('layouts.app')

@section('title', 'Form Kategori')

@section('content')
    <h1>Form Kategori</h1>

    <!-- Form untuk menambah atau mengedit kategori -->
    <form action="{{ isset($category) ? url('/wbpanel/kategori/update/' . $category->id) : url('/wbpanel/kategori/save') }}" method="POST">
        @csrf
        @if(isset($category))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ isset($category) ? $category->name : old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ isset($category) ? $category->description : old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
