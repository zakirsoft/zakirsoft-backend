<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>@yield('title', 'Dashboard | ZakirSoft')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    {{-- Style File  Here--}}
    @include('layouts.Includes.style')
    <link rel="stylesheet" href="{{ asset('css') }}/style.css">
    @yield('style')
</head>
<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            {{-- Navbar Here --}}
            @include('layouts.Includes.nav')
            {{-- Navbar Here --}}

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                   {{-- Sidebar Here--}}
                   @include('layouts.Includes.sidebar')
                    {{-- Sidebar Here --}}

                    {{-- Body Text Here --}}
                    @yield('content')
                    {{-- Body Text Here --}}


                    <div id="styleSelector"> </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Script File  Here--}}
    @include('layouts.Includes.script')
    {{-- Script File Here--}}
</body>
</html>
