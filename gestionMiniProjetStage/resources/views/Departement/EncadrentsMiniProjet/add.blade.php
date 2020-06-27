@extends ('departement/layout')

@section('content')

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Ajouter un encadrant
                            <a href="{{ route('list_encadrant') }}" class="text-primary pull-right">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body" style="max-height:600px;overflow-y:scroll;">
                        <form action="{{ $encadrant ? route('saveEncadrant') : route('addEncadrant') }}" method="post">
                            @csrf
                            @if($encadrant)
                                <input type="hidden" name="id" value="{{ $encadrant->id_encadrant ?? '' }}">
                            @endif
                            <div class="p-1">
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nom" placeholder="Nom de l'encadrant"
                                value="{{ $encadrant->nom  ?? '' }}">
                            </div>
                            <div class="p-1">
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom" placeholder="Prénom de l'encadrant"
                                value="{{ $encadrant->prenom  ?? '' }}">
                            </div>
                            <div class="p-1">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email de l'encadrant"
                                value="{{ $encadrant->email  ?? '' }}">
                            </div>
                            <div class="p-1">
                                <label>Téléphone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Téléphone de l'encadrant"
                                value="{{ $encadrant->phone  ?? '' }}">
                            </div>
                            <div class="p-1">
                                <label>Nbr Groupes</label>
                                <input type="number" min="1" max="20" class="form-control" name="nbr_groupe" placeholder="Nombre de groupes"
                                value="{{ $encadrant->nbr_groupe  ?? '' }}">
                            </div>
                            <div class="p-1">
                                <label>Département</label>
                                <select class="form-control" name="departement">
                                    @foreach($departements as $departement)
                                        @if($encadrant != null)
                                            @if($encadrant->id_departement == $departement->id)
                                                <option value="{{ $departement->id }}" selected>{{ $departement->nom_departement }}</option>
                                            @else
                                                <option value="{{ $departement->id }}">{{ $departement->nom_departement }}</option>
                                            @endif
                                        @else
                                            <option value="{{ $departement->id }}">{{ $departement->nom_departement }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="p-1">
                                @if($encadrant != null)
                                    <button class="btn btn-default" type="reset">Récupérer</button>
                                    <button class="btn btn-warning pull-right" type="submit">Enregistrer</button>
                                @else
                                    <button class="btn btn-default" type="reset">Effaçer</button>
                                    <button class="btn btn-primary pull-right" type="submit">Ajouter</button>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
