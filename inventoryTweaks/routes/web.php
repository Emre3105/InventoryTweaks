<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\OutilController;
use App\Http\Controllers\CatalogueController;
use App\Models\Outil;
use App\Models\Autre;
use App\Models\Accessoire;
use App\Models\Sac;

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

/*Route::get('/outilRetirer', function () {
    return view('outilRetirer');
})->middleware(['auth'])->name('outilRetirer');

Route::get('/outilDeposer', function () {
    return view('outilDeposer');
})->middleware(['auth'])->name('outilDeposer');*/

Route::get('/outilRetirer',CatalogueController::class)->middleware(['auth'])->name('outilRetirer');
Route::get('/outilDeposer',CatalogueController::class)->middleware(['auth'])->name('outilDeposer');

Route::get('/sacRetirer',CatalogueController::class)->middleware(['auth'])->name('sacRetirer');
Route::get('/sacDeposer',CatalogueController::class)->middleware(['auth'])->name('sacDeposer');

Route::get('/accessoireRetirer',CatalogueController::class)->middleware(['auth'])->name('accessoireRetirer');
Route::get('/accessoireDeposer',CatalogueController::class)->middleware(['auth'])->name('accessoireDeposer');

Route::get('/autreRetirer',CatalogueController::class)->middleware(['auth'])->name('autreRetirer');
Route::get('/autreDeposer',CatalogueController::class)->middleware(['auth'])->name('autreDeposer');



Route::post('/deposerOutil',
    function ()
    {
        $id_outil = $_POST["id_outil"];
        $outil = new Outil();
        $outil->deposer($id_outil);
        return view('accueil');
    }
)->middleware(['auth'])->name('deposerOutil');

Route::post('/retirerOutil',
    function ()
    {
        $id_outil = $_POST["id_outil"];
        $outil = new Outil();
        $outil->retirer($id_outil);
        return view('accueil');
    }
)->middleware(['auth'])->name('retirerOutil');

Route::post('/deposerSac',
    function ()
    {
        $id_sac = $_POST["id_sac"];
        $sac = new Sac();
        $sac->deposer($id_sac);
        return view('accueil');
    }
)->middleware(['auth'])->name('deposerSac');

Route::post('/retirerSac',
    function ()
    {
        $id_sac = $_POST["id_sac"];
        $sac = new Sac();
        $sac->retirer($id_sac);
        return view('accueil');
    }
)->middleware(['auth'])->name('retirerSac');

Route::post('/deposerAutre',
    function ()
    {
        $id_autre = $_POST["id_autre"];
        $autre = new Autre();
        $autre->deposer($id_autre);
        return view('accueil');
    }
)->middleware(['auth'])->name('deposerAutre');

Route::post('/retirerAutre',
    function ()
    {
        $id_autre = $_POST["id_autre"];
        $autre = new Autre();
        $autre->retirer($id_autre);
        return view('accueil');
    }
)->middleware(['auth'])->name('retirerAutre');

Route::post('/deposerAccessoire',
    function ()
    {
        $id_accessoire = $_POST["id_accessoire"];
        $accessoire = new Accessoire();
        $accessoire->deposer($id_accessoire);
        return view('accueil');
    }
)->middleware(['auth'])->name('deposerAccessoire');

Route::post('/retirerAccessoire',
    function ()
    {
        $id_accessoire = $_POST["id_accessoire"];
        $accessoire = new Accessoire();
        $accessoire->retirer($id_accessoire);
        return view('accueil');
    }
)->middleware(['auth'])->name('retirerAccessoire');

/*Route::get('/sacRetirer', function () {
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
})->middleware(['auth'])->name('autreDeposer');*/

Route::get('employes',EmployeController::class);

require __DIR__.'/auth.php';
