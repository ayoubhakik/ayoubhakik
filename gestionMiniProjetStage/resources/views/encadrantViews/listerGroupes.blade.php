@extends('encadrantViews/layouts/layout')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 page-hero">
            <h1 class="display-2 sansserif" >Groupes {id_group}</h1>
        </div>
        <br>
        <hr>
        <br>
        <h1 class="sansserif" style="text-align: center">Group Members </h1>
        <br>
        <div class="row">
            <!-- for loop on the groops -->
            @for ($i = 0; $i < 6; $i++)
            <div class="col-lg-4 col-md-6 ">
                <div class="card" style="width: 18rem;">
                    <a href="http://127.0.0.1:8000/encadrant/listerGroupes" class="" style="width: 60%"><img src="..\img\new_logo.png" class="card-img-top" alt="Chef de group"></a>
                </div>
            </div>
            @endfor
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col-lg-12 col-md-12"  style="text-align: center">
                <h2><a href="#" class="sansserif">Download repport</a></h2>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <br>
        <div class="row">
            <form action="submit" method="post" style="width: 100%">
                <div class="col-md-4" style="text-align: center">
                    <div class="input-group mb-3">
                        <h3><label for="grade">Grade : </label></h3>
                        &nbsp;&nbsp;
                        <input type="text" id="grade" class="form-control" aria-label="Grade">
                        <div class="input-group-append">
                            <span class="input-group-text" style="height: 38px">/20</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="input-group mb-3">
                        <h3><label for="grade">Notes :</label></h3>
                        &nbsp;&nbsp;
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <button class="btn btn-outline-dark " type="submit" style="position: absolute; top: -2px; right: 38%">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>


@endsection
