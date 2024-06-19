<?php

use App\Http\Controllers\AksesPenggunaController;
use App\Http\Controllers\FormKriteriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputdataController;
use App\Http\Controllers\ListPekerjaanController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    // if (Auth::check()) {
    //     return redirect('/home');
    // } else {
    // }
    return view('auth.login');
});
Route::group(['middleware' => ['log']], function () {
    Auth::routes([
        'register' => false,
    ]);
});

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});

// untuk admin
Route::middleware(['auth', 'admin'])->group(function () {
});



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/caripekerjaan', [App\Http\Controllers\HomeController::class, 'caripekerjaan']);
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile']);
});



Route::get('/detail-loker/{id}', [App\Http\Controllers\Front\LokerController::class, 'detailloker']);
Route::get('/submit-loker/{id}', [App\Http\Controllers\Front\LokerController::class, 'submitloker']);

// Route::get('/', function () {
//     return view('front.pages.home');
// });

Auth::routes();
Route::resource('list_pekerjaan', ListPekerjaanController::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//routepagesadmin
Route::resource('inputdata', InputdataController::class);
Route::resource('aksespengguna', AksesPenggunaController::class);
// Route::resource('data-pengguna', UserController::class);
Route::get('/data-pengguna', function () {
    return view('admin.pages.user.tambahpengguna');
});
Route::resource('/', HomeController::class);

Route::resource('kriteria', FormKriteriaController::class);


route::get('gambar', function (Request $r) {
    return Storage::download($r->rf);
});

// Route::get('/detailloker', function () {
//     return view('front.pages.detailcardloker');
// });
Route::get('/privasi', function () {
    return view('front.privasi');
});
Route::get('/support', function () {
    return view('front.support');
});
Route::get('/about-us', function () {
    return view('front.about');
});
Route::get('/templatecv', function () {
    return view('front.templatecv');
});
Route::get('/selengkapnya', [App\Http\Controllers\HomeSelengkapnyaController::class, 'index']);

Route::get('/templatesrt', function () {
    return view('front.templsuratlamaran');
});
