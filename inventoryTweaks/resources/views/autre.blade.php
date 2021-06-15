@extends('layouts.layout')

@section('titreItem')
    <h1>Sélectionner un objet dans le catalogue</h1>
@endsection

@section('contenu')
    @if(count($autres) == 0)
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
            </thead>
            <tbody>
                @foreach($autres as $a)
                    <tr>
                        <td> {{ $a->nom }} </td>
                        <td> {{ $a->taille }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection