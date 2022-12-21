<?php

<<<<<<< HEAD
use App\Http\Controllers\ContactController;
=======
>>>>>>> 3caeca8 (add some features)
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Dashboard;
use App\Http\Controllers\WisataController;
<<<<<<< HEAD
=======
use App\Http\Controllers\CommentController;
>>>>>>> 3caeca8 (add some features)

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
Route::get('/', Home::class)->name('/');
=======
Route::get('/', [Home::class, 'render'])->name('/');
>>>>>>> 3caeca8 (add some features)
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/explore', function () {
    return view('explore');
});
<<<<<<< HEAD
Route::get('/kontak-kami',[ContactController::class,'contact']);
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');
=======
Route::get('/komentar', function () {
    return view('komentar');
});
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/comments',[CommentController::class, 'index']);
Route::get('/comments', 'CommentController@index');
Route::post('/comments', [CommentController::class, 'store']);
>>>>>>> 3caeca8 (add some features)

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
<<<<<<< HEAD
    Route::get('/dashboard', Dashboard::class )->name('dashboard');
=======
    
    Route::get('/dashboard', [Dashboard::class, 'render'] )->name('dashboard');
>>>>>>> 3caeca8 (add some features)
});
