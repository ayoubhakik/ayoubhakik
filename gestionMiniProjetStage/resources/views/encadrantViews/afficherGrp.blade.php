@extends('encadrantViews/layouts/layout')
@section('content')
        
<div class="content">

  <div class="row justify-content-center mb-5 page-hero">

    <h1 class="display-4 sansserif" >Groupe {{ $groupe->nom_groupe }}</h1>

  </div>
  
  <div class="row justify-content-around align-items-center ">
    <!--Membres-->
    @foreach ($membres as $item)    
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/img/default.jpg" alt="Card image cap">
        <div class="card-body">
        <p class="card-text">{{ $item->nom }} {{ $item->prenom }}</p>
        </div>
      </div>
    @endforeach

  </div>
</div>

@endsection