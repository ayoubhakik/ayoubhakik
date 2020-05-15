@extends('encadrantViews/layouts/layout')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12 page-hero" style="text-align: center">
                <h1 class="display-2">Students list</h1>
            </div>
        </div>
        <div class="row">
        @foreach ($students as $student)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="..\img\new_logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->nom}} {{$student->prenom}} </h5>
                        <p class="card-text">Year and sector. (ex. 4th year GI)</p>
                        <a href="#" class="btn btn-primary">Show profile</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>



@endsection
