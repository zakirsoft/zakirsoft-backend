<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>zakirsoft</title>

  <!-- =========== Favicon ============ -->
  @include('frontend.Includes.style')

    <style>
        #toast-container>:hover {
            opacity: 1;
        }
        #toast-container>div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            border-radius: 3px;
            background-position: 15px center;
            background-repeat: no-repeat;
            box-shadow: 0 0 12px #999;
            color: #fff;
        }
    </style>
</head>

<body>
  <!-- header section start -->

    @include('frontend.Includes.header')
    <!-- Menus -->
    @include('frontend.Includes.menus')

  <!-- header section end -->

  <!-- main section start -->
  @yield('content')
  <!-- main section end -->



  <!-- footer section start -->
    @include('frontend.Includes.footer')
  <!-- footer section end -->


  <!-- all js goes here -->
  @include('frontend.Includes.script')

</body>

</html>
