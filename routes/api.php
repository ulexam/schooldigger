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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v2.0/districts',[\App\Http\Controllers\Wrapper::class, 'districts'])->name('districts');

Route::get('/v2.0/autocomplete/schools',[\App\Http\Controllers\Wrapper::class, 'school1'])->name('school1')-> middleware('npm');;

Route::get('/v2.0/schools',[\App\Http\Controllers\Wrapper::class, 'school2'])->name('school2')-> middleware('npm');;

Route::get('/v2.0/schools',[\App\Http\Controllers\Wrapper::class, 'school3'])->name('school3')-> middleware('npm');;

Route::get('/v2.0/schools',[\App\Http\Controllers\Wrapper::class, 'school4'])->name('school4')-> middleware('npm');;

Route::get('/user/identitas', function(){
    return [
        'code' => '0',
        'data' => [
            'npm' => '197006034',
            'name' => 'Maulana Ridwan Ibrahim',
            'email' => '197006035@student.unsil.ac.id'
        ]
        ];
})-> middleware('npm');