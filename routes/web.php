<?php

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
    return view('welcome');
});
Route::get('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::post('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth:api')->name('logout');

// Route::resource('companies', 'CompanyController');
Route::get('/companies/create', [App\Http\Controllers\CompanyController::class, 'create'])->name('companies.create');
Route::get('/companies/{id}/edit', [App\Http\Controllers\CompanyController::class, 'edit'])->name('companies.edit');
Route::get('/companies/show', [App\Http\Controllers\CompanyController::class, 'show'])->name('companies.show');
Route::get('/companies/index', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies.index');

Route::resource('employees', 'EmployeeController');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
