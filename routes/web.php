<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get(uri: '/produk/create', action: [ProdukController::class, 'create']);
Route::post(uri: '/produk', action: [ProdukController::class, 'store']);

route::get('produk', action: [produk_controller::class, 'index']);

route::get('/home', action: function() {
    return view(view: 'welcome');
});
route::get('/index', action: function() {
    return view(view: 'welcome');
});
route::get('/', action: function() {
    return view(view: 'welcome');
});
route::get( '/show/{nama}', action: function($nama): string {
    return "Halo" . $nama;
});
Route::get('/edit/{nama}', function ($nama) {
    return "hallo,".$nama;
})->where('nama','[A-Za-z]+');