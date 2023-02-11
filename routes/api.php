<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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
Route::post('signIn',[Controllers\authController::class,'signIn']);
Route::post('login',[Controllers\authController::class,'login']);


Route::middleware("auth:api")->group(function(){
    Route::get('fetchAll',[Controllers\ContSchool::class,'index']);
    Route::post('insert',[Controllers\ContSchool::class,'store']);
    Route::post('delete',[Controllers\ContSchool::class,'delete']);
    Route::post('update/{id}',[Controllers\ContSchool::class,'update']);
    Route::post('search',[Controllers\ContSchool::class,'search']);

});
//Route::get('fetchAll','ContSchool@index');




