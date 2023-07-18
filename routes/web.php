<?php

use App\Http\Controllers\FlexGrid;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('grid-flex-site1',[FlexGrid::class,'gfsite1']);
Route::get('features',[FlexGrid::class,'features']);
Route::get('docs',[FlexGrid::class,'docs']);
