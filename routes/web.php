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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', App\Http\Controllers\backend\UserController::class)->middleware(['auth','can:master.admin'])->except('show');
Route::resource('country', App\Http\Controllers\backend\CountryController::class)->middleware(['auth','can:master.admin'])->except('show');
Route::resource('state', App\Http\Controllers\backend\StateController::class)->middleware(['auth','can:master.admin'])->except('show');
Route::resource('city', App\Http\Controllers\backend\CityController::class)->middleware(['auth','can:master.admin'])->except('show');
Route::resource('department', App\Http\Controllers\backend\DepartmentController::class)->middleware(['auth','can:master.admin'])->except('show');

Route::get('show/{user}/password', [App\Http\Controllers\backend\UserChangePassword::class, 'showCrendential'])->name('change.password')->middleware(['auth','can:master.admin']);
Route::post('change/{user}/password', [App\Http\Controllers\backend\UserChangePassword::class, 'updateCrendential'])->name('change.u.password')->middleware(['auth','can:master.admin']);

Route::get('/profile/{user}', function () {
     return view('employee.index');
})->name('e-profile')->middleware(['auth']);

Route::get('/{any}', function () {
    return view('employee.index');
})->middleware('auth')->where('any', '.*');
