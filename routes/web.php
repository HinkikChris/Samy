<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index')->name('index');

Route::view('/cursos/robotica/comoempezar', 'courses.courses1')->name('robot');
Route::view('/cursos/lenguas/inglesdesdecero', 'courses.courses2')->name('ingles');
Route::view('/cursos/soft/cursohtml', 'courses.courses3')->name('cursohtml');
Route::view('/cursos/soft/cursocss', 'courses.courses4')->name('cursocss');
Route::view('/cursos/mate/aritmetica', 'courses.courses5')->name('mate');
Route::view('/cursos/soft/jsdesdecero', 'courses.courses6')->name('cursojs');
Route::view('/cursos/pago/', 'layouts.pay')->name('pay');
Route::view('/dashboard', 'dashboard2')->name('dash');
Route::view('/Form', 'dashForm')->name('Form');
Route::view('/Tabla', 'dashTabla')->name('Tabla');

Route::view('index', 'index')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
