<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Outil extends Model
{
    use HasFactory;

    public function getDisponible()
    {
        /*$outils = array();
        $casiers = DB::table('casier')->get();
        foreach($casiers as $casiers)
        {
            if($c->typeMateriel == "outil")
            {
                array_push($outils, $c);
            }
        }
        return $outils;*/

        $outils = DB::select('select * from outil where id in (select id_materiel from casier where typeMateriel = "outil")');
        return $outils;
    }

    public function getIndisponible()
    {
        $outils = DB::select('select * from outil where id not in (select id_materiel from casier where typeMateriel ="outil")');
        return $outils;
    }
}
