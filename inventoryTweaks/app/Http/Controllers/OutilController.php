<?php

namespace App\Http\Controllers;

//use App\Models\Employe;
use Illuminate\Http\Request;

class OutilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('outil');
    }

    public function getAction($action)
    {
        print("on est dans le controller, on recoit l'action ".$action);
    }
}
