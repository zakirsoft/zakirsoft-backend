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
{{-- toastr notification --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"> </script>
<script src="{{asset('admin')}}/js/script.min.js"></script>

<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}", 'Success!')
    @elseif(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}", 'Warning!')
    @elseif(Session::has('error'))
        toastr.error("{{ Session::get('error') }}", 'Error!')
    @endif
</script>

{{-- <script src="{{asset('admin')}}/js/rocket-loader.min.js" data-cf-settings="2d8d78e876b340f9029c575b-|49" defer=""> </script> --}}
@yield('script')

<script>
toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "hideMethod": "fadeOut"
}
</script>
