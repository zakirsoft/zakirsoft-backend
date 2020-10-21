
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>zakirsoft</title>

      <!-- all style link goes here -->
        @include('frontend.Includes.style')

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
