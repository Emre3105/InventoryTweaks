<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Autre extends Model
{
    use HasFactory;

    public function getDisponible()
    {
        $autres = DB::select('select * from autre where id in (select id_materiel from casier where typeMateriel = "autre")');
        return $autres;
    }

    public function getIndisponible()
    {
        $autres = DB::select('select * from autre where id not in (select id_materiel from casier where typeMateriel ="autre")');
        return $autres;
    }
}
