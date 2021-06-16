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
                @if($action == "retirer")
                    @foreach($accessoires as $a)
                        <tr>
                            <td> {{ $a->nom }} </td>
                            <td> {{ $a->taille }} </td>
                            <td> {{ $a->couleur }} </td>
                            <td>
                                <form action=" {{ route('retirerAccessoire') }} " method="post">
                                    @csrf
                                    <input style="visibility : hidden; width : 1px" type="text" name="id_accessoire" value="<?= $a->id ?>">
                                    <input type="submit" value="Retirer">
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                @else
                    @foreach($accessoires as $a)
                        <tr>
                            <td> {{ $a->nom }} </td>
                            <td> {{ $a->taille }} </td>
                            <td> {{ $a->couleur }} </td>
                            <td>
                                <form action=" {{ route('deposerAccessoire') }} " method="post">
                                    @csrf
                                    <input style="visibility : hidden; width : 1px" type="text" name="id_accessoire" value="<?= $a->id ?>">
                                    <input type="submit" value="Déposer">
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    @endif
@endsection