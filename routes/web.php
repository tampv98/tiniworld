<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('trang-chu');
})->name('trang-chu');


Route::get('/bantin', function () {
    return view('vulon.vu');
});

Route::get('/right', function () {
    return view('trangchitietleft');
});



Route::get('/member', function () {
    return view('vulon.member');
});
Route::get('/vetini', function () {
    return view('vulon.vetiniword');
});


Route::get('/ve', function () {
    return view('vulon.ve');
});

Route::get('khuyen-mai', function () {
    return view('khuyen-mai');
});
Route::get('chiTiet-km', function () {
    return view('chiTiet-km');
});

Route::get('sinh_nhat', function () {
    return view('sinh_nhat');
})->name('sinh_nhat');

Route::get('tin_tv', function () {
    return view('tin_tv');
})->name('tin_tv');

Route::get('tin_tini', function () {
    return view('tin_tini'); 
})->name('tin_tini');

Route::get('/diadiem', function () {
    return view('diadiem.diadiem');
})->name('diadiem');

Route::get('/trangchitietleft', function () {
    return view('diadiem.trangchitietleft');
})->name('trangchitietleft');

 Route::get('/tiniworldthu50', function () {
     return view('diadiem.tiniworldthu50');
 })->name('tiniworldthu50');

 Route::get('/tinivinh', function () {
     return view('diadiem.tiniworldvinh');
 })->name('tiniworldvinh');

 Route::get('/tinilongbien', function () {
     return view('diadiem.tiniworldlongbien');
 })->name('tiniworldlongbien');

 Route::get('/checkin', function () {
     return view('diadiem.checkinrinhqua');
 })->name('checkinrinhqua');

 Route::get('/khuvuichoi', function () {
     return view('diadiem.khuvuichoi');
 })->name('khuvuichoi');


