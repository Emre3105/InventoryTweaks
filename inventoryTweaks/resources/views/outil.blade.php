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
                @if($action == "retirer")
                    @foreach($outils as $o)
                        <tr>
                            <td> {{ $o->nom }} </td>
                            <td> {{ $o->marque }} </td>
                            <td style="width: 200px">
                                <form action=" {{ route('retirerOutil') }} " method="post">
                                    @csrf
                                    <input style="visibility : hidden; width : 1px" type="text" name="id_outil" value="<?= $o->id ?>">
                                    <input type="submit" value="Retirer" class="btn btn-primary">
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                @else
                    @foreach($outils as $o)
                        <tr>
                            <td> {{ $o->nom }} </td>
                            <td> {{ $o->marque }} </td>
                            <td style="width: 200px">
                                <form action=" {{ route('deposerOutil') }} " method="post">
                                    @csrf
                                    <input style="visibility : hidden; width : 1px" type="text" name="id_outil" value="<?= $o->id ?>">
                                    <input type="submit" value="Déposer" class="btn btn-primary">
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    @endif
@endsection