@extends('layouts.layout')

@section('titreItem')
    <h1>Choix de la catégorie</h1>
@endsection

@section('contenu')

<a href="{{ route('outil', ['action'=>$action]) }}">
  <div class="card border-light mb-3" style="max-width: 20rem;">
    <div class="card-body">
      <h4 class="card-title">Outil</h4>
      <p class="card-text">Visseuse, perceuse, marteau, etc.</p>
    </div>
  </div>
</a>

<a href="{{ route('accessoire.<?=$action?>') }}">
  <div class="card border-light mb-3" style="max-width: 20rem;">
    <div class="card-body">
      <h4 class="card-title">Accessoire en acier</h4>
      <p class="card-text">Vis, clou, équerre, etc.</p>
    </div>
  </div>
</a>

<a href="{{ route('sac.<?=$action?>') }}">
  <div class="card border-light mb-3" style="max-width: 20rem;">
    <div class="card-body">
      <h4 class="card-title">Sac</h4>
      <p class="card-text">Colle, ciment, joint, etc.</p>
    </div>
  </div>
</a>

<a href="{{ route('autre.<?=$action?>') }}">
  <div class="card border-light mb-3" style="max-width: 20rem;">
    <div class="card-body">
      <h4 class="card-title">Autre</h4>
      <p class="card-text">Palette, échaffaudage, BA 13, etc.</p>
    </div>
  </div>
</a>

@endsection