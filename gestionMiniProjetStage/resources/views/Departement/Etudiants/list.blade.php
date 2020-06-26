@extends ('departement/layout')

@section('content')
<<<<<<< HEAD

<head>
  <title>Ajax Autocomplete Textbox in Laravel using JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Ajax Autocomplete Textbox </h3><br />
   
   <div class="form-group">
    <input type="text" name="prenom" id="prenom" class="form-control input-lg" placeholder="Enter  Name" />
    <div id="countryList">
    </div>
   </div>
   {{ csrf_field() }}
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 $('#prenom').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('list.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#countryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#prenom').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});
</script>







<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Génie Informatique</h4>
                        <p class="card-category">La Liste des Etudiants</p>
                    </div>
                    <div class="card-body table-full-width table-responsive" style="max-height:600px;overflow-y:scroll;">
<table class="table">
    <thead class="thead-dark">
      <tr table class="table-info">
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Télé</th>
        <th scope="col">Email</th>
        <th scope="col">Niveau</th>
        
        
        
      </tr>
    </thead>
  
    <tbody>
      @foreach ($viewReport as $views)
          
    
      <tr>
        <td>{{$views->id_etudiant}}</td>
        <td>{{$views->nom}}</td>
        <td>{{$views->prenom}}</td>
        <td>{{$views->phone}}</td>
        <td>{{$views->email}}</td>
        <td>{{$views->niveau}}</td>
       
        
       
     
      </tr>
      @endforeach
    </tbody>
</table>
=======
etudiant list
>>>>>>> 3466ca41faf9ad0638128426f85e2dd9444ed514
@endsection