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

{{-- Ck editor  --}}
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
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
{{-- @notifyJs --}}
<script src="{{asset('admin')}}/js/rocket-loader.min.js" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer=""> </script>
@yield('script')
