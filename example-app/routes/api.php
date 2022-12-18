<?php

use App\Http\Controllers\Api\PeopleController;
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

Route::get('People',[PeopleController::class,'index']);
Route::get('People',[PeopleController::class,'show']);
Route::get('People',[PeopleController::class,'update']);
Route::get('People',[PeopleController::class,'destroy']);
Route::get('People',[PeopleController::class,'create']);
Route::permanentRedirect('/medrek/308772/People', '/People');
