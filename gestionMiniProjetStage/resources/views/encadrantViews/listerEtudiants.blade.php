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
            <table class="table table-hover">
                <thead >
                    <tr>
                        <th style="color: #23374d;" scope="col">id</th>
                        <th style="color: #23374d;" scope="col">Nom</th>
                        <th style="color: #23374d;" scope="col">Prenom</th>
                        <th style="color: #23374d;" scope="col">filiere</th>
                    </tr>
                </thead>


                <!-- dummy data fot the view -->
                <tbody style="color : #192965;">
                    <tr>
                        <th scope="row">1</th>
                        <td>BRIOUYA</td>
                        <td>Asmae</td>
                        <td>GI</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>BRIOUYA</td>
                        <td>Hasnae</td>
                        <td>GI</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>SIFANE</td>
                        <td>Mouad</td>
                        <td>GI</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
