<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formulario\FormularioController;
use App\Livewire\Formulario\PrincipalComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FormularioController::class, 'index'])->name('formulario.index');
Route::post('/formulario/store', [FormularioController::class, 'store'])->name('formulario.store');
Route::post('/formulario/logout', [FormularioController::class, 'logout'])->name('formulario.logout');


//Route::get('/', PrincipalComponent::class)->name('formulario.principal');
