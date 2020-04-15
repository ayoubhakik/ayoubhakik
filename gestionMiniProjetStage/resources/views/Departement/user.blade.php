@extends ('departement/layout')

@section('content')

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Departement (disabled)</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Informatique">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" value="ech.said">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email" value="saidech@gmail.com "> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Prenom</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="Said">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" value="ECH-CHADI">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="City" value="Mike">
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-1">
                                                <div class="form-group">
                                                    <label>Confirmer Password</label>
                                                    <input type="password" class="form-control" placeholder="Country" value="Andrew">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">You can only judge me by Simplicity and Humble</textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div>
                                   <center><img src="{{ asset('img/departement/echchadi.jpg') }}" alt="..." style="width:150px;height:190px;border-radius: 50%;margin-bottom:30px;border:1px lightgray solid;"></center> 
                                </div>
                                <br/>
                                <div class="card-body">
                                    <div class="author">
                                        <br/>
                                        <a href="" alt="Telecharger un image"><center><i class="nc-icon nc-camera-20" style="color:black;"></i></center></a>
                                        <br/>

                                        <a href="#">
                                            <h5 class="title">ECH-CHADI Said</h5>
                                        </a>
                                        <p class="description">
                                            Professeur chercheur
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        "You can only 
                                        <br> judge me by 
                                        <br> Simplicity and Humble"
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
                </div>
            </div>

@endsection
