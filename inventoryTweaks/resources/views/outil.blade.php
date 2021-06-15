@extends('layouts.layout')

@section('titreItem')
    <h1>Sélectionner un outil dans le catalogue</h1>
@endsection

@section('contenu')
    @if(count($outils) == 0)
        @if($action == "retirer")
            <p>Il n'y à rien à retirer.</p>
        @else
            <p>Il n'y à rien à déposer.</p>
        @endif
    @else
        <table class="table table-hover">
            <thead>
                <th scope="col">Nom</th>
                <th scope="col">Marque</th>
            </thead>
            <tbody>
                @foreach($outils as $o)
                    <tr>
                        <td> {{ $o->nom }} </td>
                        <td> {{ $o->marque }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection