@extends('encadrantViews/layouts/layout')
@section('content')



<!--A voir LaravelCollection -->
<div class="content">
  <div class="row justify-content-center mb-5">
    <h1 class="display-4" style="font-family:Bookman old style">Page de Profile</h1>
  </div>

  <div class="row justify-content-center align-items-center ">
  <img src="" style="width:150px; height:150px; float:center; border-radius:50%">
    {!! Form::open(['action'=>'encadrantController@modifierProfile', 'files' => true, 'class'=> 'p-5', 'style'=> 'box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19)']) !!}
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
        <button type="submit" class="btn btn-info form-control col-4">Enregistrer</button>
        <button type="reset" class = 'btn btn-info form-control col-4'>Annuler</button>
      </div>
    {!! Form::close() !!}
  </div>
</div>

@endsection
