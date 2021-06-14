@extends('layouts.layout')

@section('titreItem')
    <h1>Choix de l'action à effectuer</h1>
@endsection

@section('contenu')

<a href="{{ route('categorieDeposer') }}">
    <div class="card bg-light mb-3" style="max-width: 20rem;">
    <div class="card-header">Déposer</div>
    <div class="card-body">
        <h4 class="card-title">Déposer un élément</h4>
        <p class="card-text">Il suffira de sélectionner votre catégorie, sélectionner l'élément, puis choisir un casier.</p>
    </div>
    </div>
</a>
<a href="{{ route('categorieRetirer') }}">
    <div class="card bg-light mb-3" style="max-width: 20rem;">
    <div class="card-header">Retirer</div>
    <div class="card-body">
        <h4 class="card-title">Retirer un élément</h4>
        <p class="card-text">Il suffira de sélectionner votre catégorie, puis de sélectionner l'élément affiché dans le catalogue.</p>
    </div>
    </div>
</a>

@endsection