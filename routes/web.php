<?php

use App\Livewire\Counter;
use App\Livewire\Home\Inicio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Livewire\Formulario\PrincipalComponent;
use App\Http\Controllers\Formulario\FormularioController;
use App\Http\Controllers\RegistrosController;
use App\Livewire\Formulario\Registros;

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



 Route::get('/', [FormularioController::class, 'index'])->name('formulario.index');
 Route::post('/formulario/store', [FormularioController::class, 'store'])->name('formulario.store');
 Route::post('/formulario/logout', [FormularioController::class, 'logout'])->name('formulario.logout');


//Route::get('/', PrincipalComponent::class)->name('formulario.principal');

//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes(['register' => false]);
Route::get('password/reset', function () { return false; });


Route::get('/home',  Inicio::class)->name('home')->middleware(['auth']);



route::get('/registros', Registros::class)->name('registros')->middleware(['auth']);
Route::get('/registros/carta/{row}', [RegistrosController::class, 'ver_carta'])->name('registros.carta');

Auth::routes();


