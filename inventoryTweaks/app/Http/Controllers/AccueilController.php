<?php

namespace App\Http\Controllers;

//use App\Models\Employe;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('accueil');
    }

    public function deposerOutil($id)
    {
        print("je suis dans deposerOutil de accueilController, l'id recu est ".$id);
    }
}
