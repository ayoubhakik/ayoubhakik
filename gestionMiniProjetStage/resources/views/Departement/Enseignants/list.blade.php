@extends ('departement/layout')

@section('content')
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
        <th scope="col">ID</th>
        <th scope="col">NOM</th>
        <th scope="col">PRENOM</th>
        <th scope="col">TELE</th>
        <th scope="col">EMAILS</th>
        
        
        
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
       
        
@endsection