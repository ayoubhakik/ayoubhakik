@extends('encadrantViews/layouts/layout')
@section('content')
      
      
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <h1 class="display-4 " style="font-family:Bookman old style">Liste des Groupes</h1>
        </div>
        <div class="row">
        <p class="text-muted" style="font-family:Century gothic">Cliquez sur un ID pour accéder au groupe</p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Chef du groupe</th>
                        <th scope="col">Membres du groupe</th>
                        <th scope="col">Sujet</th>
                        <th scope="col">Filiere</th>
                        <th scope="col">Date de soutenance</th>
                    </tr>
                </thead>
                
                
                <!-- à remplacer avec une boucle foreach une fois le model créé-->
                <tbody>
                    <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>Mark</td>
                        <td><ul>
                                <li>membre 1</li>
                                <li>membre 2</li>

                            </ul></td>
                        <td>@mdo</td>   
                        <td>@mdo</td>
                        <td>@mdo</td>      
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

              

@endsection