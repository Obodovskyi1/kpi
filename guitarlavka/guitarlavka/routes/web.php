<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarLavkaController;

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

Route::get('/', [GuitarLavkaController::class, 'index']);

// Route::get('/catalog', function () {
//     return view('catalog');
// });

// Route::get('/product', function () {
//     return view('product');
// });

Route::get('/product/{product_id}', [GuitarLavkaController::class, 'product']);
Route::get('/catalog', [GuitarLavkaController::class, 'catalog']);