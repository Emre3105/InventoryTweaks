<?php

namespace App\Http\Controllers;

//use App\Models\Employe;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if($action == "deposer")
        {
            return view('categorieDeposer');
        }
        if($action == "retirer")
        {
            return view('categorieRetirer');
        }
        return view('accueil');
    }

    public function categorie_deposer()
    {
        $action = "deposer";
    }

    public function categorie_retirer()
    {
        $action = "retirer";
    }
}
