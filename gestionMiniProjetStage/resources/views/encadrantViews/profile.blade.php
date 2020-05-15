@extends('encadrantViews/layouts/layout')
@section('content')
        
<!--A voir LaravelCollection -->
<div class="content">
  <div class="row justify-content-center mb-5 page-hero">
    <h1 class="display-4 sansserif" >Page de Profile</h1>
  </div>
  
  <div class="row justify-content-center align-items-center ">
    {!! Form::model($encadrant, ['action'=> 'encadrantController@modifierProfile', 'files' => true, 'class'=> 'pb-5 pr-5 pl-5 pt-3', 'style'=> 'box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19)']) !!}
      <div class="form-row justify-content-center mb-3">
        <img src="/img/{{ $encadrant->lien_image }}" style="width:200px; height:200px; border-radius:50%" >
        {!! Form::file('avatar') !!}
        {!! Form::hidden('id_encadrant', null, ['class'=>'form-control']) !!}
      </div>
  
    <div class="form-row">
        <div class="form-group col-6">
          {!! Form::label('nom', 'Nom:') !!}
          {!! Form::text('nom', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group col-6">
          {!! Form::label('prenom', 'Prenom:') !!}
          {!! Form::text('prenom', null, ['class'=>'form-control']) !!}
        </div>
        </div>
        <div class="form-group">
          {!! Form::label('email', 'E-mail:') !!}
          {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group ">
          {!! Form::label('phone', 'Telephone:') !!}
          {!! Form::text('phone', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('id_departement', 'Departement:') !!}
          {!! Form::select('id_departement', $departements, $encadrant->id_departement, ['placeholder' => '', 'class' => 'form-control']) !!}
        </div>
      <div class="form-row mt-5 justify-content-around">  
        <button type="submit" class="btn btn-info form-control col-4">Enregistrer</button>
        <button type="reset" class = 'btn btn-info form-control col-4'>Annuler</button>
      </div>
    {!! Form::close() !!}
  </div>
</div>

@endsection