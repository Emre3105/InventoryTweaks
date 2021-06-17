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
                @if($action == "retirer")
                    @foreach($autres as $a)
                        <tr>
                            <td> {{ $a->nom }} </td>
                            <td> {{ $a->taille }} </td>
                            <td style="width: 200px">
                                <form action=" {{ route('retirerAutre') }} " method="post">
                                    @csrf
                                    <input style="visibility : hidden; width : 1px" type="text" name="id_autre" value="<?= $a->id ?>">
                                    <input type="submit" value="Retirer" class="btn btn-primary">
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                @else
                    @foreach($autres as $a)
                        <tr>
                            <td> {{ $a->nom }} </td>
                            <td> {{ $a->taille }} </td>
                            <td style="width: 200px">
                                <form action=" {{ route('deposerAutre') }} " method="post">
                                    @csrf
                                    <input style="visibility : hidden; width : 1px" type="text" name="id_autre" value="<?= $a->id ?>">
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