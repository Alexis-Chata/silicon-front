<?php

use App\Apimoodle\Apimoodle;
use Illuminate\Support\Facades\Route;

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
    return view('silicon-front.index');
})->name('index');

Route::get('/cursos', function () {
    $apiMoodle = new Apimoodle();
    $token = $apiMoodle->crear_categoria_cursos();
    return $token;
    return view('silicon-front.cursos');
})->name('cursos');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard-admin.index');
    })->name('dashboard');
});
