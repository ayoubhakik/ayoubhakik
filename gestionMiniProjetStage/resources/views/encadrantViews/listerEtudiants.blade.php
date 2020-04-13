@extends('encadrantViews/layouts/layout')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <h1 class="display-4" style="font-family:Bookman old style">Liste des Etudiants</h1>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead >
                    <tr>
                        <th  scope="col">id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">filiere</th>
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
