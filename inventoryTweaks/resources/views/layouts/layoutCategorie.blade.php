@extends('layouts.layout')

@section('titreItem')
    <h1>Choix de la catégorie</h1>
@endsection

@section('contenu')

<div class="container" style="display: flex; jusitify-content: space-around; flex-wrap: wrap;">
  @yield('aOutil')
    <div class="card border-light mb-3" style="max-width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Outil</h4>
        <p class="card-text">Visseuse, perceuse, marteau, etc.</p>
      </div>
    </div>
  </a>

  @yield('aAccessoire')
    <div class="card border-light mb-3" style="max-width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Accessoire en acier</h4>
        <p class="card-text">Vis, clou, équerre, etc.</p>
      </div>
    </div>
  </a>

  @yield('aSac')
    <div class="card border-light mb-3" style="max-width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Sac</h4>
        <p class="card-text">Colle, ciment, joint, etc.</p>
      </div>
    </div>
  </a>

  @yield('aAutre')
    <div class="card border-light mb-3" style="max-width: 20rem;">
      <div class="card-body">
        <h4 class="card-title">Autre</h4>
        <p class="card-text">Palette, échaffaudage, BA 13, etc.</p>
      </div>
    </div>
  </a>
</div>

@endsection