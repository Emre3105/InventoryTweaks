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

    public function deposer($id)
    {
        DB::update("UPDATE casier SET etat='occupe', typeMateriel='outil', id_materiel='".$id."' WHERE etat='libre' LIMIT 1");
    }

    public function retirer($id)
    {
        DB::update("UPDATE casier SET etat='libre', typeMateriel=null, id_materiel=null WHERE id_materiel=".$id." and typeMateriel='outil' LIMIT 1");
    }
}
