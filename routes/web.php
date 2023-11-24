<?php

use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostAdminController;
use App\Http\Controllers\RawDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes(['verify' => true]);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/home', function () {
        return view('home');
    })->name('home')->middleware('auth');


// Routing untuk pengguna umum
Route::get('/get-data-pasien', [PasienController::class, 'getDataPasienView']);
Route::get('/pasien/detail/{id}', [PasienController::class, 'getDetailPasienView']);

// Routing untuk Post / Articles
Route::get('/post', [PostController::class, 'index'])->name('post.indexView');
Route::get('/post/informasi-kkn', [PostController::class, 'getPostByTitle']);
Route::get('/post/user/{userId}', [PostController::class, 'getPostByUser']);
Route::get('/post/tanggal/{tanggal}', [PostController::class, 'getPostByDate']);
Route::get('/post/{postId}/comment', [PostController::class, 'getComments']);
Route::get('/post/kategori/{kategoriId}', [PostController::class, 'getPostByCategory']);

// Routing untuk admin
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::prefix('wbpanel')->group(function () {
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/kategori/form', [KategoriController::class, 'createForm']);
    Route::post('/kategori/save', [KategoriController::class, 'save']);
    Route::get('/kategori/update/{id}', [KategoriController::class, 'updateForm']);
    Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
    Route::delete('/kategori/delete/{id}', [KategoriController::class, 'delete']);

    Route::get('/post', [PostAdminController::class, 'index']);
    Route::get('/post/form', [PostAdminController::class, 'createForm']);
    Route::post('/post/save', [PostAdminController::class, 'save']);
    Route::get('/post/update/{id}', [PostAdminController::class, 'updateForm']);
    Route::put('/post/update/{id}', [PostAdminController::class, 'update']);
    Route::delete('/post/delete/{id}', [PostAdminController::class, 'delete']);
});

// login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// raw data
Route::get('/raw-data', [RawDataController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

