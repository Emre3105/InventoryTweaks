@extends('layouts.layout')

@section('titreItem')
    <h1>Tous les employés</h1>
@endsection

@section('contenu')
        <table class="table table-hover">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach($employes as $employe)
                {
                    if($i%2 == 1)
                    {
                        ?>
                        <tr class="table-active">
                            <td> <?=$employe->id?> </td>
                            <td> <?=$employe->nom?> </td>
                            <td> <?=$employe->prenom?> </td>
                        </tr>
                        <?php
                    }
                    else
                    {
                        ?>
                        <tr>
                            <td> <?=$employe->id?> </td>
                            <td> <?=$employe->nom?> </td>
                            <td> <?=$employe->prenom?> </td>
                        </tr>
                        <?php
                    }
                    $i = $i+1;
                }
                ?>
            </tbody>
        </table>
@endsection