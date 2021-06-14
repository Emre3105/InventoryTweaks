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
        return view('categorie');
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
