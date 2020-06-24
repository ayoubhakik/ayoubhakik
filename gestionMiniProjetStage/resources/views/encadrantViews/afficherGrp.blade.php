@extends('encadrantViews/layouts/layout')
@section('content')

        
<div class="content">

  <div class="row justify-content-center mb-5 page-hero">

    <h1 class="display-4 sansserif" >Groupe {{ $groupe->nom_groupe }}</h1>

  </div>
  

  <div class="row justify-content-center">
    <!--Membres-->
      @php
          array_map(function($v1, $v2){
            $var = "/storage/avatars/".$v2;
            echo '<div class="card border-primary mr-3" style="width: 10rem;">' ;
            echo '<img class="card-img-top" src='.$var.' alt="Card image cap">';
            echo '<div class="card-footer bg-light "><strong>'.$v1['nom']." ".$v1['prenom'].'</strong></div>';
            echo '</div>';
          }, $membres, $path)
      @endphp
      
  </div>
  <div class="row justify-content-center mb-5 page-hero">

    <h2 class="sansserif " >Sujet : {{ $groupe->sujet }}</h2>

  </div>

  <div class="row justify-content-center align-items-center ">
    <button type="button" class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#soutenanceModal">Soutenance</button>
    <a href="/img/default.jpg" class="btn btn-outline-primary btn-lg m-3" download>Télécharger le rapport</a>
    <button type="button" class="btn btn-outline-primary btn-lg mr-3 " data-toggle="modal" data-target="#contactModal">Contacter le groupe</button>
    <button type="button" class="btn btn-outline-primary btn-lg " data-toggle="modal" data-target="#evaluationModal">Evaluer</button>
  </div> 

    <!--ContactModal-->
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="contactModalLabel">Contact</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {!! Form::open(['action'=>'encadrantController@sendMail', 'id'=>'contactform']) !!}
            {!! Form::hidden('id_groupe', $groupe->id_groupe)!!}
  
              
              <div class="form-group">
                {!! Form::label('message', 'Message:') !!}
                {!! Form::textarea('message', null, ['class'=>'form-control', 'rows' => '3'] ) !!}
              </div>
            {!! Form::close() !!}
          </div>
          <div class="modal-footer">
            {!! Form::submit('Valider', ['class'=>'btn btn-outline-primary', 'form'=>'contactform']) !!}
            <input type="reset" value="Annuler" class="btn btn-outline-primary" form="contactform">
          </div>
        </div>
      </div>
    </div>
  

    <!--Evaluation modal-->
  <div class="modal fade" id="evaluationModal" tabindex="-1" role="dialog" aria-labelledby="evaluationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="evaluationModalLabel">Evaluation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {!! Form::open(['action'=>'encadrantController@evaluer', 'id'=>'evalform']) !!}
          {!! Form::hidden('id_groupe', $groupe->id_groupe)!!}

            <div class="form-group">
              {!! Form::label('note', 'Note:') !!}
              {!! Form::text('note', null,  ['class'=>'form-control' ])!!}
            </div>
            <div class="form-group">
              {!! Form::label('appreciation', 'Appréciation:') !!}
              {!! Form::textarea('appreciation', null, ['class'=>'form-control', 'rows' => '3'] ) !!}
            </div>
          {!! Form::close() !!}
        </div>
        <div class="modal-footer">
          {!! Form::submit('Valider', ['class'=>'btn btn-outline-primary', 'form'=>'evalform']) !!}
          <input type="reset" value="Annuler" class="btn btn-outline-primary" form="evalform">
        </div>
      </div>
    </div>
  </div>

  <!--Soutenance modal-->
  <div class="modal fade" id="soutenanceModal" tabindex="-1" role="dialog" aria-labelledby="soutenanceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="soutenanceModalLabel">Soutenance</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Date: {!! $soutenance->date_soutenance !!}<br>
          Jury:
          <ul>
            @foreach ($jury as $item)
              <li>{!! $item->nom !!} {!! $item->prenom !!}</li>  
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection