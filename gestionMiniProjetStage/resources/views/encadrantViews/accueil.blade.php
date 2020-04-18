@extends('encadrantViews/layouts/layout')
@section('content')



<style>
    h1{
        font-size: 90px;
    }
    .talk{
        color: #23374d;
        font-family: Georgia, 'Times New Roman', Times, serif;
        letter-spacing: 1px;
        font-size: 20px;
    }
</style>

<div class="content" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12 page-hero" style="text-align: center">
                        <h1 class="display-2">Welcome {Nom encadrant}</h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="container-fluid container" id="content">
                <div class="row">
                    <div class="col-md-8">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p class="talk"> As you can see the groups you have, grade them,  <br> show their students and the repports that's been submitted.</p>
                    </div>
                    <div class="col-md-4 ">
                         @include('encadrantViews.layouts.light_blub')
                    </div>
                </div>
            </div>
            <div class="container-fluid">

            </div>
</div>
@endsection
