<?php

use App\Http\Controllers\admin\user\usercontroller;
use App\Http\Controllers\SIScontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});
//======================================================
Auth::routes(['register' => false]);
Route::get('/home', [SIScontroller::class, 'index'])->name('home');
//======================================================

Route::prefix('admin')->group(function () {
    Route::get('usuario', [usercontroller::class, 'index'])->name('usuario.index');
    Route::get('usuario/registrar', [usercontroller::class, 'create'])->name('usuario.registrar');
    Route::post('usuario/store', [usercontroller::class, 'store'])->name('usuario.store');
});
