<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Admindashboard;
use App\Http\Controllers\Admin\Admindosen;
use App\Http\Controllers\Admin\Adminsppendidikan;
use App\Http\Controllers\Admin\Adminsppenelitian;
use App\Http\Controllers\Admin\Adminsppengabdian;
use App\Http\Controllers\Admin\Adminsppenunjang;
use App\Http\Controllers\Admin\Formattemplate;
use App\Http\Controllers\Admin\PengajuanKeluar;
use App\Http\Controllers\Admin\PengajuanMasuk;
use App\Http\Controllers\Admin\Profile;
use App\Http\Controllers\Admin\RiwayatAdmin;
use App\Http\Controllers\Admin\Skpengajuan;
use App\Http\Controllers\Admin\Skpengajuann;
use App\Http\Controllers\Admin\Template2;
use App\Http\Controllers\Dosen\Dashboard;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dosen\Template;
use App\Http\Controllers\Dosen\Pengajuan;
use App\Http\Controllers\Dosen\Riwayat;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);


Route::prefix('Admin')->middleware('auth:admin')->group(function(){

    Route::controller(Admindashboard::class)->group(function(){
    Route::get('/dashboard','index');
    });

    Route::controller(RiwayatAdmin::class)->group(function(){
        Route::get('/riwayat-pengajuan','index');
        Route::get('/riwayat-pengajuan/{Berkaspengajuan}','show');
        Route::get('/riwayat-pengajuan/detail-sk/{Skpengajuan}','view');
    });

    Route::controller(PengajuanMasuk::class)->group(function(){
        Route::get('/pengajuan/pengajuan-masuk','index');
        Route::get('/pengajuan/pengajuan-masuk/{Berkaspengajuan}','show');
        Route::post('/pengajuan/pengajuan-masuk/deskripsi/{Berkaspengajuan}', 'upp' );
        Route::put('/pengajuan/pengajuan-masuk/setuju/{id}', 'setuju' );
        Route::put('/pengajuan/pengajuan-masuk/ditolak/{id}', 'ditolak' );
    });

    Route::controller(Admindosen::class)->group(function(){
        Route::get('/dosen','index');
        Route::post('/dosen/upload','upload');
        Route::get('/dosen/create','create');
        Route::post('/dosen/create','aksicreate');
        Route::get('/dosen/show/{dosen}','show');
        Route::get('/dosen/edit/{dosen}',  'edit');
        Route::PUT('/dosen/edit/{dosen}',  'update');
        Route::get('/dosen/hapus/{dosen}',  'hapus');
    });


    Route::controller(Template2::class)->group(function(){
        Route::get('/template','index');
        Route::get('/template/create','create');
        Route::post('/template','store');
        Route::get('/template/hapus/{Templatee}',  'hapus');
        Route::get('/template/{Templatee}',  'show');
    });

    Route::controller(Profile::class)->group(function(){
        Route::get('/profile','index');
        Route::post('/profile/{admin}','update');

    });


    Route::controller(Skpengajuann::class)->group(function(){
      Route::get('/pengajuan/sk-pengajuan','index');
      Route::get('/pengajuan/sk-pengajuan/create','create');
      Route::post('/pengajuan/sk-pengajuan','addsk');
      Route::get('/pengajuan/sk-pengajuan/{Skpengajuan}','show');

    });

});



Route::prefix('Dosen')->middleware('auth:dosen')->group(function(){

  Route::controller(Dashboard::class)->group(function(){
    Route::get('/dashboard','index');
  });

  Route::controller(Riwayat::class)->group(function(){
    Route::get('/riwayat','index');
    Route::get('/riwayat/{Berkaspengajuan}','show');
  });

Route::controller(Pengajuan::class)->group(function(){
    Route::get('/pengajuan','index');
    Route::get('/pengajuan/add','add'); 
    Route::get('/pengajuan/{Berkaspengajuan}','show');
    Route::get('/pengajuan/edit/{Berkaspengajuan}', 'edit');
    // Route::put('/pengajuan/edit/{Berkaspengajuan}', 'update');
    Route::post('/pengajuan/edit/{Berkaspengajuan}', 'kirimdata');
    Route::post('/pengajuan','aksiTambah');
    // Route::post('/pengajuan','kirimdata');
    Route::get('/pengajuan/hapus/{Berkaspengajuan}', 'hapus');
    Route::post('/pengajuan/kirim/{id}', 'kirim' );

});

Route::controller(Template::class)->group(function(){
    Route::get('/template','index');
    Route::delete('/template/{Templatee}','destroy');

});

});