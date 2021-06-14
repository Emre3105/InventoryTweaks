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
}
