@extends ('departement/layout')

@section('content')
<<<<<<< HEAD
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Génie Informatique</h4>
                        <p class="card-category">La Liste Des Enseignants</p>
                    </div>
                    <div class="card-body table-full-width table-responsive" style="max-height:600px;overflow-y:scroll;">
<table class="table">
    <thead class="thead-dark">
      <tr table class="table-success">
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Télé</th>
        <th scope="col">Email</th>
        
        
        
      </tr>
    </thead>
  
    <tbody>
      @foreach ($viewReport as $views)
          
    
      <tr>
       
        <td>{{$views->id_encadrant}}</td>
        <td>{{$views->nom}}</td>
        <td>{{$views->prenom}}</td>
        <td>{{$views->phone}}</td>
        <td>{{$views->email}}</td>
     
      </tr>
      @endforeach
    </tbody>
</table>
       
        
=======
enseignant list
>>>>>>> 3466ca41faf9ad0638128426f85e2dd9444ed514
@endsection