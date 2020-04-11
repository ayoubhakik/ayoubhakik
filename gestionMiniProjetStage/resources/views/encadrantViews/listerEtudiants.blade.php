@extends('encadrantViews/layouts/layout')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <h1 class="display-4" style="font-family:Bookman old style">Liste des Etudiants</h1>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">filiere</th>
                    </tr>
                </thead>
                
                
                <!-- à remplacer avec une boucle foreach une fois le model créé-->
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>   
                    </tr>
               
                </tbody>
            </table>
        </div>
    </div>
</div>

              

@endsection