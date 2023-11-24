@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron ms-5 me-5">
        <h1 class="display-4">Selamat Datang</h1>
        <p class="lead">Ini adalah halaman home.</p>
        <hr class="my-4">
    </div>

    <div class="row mt-5 ms-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Pasien</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ url('/get-data-pasien') }}" class="btn btn-primary">Data Pasien</a>
                </div>
            </div>
        </div>
    </div>
@endsection
