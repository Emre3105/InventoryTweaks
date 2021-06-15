<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\OutilController;

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

/*Route::get('/categorieDeposer', function () {
    return view('categorie', ['action' => 'deposer']);
})->middleware(['auth'])->name('categorieDeposer');*/

//Route::get('/categorieDeposer', [CategorieController::class])->middleware(['auth'])->name("categorie_deposer");
//Route::get('/categorieRetirer', [CategorieController::class])->middleware(['auth'])->name("categorie_retirer");

Route::get('/categorieDeposer', function () {
    return view('categorieDeposer');
})->middleware(['auth'])->name('categorieDeposer');

Route::get('/categorieRetirer', function () {
    return view('categorieRetirer');
})->middleware(['auth'])->name('categorieRetirer');

/*Route::get('/categorieRetirer', function () {
    return view('categorie', ['action' => 'retirer']);
})->middleware(['auth'])->name('categorieRetirer');*/

/*Route::get('/outil/{action}',[
    'uses' => 'OutilController@getAction',
    'as'   => 'outil'
])->middleware(['auth'])->name('outil');*/

//Route::get('/outil/deposer', [OutilController::class])->name("outil_deposer");
//Route::get('/outil/retirer', [OutilController::class])->name("outil_retirer");

/*Route::get('/outil', function () {
    return view('categorie');
})->middleware(['auth'])->name('categorieRetirer');*/

Route::get('/outilRetirer', function () {
    return view('outilRetirer');
})->middleware(['auth'])->name('outilRetirer');

Route::get('/outilDeposer', function () {
    return view('outilDeposer');
})->middleware(['auth'])->name('outilDeposer');

Route::get('/sacRetirer', function () {
    return view('sacRetirer');
})->middleware(['auth'])->name('sacRetirer');

Route::get('/sacDeposer', function () {
    return view('sacDeposer');
})->middleware(['auth'])->name('sacDeposer');

Route::get('/accessoireRetirer', function () {
    return view('accessoireRetirer');
})->middleware(['auth'])->name('accessoireRetirer');

Route::get('/accessoireDeposer', function () {
    return view('accessoireDeposer');
})->middleware(['auth'])->name('accessoireDeposer');

Route::get('/autreRetirer', function () {
    return view('autreRetirer');
})->middleware(['auth'])->name('autreRetirer');

Route::get('/autreDeposer', function () {
    return view('autreDeposer');
})->middleware(['auth'])->name('autreDeposer');

Route::get('employes',EmployeController::class);

require __DIR__.'/auth.php';
