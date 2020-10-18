<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>@yield('title', 'Authorization | ZakirSoft')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/feather.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/font-awesome-n.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/css/chartist.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/widget.css">
    <link rel=" stylesheet" type="text/css" href="{{ asset('admin') }}/css/pages.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/css/icofont.css">
</head>

<body>

    @yield('content')

</body>

<script src="{{asset('admin')}}/js/jquery.min.js"></script>
<script src="{{asset('admin')}}/js/jquery-ui.min.js"></script>
<script src="{{asset('admin')}}/js/popper.min.js"></script>
<script src="{{asset('admin')}}/js/bootstrap.min.js"></script>
<script src="{{asset('admin')}}/js/waves.min.js"></script>
<script src="{{asset('admin')}}/js/jquery.slimscroll.js"></script>
<script src="{{asset('admin')}}/js/jquery.flot.js"></script>
<script src="{{asset('admin')}}/js/jquery.flot.categories.js"></script>
<script src="{{asset('admin')}}/js/curvedlines.js"></script>
<script src="{{asset('admin')}}/js/jquery.flot.tooltip.min.js"></script>
<script src="{{asset('admin')}}/js/amcharts.js"></script>
<script src="{{asset('admin')}}/js/serial.js"></script>
<script src="{{asset('admin')}}/js/light.js"></script>
<script src="{{asset('admin')}}/js/markerclusterer.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{asset('admin')}}/js/gmaps.js"></script>
<script src="{{asset('admin')}}/js/pcoded.min.js"></script>
<script src="{{asset('admin')}}/js/vertical-layout.min.js"></script>
<script src="{{asset('admin')}}/js/crm-dashboard.min.js"></script>
<script src="{{asset('admin')}}/js/script.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');

</script>
<script src="{{asset('admin')}}/js/rocket-loader.min.js" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer="">
</script>

</html>
