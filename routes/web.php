<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('cursos', function () {
    return "Bienvenido a los cursos";
});

//Formulario para crear un curso va antes del siguiente porque se leera como {cursos}
Route::get('cursos/create', function () {
    return "En esta página podras crear un curso";
});

Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso : $curso";
});

//Curso y categoria
Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
    return "Bienvenido al curso: $curso, de la categoria: $categoria";
});

//Variable categoria sea opcional e inicializo la variable
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

//     if ($categoria) {
//         return "Bienvenido al curso: $curso, de la categoria: $categoria";

//     } else {
//         return "Bienvenido al curso : $curso";
//     } 
// });
