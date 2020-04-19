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
            @for ($i = 0; $i < 5; $i++)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..\img\new_logo.png" class="card-img-top" alt="Chef de group">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="http://127.0.0.1:8000/encadrant/listerGroupes" class="btn btn-primary">See full informations</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
</div>
@endsection
