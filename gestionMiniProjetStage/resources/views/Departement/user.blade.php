@extends ('departement/layout')

@section('content')

<style>
    .dropdowner::after{
        color:black;
        
    }
</style>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    
                                    <form action="/departement/user/{{ $departement->id}}/editInfos" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Departement (disabled)</label>
                                                    <input type="text" class="form-control" name="nom_departement" disabled="" placeholder="Company" value="{{ $departement->nom_departement}}">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Téléphone</label>
                                                    <input type="text" class="form-control" name="telephone" placeholder="Telephone" value="{{ $departement->telephone }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $departement->email }}"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Prenom</label>
                                                    <input name="prenom" type="text" class="form-control" placeholder="Prenom" value="{{ $departement->prenom }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input name="nom"  type="text" class="form-control" placeholder="Nom"  value="{{ $departement->nom }}">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <textarea name="status" rows="4" cols="80" class="form-control" placeholder="Add a status here" value="">{{ $departement->status }}</textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea name="description" rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="">{{ $departement->description }}</textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" >
                            <div class="card card-user">
                                <div>
                                   
                                   <center><img src="{{ asset('uploads/') }}/{{ $departement->image_link }} " alt="..." style="width:150px;height:190px;border-radius: 50%;margin-bottom:30px;border:1px lightgray solid;"></center> 
                                </div>
                                <br/>
                                <div class="card-body">
                                    <div class="author">
                                    
                                    <form action="/departement/user/{{ $departement->id}}/storeImage" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PUT') }}
                                        <li class="nav-item dropdown" style="color:black;list-style-type: none;">
                                            <a class="dropdown-toggle dropdowner"  alt="Telecharger un image" data-toggle="dropdown" href="#">
                                                <center>
                                                <i class="nc-icon nc-camera-20" style="color:black;"></i>
                                            </center>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ asset('departement/encadrentsStage/list') }}">                                        
                                                    <input type="file" name="imageDep">
                                                </a>
                                                <center><button type="submit" class="btn btn-danger btn-fill">Save Image</button></center>
                                                <div class="clearfix"></div>
                                            </div>
                                            

                                        </li>
                                            @if($errors->any())
                                                <label style="color:red;">{{$errors->first()}}</label>
                                            @endif
                                    </form>
                                        <a href="#">
                                            <h5 class="title">{{ $departement->nom }} {{ $departement->prenom }} </h5>
                                        </a>
                                        <p class="description">
                                            Description : {{ $departement->description }}
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        Status : {{ $departement->status }}
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook" style="margin:10px;"></i><space><i class="fa fa-linkedin" style="margin:10px;"></i><i class="fa fa-twitter" style="margin:10px;"></i><i class="fa fa-google" style="margin:10px;"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update Account Access</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/departement/user/{{ $departement->id}}/editPassword" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="username"  placeholder="username" value="{{ $departement->username}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input name="password" type="password" class="form-control" placeholder="City" value="{{ $departement->password }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-1">
                                               
                                                    <label>Confirmer Password</label>
                                                    <input type="password" class="form-control" placeholder="" value="">
                                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-fill pull-right">Update Password</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update  Social Networking Accounts</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/departement/user/{{ $departement->id}}/editSocial" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label><i class="fa fa-twitter" style="margin:30px;"></i></label>
                                                    <label><input type="text" class="form-control" name="twitter" placeholder="Twitter" value="{{ $departement->twitter}}"></label>
                                                    <label><i class="fa fa-facebook" style="margin:30px;"></i></label>
                                                    <label><input type="text" class="form-control" name="facebook" placeholder="Facebook" value="{{ $departement->facebook}}"></label>
                                                    <label><i class="fa fa-linkedin" style="margin:30px;"></i></label>
                                                    <label><input type="text" class="form-control" name="linkedin" placeholder="linkedin" value="{{ $departement->linkedin}}"></label>
                                                    <label><i class="fa fa-google" style="margin:30px;"></i></label>
                                                    <label><input type="text" class="form-control" name="google" placeholder="google" value="{{ $departement->google}}"></label>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <center><button type="submit" class="btn btn-success btn-fill">Update</button></center>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

@endsection
