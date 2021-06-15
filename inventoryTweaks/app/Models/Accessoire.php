<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Accessoire extends Model
{
    use HasFactory;

    public function getDisponible()
    {
        $accessoires = DB::select('select * from accessoireEnAcier where id in (select id_materiel from casier where typeMateriel = "accessoire")');
        return $accessoires;
    }

    public function getIndisponible()
    {
        $accessoires = DB::select('select * from accessoireEnAcier where id not in (select id_materiel from casier where typeMateriel ="accessoire")');
        return $accessoires;
    }
}
