<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        
        <?php
            $route_name = request()->route()->getName();
        ?>

        @if(isset($jsonSEOData))
            <title>{{$jsonSEOData['title_en']}}</title>
            <meta name="description" content="{{$jsonSEOData['description_en']}}" />
            <meta name="keywords" content="{{$jsonSEOData['keywords_en']}}" />
        @endif


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

        <?php
            $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $uri_segments = explode('/', $uri_path);
            $seg1 = $uri_segments[1];
            if($seg1 == 'en' || $seg1 == 'ar'){
                $langSeg = $uri_segments[1];
            }else{
                $langSeg = 'en';
            }
        ?>
        <?php
            $finalUrl = '/ar/home';
            $finalUrlen = '/en/home';
            $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            if($uri_path == '/' || $uri_path == '/home' ){
                $finalUrl = '/ar/home';
                $finalUrlen = '/en/home';
            } else {
                $uri_segments = explode('/', $uri_path);
                $seg1 = $uri_segments[1];
                if($seg1) {
                    if($seg1 == 'en'){
                        $replacements1 = array(1 => "en");
                        $replacements2 = array(1 => "ar");
                        $basket1 = array_replace($uri_segments, $replacements1);
                        $basket2 = array_replace($uri_segments, $replacements2);
                        $finalUrlen = implode("/",$basket1);
                        $finalUrl = implode("/",$basket2);

                    } elseif($seg1 == 'ar'){
                        $replacements1 = array(1 => "en");
                        $replacements2 = array(1 => "ar");
                        $basket1 = array_replace($uri_segments, $replacements1);
                        $basket2 = array_replace($uri_segments, $replacements2);
                        $finalUrlen = implode("/",$basket1);
                        $finalUrl = implode("/",$basket2);

                    }elseif($seg1 == 'ru'){
                        $replacements1 = array(1 => "en");
                        $replacements2 = array(1 => "ar");
                        $basket1 = array_replace($uri_segments, $replacements1);
                        $basket2 = array_replace($uri_segments, $replacements2);
                        $finalUrlen = implode("/",$basket1);
                        $finalUrl = implode("/",$basket2);
                    }
                }else{
                    $replacements2 = array(1 => "ar");
                    $basket = array_replace($uri_segments, $replacements2);
                    $finalUrl = implode("/",$basket);
                }
            }
        ?>
        <div class="min-h-screen ">

            @notmobile                
                <nav x-data="{ open: false }" class="bg-white p-0 m-0 z-50 shadow " id="sample" style="position: fixed; width: 100vw !important" >
                    @include('layout.navigation')
                </nav>
            @endnotmobile

            @mobile
                @include('layout.mobileNavigation2')
            @endmobile

            <div class="relative">
                @yield('content')
            </div>
            
            @include('layout.footer')

        </div>




</html>
