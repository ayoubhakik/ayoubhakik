@extends ('departement/layout')

@section('content')
    <div class="container" style="background:white" style="justify-content: center">

        <div class="content" style="justify-content: center">

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    Upload Validation Error<br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if($message=Session::get('failed'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if($message=Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <center>
                <div class="box">
                    <form action="{{ url('/departement/etudiant/importEtudiants') }}" method="POST"
                          enctype="multipart/form-data" name="importform">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        <input hidden="hidden" type="file" name="file-5" id="file-5" class="inputfile inputfile-4"
                               data-multiple-caption="{count} files selected" multiple/>
                        <label for="file-5">
                            <figure>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                    <path
                                        d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                </svg>
                            </figure>
                            <span style="color:gray">Importer des Etudiants&hellip;</span>
                        </label>
                        <br/>
                        <button class="btn btn-primary" style="color:black;border:gray 1px solid;">Import File</button><br /><br />
                        <form class="form-inline">
                            <label>Filtrer : </label>
                            <select id="niveau" style="height:36px;">
                                <option value="-1">Tout</option>
                                <option value="1">1eme année</option>
                                <option value="2">2eme année</option>
                                <option value="3">3eme année</option>
                                <option value="4">4eme année</option>
                                <option value="5">5eme année</option>
                            </select>
                            <select id="filiere" style="height:36px;">
                                <option value="-1">Tout</option>
                                @foreach($filieres as $filiere)
                                    <option value="{{ $filiere->id_filiere }}">{{ $filiere->nom_filiere }}</option>
                                @endforeach
                            </select>
                            <a href="#" onclick="applyFilter()" class="btn btn-default">Appliquer</a>
                            <a href="#" onclick="reverseFilter()" class="btn btn-default">Effaçer</a>
                        </form>


                </div>
                </form>
            </center>


        </div>
        <!-- Related demos -->

    </div><!-- /container -->



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Les Etudiants</h4>
                        </div>
                        <div class="card-body table-full-width table-responsive"
                             style="max-height:600px;overflow-y:scroll;">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>prenom</th>
                                    <th>cin</th>
                                    <th>cne</th>
                                    <th>niveau</th>
                                    <th>filière</th>
                                </thead>
                                <tbody id="target">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var data = JSON.parse("{{ json_encode($data) }}".replace(/&quot;/g,'"'));
        var filieres = JSON.parse("{{ json_encode($filieres) }}".replace(/&quot;/g,'"'));

        function getFiliereName(id){
            return filieres.filter(f => { return f.id_filiere == id })[0].nom_filiere;
        }

        function renderData(data) {
            var content = "";

            data.map(etudiant => {
                content += "<tr>" +
                    "<td>"+etudiant.id_etudiant+"</td>" +
                    "<td>"+etudiant.nom+"</td>" +
                    "<td>"+etudiant.prenom+"</td>" +
                    "<td>"+etudiant.cin+"</td>" +
                    "<td>"+etudiant.cne+"</td>" +
                    "<td>"+etudiant.niveau+"</td>" +
                    "<td>"+getFiliereName(etudiant.id_filiere)+"</td>" +
                    "</tr>";
            });

            document.getElementById('target').innerHTML = content;
        }

        function reverseFilter() {
            renderData(data)
        }

        function applyFilter(){
            var niveau_input = document.getElementById('niveau');
            var niveau = niveau_input.options[niveau_input.selectedIndex].value;
            var filiere_input = document.getElementById('filiere');
            var filiere = filiere_input.options[filiere_input.selectedIndex].value;

            var tmp = JSON.parse(JSON.stringify(data));
            var new_data = tmp.filter((student) => {
                return niveau != -1 ? student.niveau == niveau : 1 == 1;
            });
            new_data = new_data.filter((student) => {
                return filiere != -1 ? student.id_filiere == filiere : 1 == 1
            });

            renderData(new_data);
        }

        setTimeout(() => {
            renderData(data)
        }, 10);

    </script>

@endsection

