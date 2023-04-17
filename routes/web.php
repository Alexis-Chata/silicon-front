<?php

use App\Apimoodle\Apimoodle;
use App\Models\Curso;
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

    $criteria = [];
    $buscar['key'] = "name";
    $buscar['value'] = "Silicon-Valey";
    $criteria[] = $buscar;

    $apiMoodle = new Apimoodle();
    //$buscar = $apiMoodle->buscar_categoria_cursos($criteria);

    $categorias = [];
    $categoria['name'] = "Silicon-Valey";
    $categorias[] = $categoria;
    //$crear_categoria = $apiMoodle->crear_categoria_cursos($categorias);

    $cursos = [];
    $curso['fullname'] = "Silicon-Valey";
    $curso['shortname'] = "Silicon-Valey";
    $curso['categoryid'] = "443";
    $cursos[] = $curso;
    //$crear_curso = $apiMoodle->crear_cursos($cursos);

    //$contenido_curso = $apiMoodle->obtener_contenido_curso("604");

    $enrolments = [];
    $curso['fullname'] = "Silicon-Valey";
    $curso['shortname'] = "Silicon-Valey";
    $curso['categoryid'] = "443";
    $enrolments[] = $curso;

    //$contenido_curso = $apiMoodle->matricular($enrolments);

    //return $contenido_curso;
    $cursos = Curso::all();
    return view('silicon-front.cursos', compact('cursos'));
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
