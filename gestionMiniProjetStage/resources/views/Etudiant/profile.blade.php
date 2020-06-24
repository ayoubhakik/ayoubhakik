<!DOCTYPE html>
<html>
<head>
  <title></title>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/profile.css">
</head>
<body>
  @extends('etudiant/layoutEtudiant')
    @section('content')
<div class="container_fluid" id="profile">
  <div class="row">


       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Profile</h4></div>
   <div class="panel-body">

    <div class="box box-info">

            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">

                <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >Cliquer ici pour changer votre photo </div>
                <!--Upload Image Js And Css-->
                     </div>
              <br>
                <!-- /input-group -->
            </div>
            <div class="col-sm-6" >
            <h4 style="color:#00b1b1; margin-left: 40px" >Hasnae Briouya</h4>

            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">


<div class="col-sm-5 col-xs-6 title " >First Name:</div><div class="col-sm-7 col-xs-6 "><p class="info">Hasnae</p></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>



<div class="col-sm-5 col-xs-6 title " >Last Name:</div><div class="col-sm-7"><p class="info"> Briouya</p></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >CIN</div><div class="col-sm-7"><p class="info">M582144</p></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 title " >CNE</div><div class="col-sm-7"><p class="info">M582144</p></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >Promotion</div><div class="col-sm-7"><p class="info">2021</p></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >Filière</div><div class="col-sm-7"><p class="info">Informatique</p></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >Email:</div><div class="col-sm-7"><p class="info">briouya@gmail.com</p></div>


 <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 title " >Phone:</div><div class="col-sm-7"><p class="info">061119957855</p></div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>


    </div>
    </div>
   <a class="button" href="#popup1"><i class="fa fa-edit">  Modifier</i></a>
</div>
<div id="popup1" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
     <div class="col-sm-6">
           <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">

                <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >Cliquer ici pour changer votre photo </div>
                <!--Upload Image Js And Css-->
                     </div>
              <br>
                <!-- /input-group -->
            </div>
            <div class="col-sm-6" >
            <h4 style="color:#00b1b1; margin-left: 40px" >Hasnae Briouya</h4></span>

            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">


<div class="col-sm-5 col-xs-6 title " >First Name:</div><div class="col-sm-7 col-xs-6 "><p class="info">Hasnae</p></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>



<div class="col-sm-5 col-xs-6 title " >Last Name:</div><div class="col-sm-7"><p class="info"> Briouya</p></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >CIN</div><div class="col-sm-7"><p class="info">M582144</p></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 title " >CNE</div><div class="col-sm-7"><p class="info">M582144</p></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >Promotion</div><div class="col-sm-7"><p class="info">2021</p></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >Filière</div><div class="col-sm-7"><p class="info">Informatique</p></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 title " >Email:</div><div class="col-sm-7"><p class="info">briouya@gmail.com</p></div>


 <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 title " >Phone:</div><div class="col-sm-7"><p class="info">061119957855</p></div>
<a type="button" class="button"><i class="fa fa-edit"> Valider</i></a>

            <!-- /.box-->
  </div>
</div>
@endsection
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});
              </script>









   </div>
</div>
</body>
</html>



