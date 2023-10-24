<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <?php
            $route_name = request()->route()->getName();
        ?>


        <!-- Styles -->
        <style>
            html,body{
                background-color: #fff !important;
                max-width: 100%;
                overflow-x: hidden;
            }
            @font-face {
                font-family: 'OptimaNew';
                font-style: normal;
                font-weight: lighter;
                src: local('OptimaNew'), url('front/fonts/Optima/OptimaLTPro-Roman.otf') format('otf');
            }

            @font-face {
                font-family: 'Optima';
                font-style: lighter;
                font-weight: normal;
                src: local('Optima'), url('front/fonts/OPTIMA.woff') format('woff');
            }


            @font-face {
                font-family: 'Optima Italic';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Italic'), url('front/fonts/Optima_Italic.woff') format('woff');
            }


            @font-face {
                font-family: 'Optima Medium';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Medium'), url('front/fonts/Optima Medium.woff') format('woff');
            }


            @font-face {
                font-family: 'Optima Bold';
                font-style: normal;
                font-weight: normal;
                src: local('Optima Bold'), url('front/fonts/OPTIMA_B.woff') format('woff');
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('luxe_asset_css')

    </head>


    <body class="font-body bg-white" style="background-color: #fff !important;">
        <div class="min-h-screen ">

            @desktop
                @if($route_name == 'esnaad.home')
                    <nav x-data="{ open: false }" class="absolute bg-white border-b border-gray-100 sm:block sticky top-0 z-50 shadow bottomMenu site-content" style="display:none; z-index: 10 !important" id="sample" >
                        @include('layout.navigation')
                    </nav>
                @else
                    <nav x-data="{ open: false }" class="absolute bg-white border-b border-gray-100 sm:block sticky top-0 z-50 shadow bottomMenu" id="sample" style="position: fixed; width: 100vw !important" >
                        @include('layout.navigation')
                    </nav>
                @endif
            @enddesktop

            @tablet
                <nav x-data="{ open: false }" class="bg-white border-b border-gray-100 sm:block sticky top-0 z-50 shadow " >
                    @include('layout.navigation_tablet')
                </nav>
            @endtablet

            @mobile
                @include('layout.mobileNavigation2')
            @endmobile






            <div class="relative">
                @yield('content')
            </div>




            {{-- @include('layoutv2.appInquiryModal') --}}
            



            @include('layout.footer')

        </div>






    <script>
        $(document).ready(function () {
            sessionStorage.setItem("form_submission", "false");
        });
    </script>


    @desktop
        <script>
            window.addEventListener("scroll", function(event) {

                let footer = document.querySelector(".site-content");

                if ( window.scrollY < window.innerHeight) {
                    footer.style.display = "none";
                } else {
                    footer.style.display = "block";
                }
            });
        </script>
    @enddesktop

</html>
