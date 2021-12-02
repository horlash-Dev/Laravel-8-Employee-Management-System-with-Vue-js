<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum','can:master.admin'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/employee', [App\Http\Controllers\Api\EmployeeData::class, 'all_employee'])->middleware(['auth:sanctum','can:master.admin']);
Route::get('/employee/country', [App\Http\Controllers\Api\EmployeeData::class, 'getCountry'])->middleware('auth:sanctum');
Route::get('/employee/department', [App\Http\Controllers\Api\EmployeeData::class, 'getDept'])->middleware('auth:sanctum');
Route::get('/employee/city/{state}', [App\Http\Controllers\Api\EmployeeData::class, 'getCity'])->middleware('auth:sanctum');
Route::get('/employee/state/{country}', [App\Http\Controllers\Api\EmployeeData::class, 'getState'])->middleware('auth:sanctum');
Route::get('/employee/edit/{eid}', [App\Http\Controllers\Api\EmployeeData::class, 'getDetails'])->middleware('auth:sanctum');
Route::put('/employee/update/{eid}', [App\Http\Controllers\Api\EmployeeData::class, 'storeDetails'])->middleware('auth:sanctum');
Route::get('/employee/profile/{eid}', [App\Http\Controllers\Api\EmployeeData::class, 'getUser'])->middleware('auth:sanctum');
