<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

Class Employe extends Model
{
    use HasFactory;

    public function getAll()
    {
        $employes = DB::table('employe')->get();
        return $employes;
    }
}
