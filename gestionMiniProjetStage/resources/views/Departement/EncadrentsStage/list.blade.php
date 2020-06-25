@extends ('departement/layout')

@section('content')



<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Les Encadrants de Stages</h4>
                                    <p class="card-category">La liste Des Encadrants pour les stages </p>
                                </div>
                                <div class="card-body table-full-width table-responsive" style="max-height:600px;overflow-y:scroll;">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Nom </th>                                           
                                            <th>Prenom </th>
                                            <th>Email</th>
                                            <th>Télé</th>
                                            <th>Nombre de groupe</th>
                                            

                                        </thead>
                                        <tbody>
                                            @foreach ($viewReport as $views)
                                                
                                          
                                            <tr>
                                              <td>{{$views->id_encadrant}}</td>
                                              <td>{{$views->nom}}</td>
                                              <td>{{$views->prenom}}</td>
                                             
                                              <td>{{$views->email}}</td>
                                              <td>{{$views->phone}}</td>
                                              <td>{{$views->nbr_groupe}}</td>
                                             
                                              
                                             
                                           
                                            </tr>
                                            @endforeach
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection