@extends('layouts.layout')

@section('titreItem')
    <h1>Sélectionner un sac dans le catalogue</h1>
@endsection

@section('contenu')
    @if(count($sacs) == 0)
        @if($action == "retirer")
            <p>Il n'y à rien à retirer.</p>
        @else
            <p>Il n'y à rien à déposer.</p>
        @endif
    @else
        <table class="table table-hover">
            <thead>
                <th scope="col">Nom</th>
                <th scope="col">Poids</th>
                <th scope="col">Couleur</th>
                <th scope="col">Date de péremption</th>
            </thead>
            <tbody>
                @foreach($sacs as $s)
                    <tr>
                        <td> {{ $s->nom }} </td>
                        <td> {{ $s->poids }} </td>
                        <td> {{ $s->couleur }} </td>
                        <td> {{ $s->datePeremption }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection