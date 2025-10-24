<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class, 'index'])->name('Home');

Route::get('/details/{employee}', [EmployeeController::class, 'show'])->name('Details');

Route::get('/ajouter', [EmployeeController::class, 'create'])->name('Ajouter');
Route::post('/ajouter', [EmployeeController::class, 'store'])->name('employees.store');

Route::get('/modifier/{employee}', [EmployeeController::class, 'edit'])->name('Modifier');
Route::put('/modifier/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

Route::get('/supprimer/{employee}', [EmployeeController::class, 'destroy'])->name('Supprimer');