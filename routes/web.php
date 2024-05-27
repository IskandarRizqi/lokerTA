<?php

use App\Http\Controllers\FormKriteriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputdataController;
use App\Http\Controllers\ListPekerjaanController;
use App\Http\Controllers\UserController;
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
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return view('auth.login');
    }
});
Route::group(['middleware' => ['log']], function () {
    Auth::routes([
        'register' => false,
    ]);
});


Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});

Route::get('/about-us', function () {
    return view('front.about');
});

Route::get('/detail-loker/{id}', [App\Http\Controllers\Front\LokerController::class, 'detailloker']);
Route::get('/submit-loker/{id}', [App\Http\Controllers\Front\LokerController::class, 'submitloker']);

// Route::get('/', function () {
//     return view('front.pages.home');
// });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('list_pekerjaan', ListPekerjaanController::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//routepagesadmin
Route::resource('inputdata', InputdataController::class);
Route::delete('/inputdata/{id}', [InputdataController::class, 'destroy']);
// Route::resource('data-pengguna', UserController::class);
Route::get('/data-pengguna', function () {
    return view('admin.pages.user.tambahpengguna');
});
Route::resource('/', HomeController::class);

// Route::get('/kriteria', function () {
//     return view('front.pages.formkriteria');
// });
Route::resource('kriteria', FormKriteriaController::class);


route::get('gambar', function (Request $r) {
    return Storage::download($r->rf);
});

Route::get('/detailloker', function () {
    return view('front.pages.detailcardloker');
});
