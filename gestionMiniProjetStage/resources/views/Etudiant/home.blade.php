   <!DOCTYPE html>


   <html>
   <head>
     <title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="../css/etudiantHome.css" rel="stylesheet" />
   </head>

   <body>

    @extends('etudiant/layoutEtudiant')
    @section('content')
    <div class="content" style="overflow-y:hidden;" >
      <div class="container-fluid">
    <div class="carousel slide" data-ride="carousel" id="carouseld" >
      <ol class="carousel-indicators">
        <li data-target=".carousel" data-slide-to="0" class="active"></li>
        <li data-target=".carousel" data-slide-to="1"></li>
        <li data-target=".carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('/images/info.jpg') }}" alt="Un tigre">
          <div class="carousel-caption">
            <h1>Informatique</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('/images/gpmc.jpg') }}" alt="Un tigre" >
          <div class="carousel-caption">
            <h1>GPMC</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('/images/gtr.jpg') }}" alt="Un tigre">
          <div class="carousel-caption">
            <h1>GTR</h1>
          </div>
        </div>
      </div>
    </div>


<section id="cd-timeline" class="cd-container">
    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-picture.svg" alt="Picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Stage</h2>
        <p>Date de début de Stage</p>
       
        <span class="cd-date">Juil 14</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-movie">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-movie.svg" alt="Movie">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Mini-projet</h2>
        <p>Le dernier délai pour rendre le rapport</p>
        
        <span class="cd-date">Jan 18</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-icon-picture.svg" alt="Picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>La soutenance</h2>
        <p>La sotenance de mini projet </p>
     
        <span class="cd-date">Jan 24</span>
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    
    </div> <!-- cd-timeline-block -->
  </section>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="../js/etudiantHome.js"></script>
<script type="text/javascript">

</script>
@endsection
   </body>
   </html>





