@extends ('departement/layout')

@section('content')



<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Les Groupes Validés</h4>
                                    <p class="card-category">Les groupes qui respectent la structure de creation des groupes</p>
                                </div>
                                <div class="card-body table-full-width table-responsive" style="max-height:600px;overflow-y:scroll;">
                                   
                                 <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Nom du Groupe</th>                                           
                                            <th>Sujet</th>
                                            <th>Chef de groupe</th>
                                            <th>Membre 1</th>
                                            <th>Membre 2</th>
                                            <th>Membre 3</th>
                                            <th>Encadrent</th>
                                        </thead>

                                      <tbody>
                                      @foreach($groupe as $grp)
                                      <tr>
                                          <td>{{$grp->id_groupe}}</td>
                                          <td>{{$grp->nom_groupe}}</td>
                                          <td>{{$grp->sujet}}</td>
                                          
                                          <td>{{$grp->chef->first()->nom."  ".$grp->chef->first()->prenom}}</td>
                                           

                                           
                                          @foreach($grp->etudians as $etudiant)
                                          <td>{{$etudiant->nom." ".$etudiant->prenom}}</td>
                                          @endforeach
                                          
                                           


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
@endsection