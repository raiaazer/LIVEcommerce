<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/assets/images/icons/favicon.png')}}">


    <script>
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800', 'Poppins:200,300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/demo20.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/fontawesome-free/css/all.min.css')}}">

    @vite('resources/js/app.js')
    @inertiaHead

</head>

<body>
@inertia
<!-- Plugins JS File -->
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/optional/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/optional/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.appear.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.plugin.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('frontend/assets/js/main.min.js')}}"></script>

</body>

</html>
