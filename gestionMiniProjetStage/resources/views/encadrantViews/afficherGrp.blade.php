@extends('encadrantViews/layouts/layout')
@section('content')

<style>
    .carousel{
        border: 1.5px #0097d7;
        height: 15%;

    }
</style>

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 page-hero">
            <h1 class="display-2 sansserif" >Liste des Groupes</h1>
        </div>
        <div class="row">
            <!-- for loop on the groops -->
            @foreach ($groupes as $grp)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..\img\new_logo.png" class="card-img-top" alt="Chef de group">
                    <div class="card-body">
                        <h5 class="card-title"> {{$grp->nom_groupe}} </h5>
                        <p class="card-text">Sujet : {{$grp->sujet}} </p>
                        <a href="/encadrant/listerGroupes/{{$grp->nom_groupe}}" class="btn btn-primary">See full informations</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
@endsection
