<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Account\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Account\PegawaiContrroller;
use App\Http\Controllers\Account\DataPegawaiController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::prefix('/dashboard')->group(static function () {
    // create data pegawai
    Route::get('pegawai', [App\Http\Controllers\Account\PegawaiContrroller::class, 'create'])
        ->name('pegawai.create')->middleware('auth');

    // store data pegawai
    Route::post('pegawai', [App\Http\Controllers\Account\PegawaiContrroller::class, 'store'])
        ->name('pegawai.store')->middleware('auth');

    // create siyalemen
    Route::get('pegawai/siyalemen/{dataPegawai}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'create_sylm'])
        ->name('siyalemen.create')->middleware('auth');

    // store siyalemen
    Route::post('pegawai/siyalemen/{dataPegawai}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'store_sylm'])
        ->name('siyalemen.store')->middleware('auth');

    // create foto
    Route::get('pegawai/foto/{siyalem}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'create_foto'])
        ->name('photo.create')->middleware('auth');

    // store foto
    Route::post('pegawai/foto', [App\Http\Controllers\Account\PegawaiContrroller::class, 'store_photo'])
        ->name('photo.store')->middleware('auth');
    // table data pegawai
    Route::get('data/pegawai', [App\Http\Controllers\Account\DataPegawaiController::class, 'index'])
        ->name('index.pegawai')->middleware('auth');

    // cetak data pegawai
    Route::get('cetak/data/{dataPegawai}', [App\Http\Controllers\Account\DataPegawaiController::class, 'cetakan'])
        ->name('cetak.pegawai')->middleware('auth');

    // hapus data
    Route::get('delete/{id}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'destroy'])
        ->name('destroy')->middleware('auth');

    // view edit data pegawai
    Route::get('edit/{dataPegawai}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'edit'])
        ->name('edit.data')->middleware('auth');

    Route::post('update/foto/{dataPegawai}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'update_foto'])
        ->name('update.foto')->middleware('auth');

    Route::post('update/data/{dataPegawai}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'update_data'])
        ->name('update.data')->middleware('auth');

    Route::post('update/siyalems/{dataPegawai}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'update_siyalem'])
        ->name('update.siyalem')->middleware('auth');

    Route::get('cetak/data/', [App\Http\Controllers\Account\DataPegawaiController::class, 'search'])
        ->name('search')->middleware('auth');

    Route::get('cetak/{dataPegawai}', [App\Http\Controllers\Account\DataPegawaiController::class, 'print'])
        ->name('print')->middleware('auth');

    Route::get('tambah/user', [App\Http\Controllers\Account\UserController::class, 'index'])
        ->name('ada')->middleware('auth');

    Route::post('/create', [App\Http\Controllers\Account\UserController::class, 'store'])
        ->name('create')->middleware('auth');

    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])
        ->name('buat_akun')->middleware('auth');

    Route::get('print_data/', [App\Http\Controllers\Account\DataPegawaiController::class, 'cetak'])
        ->name('print_data')->middleware('auth');

    Route::get('manage/user', [App\Http\Controllers\Account\UserController::class, 'index'])
        ->name('index.user')->middleware('auth');

    Route::get('edit/user/{user}', [App\Http\Controllers\Account\UserController::class, 'edit'])
        ->name('index.user')->middleware('auth');

    Route::post('update/user/{user}', [App\Http\Controllers\Account\UserController::class, 'update'])
        ->name('update.user')->middleware('auth');

    Route::get('delete/user/{user}', [App\Http\Controllers\Account\UserController::class, 'destroy'])
        ->name('destroy.user')->middleware('auth');

    Route::get('scan/', [App\Http\Controllers\Account\DataPegawaiController::class, 'cari'])
        ->name('cari')->middleware('auth');

    Route::get('datamaster/', [App\Http\Controllers\Account\DataMasterController::class, 'index'])
        ->name('datamaster')->middleware('auth');

    Route::get('addimage/', [App\Http\Controllers\Account\DataPegawaiController::class, 'image'])
        ->name('addimage')->middleware('auth');

    Route::post('uploadimage/', [App\Http\Controllers\Account\DataPegawaiController::class, 'uploadimage'])
        ->name('uploadimage')->middleware('auth');

    Route::get('export/', [App\Http\Controllers\Account\DataPegawaiController::class, 'export'])
        ->name('export')->middleware('auth');

    Route::get('export/file/', [App\Http\Controllers\Account\DataPegawaiController::class, 'exportFile'])
        ->name('export.file')->middleware('auth');
});




