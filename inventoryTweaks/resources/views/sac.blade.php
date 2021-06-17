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
                @if($action == "retirer")
                    @foreach($sacs as $s)
                        <tr>
                            <td> {{ $s->nom }} </td>
                            <td> {{ $s->poids }} </td>
                            <td> {{ $s->couleur }} </td>
                            <td> {{ $s->datePeremption }} </td>
                            <td style="width: 200px">
                                <form action=" {{ route('retirerSac') }} " method="post">
                                    @csrf
                                    <input style="visibility : hidden; width : 1px" type="text" name="id_sac" value="<?= $s->id ?>">
                                    <input type="submit" value="Retirer" class="btn btn-primary">
                                </form> 
                            </td>
                        </tr>
                    @endforeach
                @else
                    @foreach($sacs as $s)
                        <tr>
                            <td> {{ $s->nom }} </td>
                            <td> {{ $s->poids }} </td>
                            <td> {{ $s->couleur }} </td>
                            <td> {{ $s->datePeremption }} </td>
                            <td style="width: 200px">
                                <form action=" {{ route('deposerSac') }} " method="post">
                                    @csrf
                                    <input style="visibility : hidden; width : 1px" type="text" name="id_sac" value="<?= $s->id ?>">
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