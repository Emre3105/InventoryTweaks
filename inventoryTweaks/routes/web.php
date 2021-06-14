<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AccueilController;

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

//Route::get('/', [EmployeController::class, '__invoke']);

//Route::get('accueil', [AccueilController::class, '__invoke']);

//Route::get('deposer', [AccueilController::class, '__invoke']);

//Route::get('retirer', [AccueilController::class, '__invoke']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('accueil');
})->middleware(['auth'])->name('/');

Route::get('/accueil', function () {
    return view('accueil');
})->middleware(['auth'])->name('accueil');

Route::get('/categorieDeposer', function () {
    return view('categorie', ['action' => 'deposer']);
})->middleware(['auth'])->name('categorieDeposer');

Route::get('/categorie/deposer', [CategorieController::class])->name("categorie_deposer");
Route::get('/categorie/retirer', [CategorieController::class])->name("categorie_retirer");

Route::get('/categorieRetirer', function () {
    return view('categorie', ['action' => 'retirer']);
})->middleware(['auth'])->name('categorieRetirer');

Route::get('employes',EmployeController::class);

require __DIR__.'/auth.php';
