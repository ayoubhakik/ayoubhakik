
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Gestion des Mini-Projet</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="http://127.0.0.1:8000/css/bootstrap.min.css" rel="stylesheet" />
    <link href="http://127.0.0.1:8000/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="http://127.0.0.1:8000/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>

        body, html{
            font-family: Helvetica, sans-serif;
            background: #e5e5e5;
            color : #23374d;
        }
        a{
            color : #23374d;
        }



#showcase {
  height: 300px;
}

#showcase h1 {
  font-size: 50px;
  line-height: 1.3;
  position: relative;
  animation: heading;
  animation-duration: 3s;
  animation-fill-mode: forwards;
}

@keyframes heading {
  0% { top: -50px; }
  100% { top: 200px; }
}

#content {
  position: relative;
  animation-name: content;
  animation-duration: 3s;
  animation-fifll-mode: forwards;
}

.myButt {
	display: block;
	cursor: pointer;
	background-color: transparent;
	position: relative;
	transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
}
.four {
	overflow: hidden;
}

.four span {
	display: inline-block;
	transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
}

.four .icon {
	position: absolute;
	right: -60px;
	top: 0;
	padding: 10px;
	transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
}

.four:hover .icon {
	right: 0px;
}

.four:hover span {
	color: #F44336;
	margin-left: 50px;
}

@keyframes btn {
  0% { opacity: 0; }
    25% { opacity: 0.25; }
    50% { opacity: 0.5; }
  100% { opacity: 1; }
}

        .page-hero {
    height: 300px;
    overflow: hidden;
    position: relative;
    width: 100%;
}

.page-hero h1 {
    animation:
        slideUp 0.75s .5s cubic-bezier(0.17,.88,.32,1.27) both,
        fadeIn .25s .5s ease-in both;
    padding: 0 20px;
    position: absolute;
    text-align: center;
    text-shadow: 3px 3px 7px rgba(0,0,0,.61);
    top: 50%;
    width: 100%;
}

@keyframes slideUp {
    from {transform: translateY(200%);}
    to {transform:translateY(-50%);}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}
        .sansserif {
            font-family: Georgia, sans-serif;
        }
        .modal-body{
            font-family: "Times New Roman", Times, serif;
        }
        #bulb {
  fill-opacity: 100;
}

#lights path {
  fill-opacity: 100;
  stroke: #ffd15c;
  stroke-width: 4;
  stroke-dasharray: 150;
  stroke-dashoffset: 150;
}html, body {
	height: 100%;
}

body {
	background: radial-gradient(ellipse at center, #fffeea 0%, #fffeea 35%, #B7E8EB 100%);
	overflow: hidden;
}

.ocean {
	height: 5%;
	width: 100%;
	position: absolute;
	bottom: 0;
	left: 0;
	background: #015871;
}

.wave {
	background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg) repeat-x;
	position: absolute;
	top: -198px;
	width: 6400px;
	height: 198px;
	animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
	transform: translate3d(0, 0, 0);
}

.wave:nth-of-type(2) {
	top: -175px;
	animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) -0.125s infinite, swell 7s ease -1.25s infinite;
	opacity: 1;
}

@keyframes wave {
	0% {
		margin-left: 0;
	}

	100% {
		margin-left: -1600px;
	}
}

@keyframes swell {
	0%, 100% {
		transform: translate3d(0, -25px, 0);
	}

	50% {
		transform: translate3d(0, 5px, 0);
	}
}
    </style>

</head>

<body >
    <div class="wrapper">
    <div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
</div>
        @include('encadrantViews.layouts.sidebar')
        <div class="main-panel">


            @yield('content')
            @include('encadrantViews.layouts.footer')

        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="http://127.0.0.1:8000/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="http://127.0.0.1:8000/js/core/popper.min.js" type="text/javascript"></script>
<script src="http://127.0.0.1:8000/js/core/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="http://127.0.0.1:8000/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="http://127.0.0.1:8000/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="http://127.0.0.1:8000/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="http://127.0.0.1:8000/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->

<script src="http://127.0.0.1:8000/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });

</script>

<script type="text/javascript">
    /*$(document).ready(function() {
        if($("#notifications li").length){
            var count = $("#notifications li").length;
            $(".notification").append("<p>"+ count +"</p>");
        }
    })*/
    $(".notification").append("<p>hello</p>");
</script>

</html>


