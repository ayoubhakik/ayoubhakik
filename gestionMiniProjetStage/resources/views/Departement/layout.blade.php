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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
        <meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }} " />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }} " />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }} " />
		

		<!-- remove this if you use Modernizr -->
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
	
</head>

<body>
    <div class="wrapper">

    @include ('departement.partials.navbar')
    <div class="main-panel" style="padding-left:30px;">
            <!-- Navbar -->
            @include ('departement.partials.header')
            <!-- End Navbar -->

            <!-- section -->
            @yield('content')
            <!-- end of section -->
            
            @include ('departement.partials.footer')
        </div>
    </div>
    
</body>
<!--   Core JS Files   -->
<script src="{{ asset('js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<!--  Chartist Plugin  -->
<script src="{{ asset('js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('js/light-bootstrap-dashboard.js?v=2.0.0') }} " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->

<script src="{{ asset('js/demo.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();


    });
</script>
        <script src="{{ asset('js/custom-file-input.js') }}"></script>

		<!-- // If you'd like to use jQuery, check out js/jquery.custom-file-input.js
		<script src="js/jquery-v1.min.js"></script>
		<script src="js/jquery.custom-file-input.js"></script>
		-->
		<script src="{{ asset('js/jquery-v1.min.js') }}"></script>
		<script src="{{ asset('js/jquery.custom-file-input.js') }}"></script>
</html>
