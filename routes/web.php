<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistroUsuario;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registro',[RegistroUsuario::class,'registro'])->name('registro');
Route::post('/registro',[RegistroUsuario::class,'store']);

Route::get('/muro',[PostController::class,'index'])->name('Post.index');

Route::get('/login',[LoginController::class,'login'])->name('Login');
Route::post('/login',[LoginController::class,'store']);
