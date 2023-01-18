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

Route::redirect("/", "/dashboard");

Route::middleware(['middleware' => 'auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', \App\Http\Controllers\UsersController::class);
    Route::resource('companies', \App\Http\Controllers\CompanyController::class);
    Route::resource('subcontractors', \App\Http\Controllers\SubContractorController::class);
    Route::resource('wtgtype', \App\Http\Controllers\WTGTypeController::class);
    Route::resource('component', \App\Http\Controllers\ComponentController::class);
    Route::resource('phase', \App\Http\Controllers\PhaseController::class);
});