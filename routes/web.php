<?php

use App\Http\Controllers\CrudController;
use Illuminate\Routing\Router;
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

Route::get('/', [CrudController::class, 'index']) -> name('crud.index');

//Ruta para añadir un nuevo producto
Route::post('/registrar-producto', [CrudController::class, 'create']) -> name('crud.create');

//Ruta para modificar un nuevo producto
Route::post('/modificar-producto', [CrudController::class, 'update']) -> name('crud.update');

//Ruta para eliminar un nuevo producto
Route::get('/eliminar-producto-{id}', [CrudController::class, 'delete']) -> name('crud.delete');