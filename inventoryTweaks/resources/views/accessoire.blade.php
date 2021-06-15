@extends('layouts.layout')

@section('titreItem')
    <h1>Sélectionner un accessoire en acier dans le catalogue dans le catalogue</h1>
@endsection

@section('contenu')
    @if(count($accessoires) == 0)
        @if($action == "retirer")
            <p>Il n'y à rien à retirer.</p>
        @else
            <p>Il n'y à rien à déposer.</p>
        @endif
    @else
        <table class="table table-hover">
            <thead>
                <th scope="col">Nom</th>
                <th scope="col">Taille</th>
                <th scope="col">Couleur</th>
            </thead>
            <tbody>
                @foreach($accessoires as $a)
                    <tr>
                        <td> {{ $a->nom }} </td>
                        <td> {{ $a->taille }} </td>
                        <td> {{ $a->couleur }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection