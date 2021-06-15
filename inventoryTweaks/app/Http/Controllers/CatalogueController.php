<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Models\Outil;
use App\Models\Accessoire;
use App\Models\Autre;
use App\Models\Sac;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $origine = request()->route()->getName();
        switch($origine)
        {
            case "outilDeposer" : $action = "deposer";
                                $outil = new Outil();
                                $outils = $outil->getIndisponible();
                                return view('outil', compact('outils','action'));
            case "outilRetirer" : $action ="retirer";
                                $outil = new Outil();
                                $outils = $outil->getDisponible();
                                return view('outil', compact('outils','action'));
            case "accessoireDeposer" : $action = "deposer";
                                $accessoire = new Accessoire();
                                $accessoires = $accessoire->getIndisponible();
                                return view('accessoire', compact('accessoires','action'));
            case "accessoireRetirer" : $action ="retirer";
                                $accessoire = new Accessoire();
                                $accessoires = $accessoire->getDisponible();
                                return view('accessoire', compact('accessoires','action'));
            case "autreDeposer" : $action = "deposer";
                                $autre = new Autre();
                                $autres = $autre->getIndisponible();
                                return view('autre', compact('autres','action'));
            case "autreRetirer" : $action ="retirer";
                                $autre = new Autre();
                                $autres = $autre->getDisponible();
                                return view('autre', compact('autres','action'));
            case "sacDeposer" : $action = "deposer";
                                $sac = new Sac();
                                $sacs = $sac->getIndisponible();
                                return view('sac', compact('sacs','action'));
            case "sacRetirer" : $action ="retirer";
                                $sac = new Sac();
                                $sacs = $sac->getDisponible();
                                return view('sac', compact('sacs','action'));
        }
    }

    /*public function __invoke(Request $request)
    {
        return "Welcome to our homepage";
    }*/

    public function genererCatalogue($categorie, $action)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        //
    }
}
