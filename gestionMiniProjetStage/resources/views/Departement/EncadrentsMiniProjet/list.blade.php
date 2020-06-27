@extends ('departement/layout')

@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"><a href="{{ route('add_encadrant') }}" class="btn btn-success m-2 float-right">Ajouter</a></div>

                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Liste des encadrants</h4>
                        </div>
                        <div class="card-body" style="max-height:600px;overflow-y:scroll;">
                            <table class="table table-full-width table-responsive">
                                <thead class="thead-dark">
                                <tr table class="table-info">
                                    <th scope="col">Id</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Nbr Groupe</th>
                                    <th scope="col">Département</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($encadrants as $encadrant)

                                    <tr>
                                        <td>{{ $encadrant->id_encadrant }}</td>
                                        <td>{{ $encadrant->nom }}</td>
                                        <td>{{ $encadrant->prenom }}</td>
                                        <td>{{ $encadrant->email }}</td>
                                        <td>{{ $encadrant->phone }}</td>
                                        <td>{{ $encadrant->nbr_groupe }}</td>
                                        <td>{{ $encadrant->departement->nom_departement }}</td>
                                        <td style="text-align: right">
                                            <a onclick="return confirm('êtes-vous sûr de supprimer cet encadrant')" href="{{ route('deleteEncadrant', [$encadrant->id_encadrant]) }}" class="btn btn-danger"><i class="fa fa-trash text-danger"></i></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="{{ route('edit_encadrant', [$encadrant->id_encadrant]) }}" class="btn btn-primary"><i class="fa fa-edit text-primary"></i></a>
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
