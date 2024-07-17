<?php

use App\Http\Controllers\AksesPenggunaController;
use App\Http\Controllers\FormalController;
use App\Http\Controllers\FormKriteriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiPribadiController;
use App\Http\Controllers\InputdataController;
use App\Http\Controllers\ListPekerjaanController;
use App\Http\Controllers\NonformalController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SosialLinkController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes(['verify' => true]);
Route::group(['middleware' => ['log']], function () {
    Auth::routes([
        'register' => false,
    ]);
});

// untuk admin
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index_admin']);

    Route::resource('inputdata', InputdataController::class);
    Route::resource('aksespengguna', AksesPenggunaController::class);

    Route::get('/data-pengguna', function () {
        return view('admin.pages.user.tambahpengguna');
    });
    Route::get('/list-lamaran', [ListPekerjaanController::class, 'listlamaran']);
    Route::get('/status-lamaran/{id}/{status}', [ListPekerjaanController::class, 'statuslamaran']);
});



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/caripekerjaan', [App\Http\Controllers\HomeController::class, 'caripekerjaan']);
    Route::resource('/profile', App\Http\Controllers\ProfileController::class);
    Route::get('/history-lamaran', [App\Http\Controllers\HomeController::class, 'historylamaran']);
    Route::get('/edit-kriteria', [App\Http\Controllers\HomeController::class, 'editkriteria']);
    Route::post('/update-kriteria', [App\Http\Controllers\HomeController::class, 'updatekriteria']);
});

Route::resource('kriteria', FormKriteriaController::class);


Route::get('/detail-loker/{id}', [App\Http\Controllers\Front\LokerController::class, 'detailloker']);
Route::get('/submit-loker/{id}', [App\Http\Controllers\Front\LokerController::class, 'submitloker']);

// Route::get('/', function () {
//     return view('front.pages.home');
// });

Route::resource('list_pekerjaan', ListPekerjaanController::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('data-pengguna', UserController::class);
Route::resource('/', HomeController::class);




Route::get('gambar', function (Request $r) {
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



//cvats
//methodresource
Route::resource('informasipribadi', InformasiPribadiController::class);
Route::resource('pengalaman', PengalamanController::class);
Route::resource('skill', SkillController::class);
Route::resource('formal', FormalController::class);
Route::resource('nonformal', NonformalController::class);
Route::resource('sosiallink', SosialLinkController::class);
Route::get('gambarprofil', function (Request $P) {
    return Storage::download($P->rf);
});





// metodget
Route::get('/informasipribadi', [App\Http\Controllers\InformasiPribadiController::class, 'create'])->name('informasipribadi');
Route::get('/kabupaten/{idprov}', [App\Http\Controllers\InformasiPribadiController::class, 'getkabupaten']);
Route::get('/kecamatan/{idkec}', [App\Http\Controllers\InformasiPribadiController::class, 'getkecamatan']);
Route::get('/kelurahan/{idkel}', [App\Http\Controllers\InformasiPribadiController::class, 'getkelurahan']);
Route::get('/pengalaman', [App\Http\Controllers\PengalamanController::class, 'create'])->name('pengalaman');
Route::get('/skill', [App\Http\Controllers\SkillController::class, 'create'])->name('skill');
Route::get('/formal', [App\Http\Controllers\FormalController::class, 'create'])->name('formal');
Route::get('/nonformal', [App\Http\Controllers\NonformalController::class, 'create'])->name('nonformal');
Route::get('/sosiallink', [App\Http\Controllers\SosialLinkController::class, 'create'])->name('sosiallink');
Route::get('/template', [App\Http\Controllers\TemplateController::class, 'index']);
//suratlamarankerja
Route::get('/templatesrt', [App\Http\Controllers\TemplateController::class, 'srt']);
Route::get('/preview/index', function () {
    return view('front.cvats.pages.preview.index');
});

//suratlamarankerja
// Route::get('/templatesrt', function () {
//     return view('front.templsuratlamaran');
// });