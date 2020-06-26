@extends ('departement/layout')

@section('content')
<<<<<<< HEAD
list chef
=======
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Liste des chefs de projet </h4>
                                    <p class="card-category">Les chefs qui respectent la structure de creation des groupes</p>
                                </div>
                                <div class="card-body table-full-width table-responsive" style="max-height:600px;overflow-y:scroll;">
                                   
                                 <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                             <th>Chef de groupe</th> 
                                             <th>Nom du Groupe</th>
                                             <th>Sujet</th>
                                             <th>Encadrent</th>
                                        </thead>

                                      <tbody>
                                      @foreach($groupe as $grp)
                                      <tr>
                                          <td>{{$grp->id_groupe}}</td>
                                         
                                        <td>{{$grp->chef->first()->nom."  ".$grp->chef->first()->prenom}}</td>
                                        <td>{{$grp->nom_groupe}}</td>
                                       <td>{{$grp->sujet}}</td>  
                                       <td>{{$grp->encadrent->nom."  ".$grp->encadrent->prenom}}</td>

                                      </tr>
                                      @endforeach

                                      
                                      </tbody>


                                    </table>
                                    <center> {{$groupe->links()}}</center>
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
>>>>>>> 3466ca41faf9ad0638128426f85e2dd9444ed514
@endsection