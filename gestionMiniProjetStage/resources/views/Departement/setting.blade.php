@extends ('departement/layout')

@section('content')


<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Ajouter une configuration</h4>
                    </div>
                    <div class="card-body" style="max-height:600px;overflow-y:scroll;">
                        <form action="{{ route('addconfig') }}" method="post">
                            @csrf
                            <div class="p-1">
                                <label>Nbr Après Délais</label>
                                <input type="number" min="1" max="20" class="form-control" name="nb_apres_delais">
                            </div>
                            <div class="p-1">
                                <label>Nbr Min</label>
                                <input type="number" min="1" max="20" class="form-control" name="nb_min">
                            </div>
                            <div class="p-1">
                                <label>Nbr Max</label>
                                <input type="number" min="1" max="20" class="form-control" name="nb_max">
                            </div>
                            <div class="p-1">
                                <label>Date Limite</label>
                                <input type="date" class="form-control" name="date_limit">
                            </div>
                            <div class="p-1">
                                <label>Département</label>
                                <select class="form-control" name="departement">
                                    @foreach($departements as $departement)
                                        <option value="{{ $departement->id }}">{{ $departement->nom_departement }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="p-1">
                                <button class="btn btn-default" type="reset">Effaçer</button>
                                <button class="btn btn-primary pull-right" type="submit">Ajouter</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Configurations des départements</h4>
                        <p class="card-category">La liste des configs</p>
                    </div>
                    <div class="card-body" style="max-height:600px;overflow-y:scroll;">
                        <table class="table table-full-width table-responsive">
                            <thead class="thead-dark">
                            <tr table class="table-info">
                                <th scope="col">Id</th>
                                <th scope="col">Nbr Après Délais</th>
                                <th scope="col">Nbr Min</th>
                                <th scope="col">Nbr Max</th>
                                <th scope="col">Date Limite</th>
                                <th scope="col">Département</th>
                                <th>Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($configs as $config)

                                <tr>
                                    <td>{{ $config->id }}</td>
                                    <td>{{ $config->nb_apres_delais }}</td>
                                    <td>{{ $config->nb_min }}</td>
                                    <td>{{ $config->nb_max }}</td>
                                    <td>{{ (new DateTime($config->date_limit))->format('d/m/Y') }}</td>
                                    <td>{{ $config->departement->nom_departement }}</td>
                                    <td style="text-align: right">
                                        <a onclick="return confirm('êtes-vous sûr de supprimer cette configuration?')" href="{{ route('deleteConfig', [$config->id]) }}" class="btn btn-danger"><i class="fa fa-trash text-danger"></i></a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
