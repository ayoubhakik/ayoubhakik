@extends ('departement/layout')

@section('content')



<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Modifications sur la date de soutenance</h4>
                                    <p class="card-category">Les Soutenances  </p>
                                </div>
                                <div class="card-body table-full-width table-responsive" style="max-height:600px;overflow-y:scroll;">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID du Soutenance</th>
                                            <th>Date du Soutenance</th>                                           
                                            <th>Action </th>
                                            
                                            

                                        </thead>
                                        <tbody>
                                            <tr>
                                              <th scope="row">1</th>
                                              <td>Mark</td>
                                              <td>
                                                  <a type="button" class="btn btn-warning btn-sm">Editer

                                                  </a>
                                                  <a type="button" class="btn btn-danger btn-sm">Supprimer</a>
                                            </td>
                                             
                                            </tr>
                                            <tr>
                                              <th scope="row">2</th>
                                              <td>Jacob</td>
                                              <td>Thornton</td>
                                             
                                            </tr>
                                            <tr>
                                              <th scope="row">3</th>
                                              <td>Larry</td>
                                              <td>the Bird</td>
                                             
                                            </tr>
                                          </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection