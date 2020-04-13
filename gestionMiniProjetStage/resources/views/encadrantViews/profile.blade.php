@extends('encadrantViews/layouts/layout')
@section('content')
        
<!--A voir LaravelCollection -->
<div class="content">
  <div class="row justify-content-center mb-5">
    <h1 class="display-4" style="font-family:Bookman old style">Page de Profile</h1>
  </div>
  <div class="row justify-content-center align-items-center ">
    {!! Form::open(['action'=>'encadrantController@modifierProfile']) !!}
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
          {!! Form::label('telephone', 'Telephone:') !!}
          {!! Form::text('telephone', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('departement', 'Departement:') !!}
          {!! Form::select('departement', ['info' => 'Informatique et reseau', 'indus' => 'Industriel'], null, ['placeholder' => '', 'class' => 'form-control']) !!}
        </div>
      <div class="form-row mt-5 justify-content-around">  
        <button type="submit" class="btn btn-secondary form-control col-4">Enregistrer</button>
        <button type="reset" class = 'btn btn-secondary form-control col-4'>Annuler</button>
      </div>
    {!! Form::close() !!}
  </div>
</div>

@endsection