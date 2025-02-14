<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect('home');
});

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::post('/home/sendMessage', [HomeController::class, 'ContactUs'])->name('home.sendMessage');

Route::get('/dashboard', [HomeController::class,'indexDashboard'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route::get('/foto', [PhotoController::class,'index'])->name('foto');
    Route::post('/foto', [PhotoController::class,'modificaFoto'])->name('foto.modificaFoto');
});

Route::view('/chisiamo', 'chisiamo')->name('chisiamo');
Route::view('/contatti', 'contatti')->name('contatti');

Route::post('/createAlbum', [AlbumController::class,'store'])->name('album.create');
Route::delete('/album/{id}', [AlbumController::class,'destroy'])->name('album.delete');

// Route::get('/foto/{id}', [PhotoController::class,'index'])->name('foto.view');
// Route::post('/foto/add', [PhotoController::class,'store'])->name('foto.add');

Route::get('/album/{id}/edit', [AlbumController::class, 'edit'])->name('album.edit');
// Route::post(uri: '/album/{id}/add-photo', [PhotoController::class, 'store'])->name('foto.add');
Route::post('/foto/add/{id}', [PhotoController::class, 'store'])->name('foto.add');


require __DIR__.'/auth.php';
