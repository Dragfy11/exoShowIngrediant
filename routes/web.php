<?php

use App\Http\Controllers\IngrediantController;
use App\Models\Ingrediant;
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
    $ingrediants=Ingrediant::all();
    return view('welcome', compact('ingrediants'));
});

Route::post('/ingrediant-store', [IngrediantController::class, 'store']);
Route::get('/ingrediant-show/{id}',[IngrediantController::class,'show']);
Route::post('/ingrediant-delete/{id}',[IngrediantController::class,'destroy']);

