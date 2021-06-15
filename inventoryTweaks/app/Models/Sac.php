<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Sac extends Model
{
    use HasFactory;

    public function getDisponible()
    {
        $sacs = DB::select('select * from sac where id in (select id_materiel from casier where typeMateriel = "sac")');
        return $sacs;
    }

    public function getIndisponible()
    {
        $sacs = DB::select('select * from sac where id not in (select id_materiel from casier where typeMateriel ="sac")');
        return $sacs;
    }
}
