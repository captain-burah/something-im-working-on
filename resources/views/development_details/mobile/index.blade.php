@extends('layoutv2.master')

<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

@section('luxe_asset_css')

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />

    <link rel="stylesheet" href="{{ asset('owl/owl.carousel.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('owl/owl.theme.default.min.css') }}">

    <style>
        .iti {
            width: 100% !important;
        }
        .iti__flag-container{
            overflow: visible;
            z-index: 10 !important;
            white-space:nowrap;
        }
        .iti-mobile .intl-tel-input .country-list {
            max-height: 200px !important; 
        }
        .iti__country-list{
            z-index: 10 !important;
        }
    </style>
@endsection

@section('content')
    <section class="my-0">
        @include('development_details.mobile.header')
    </section>

    <section class="my-2 px-4">
        @include('development_details.mobile.bodyOne')
    </section>

    <section class="my-0">
        @include('development_details.mobile.bodyTwo')
    </section>

    <section class="my-0">
        @include('development_details.mobile.bodyThree')
    </section>

    <section class="my-0">
        @include('development_details.mobile.bodyFour')
    </section>

    <section class="my-0  px-4">
        @include('development_details.mobile.bodyFive')
    </section>

    <section class="my-0">
        @include('development_details.mobile.bodySix')
    </section>

    <section class="my-0" id="project_detail_map_section">
        @include('development_details.mobile.map')
    </section>
@endsection




@section('luxe_asset_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="{{ asset('owl/jquery.min.js') }}"></script>

    <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>



    <script>
        function setCookie(name, value, daysToExpire) {
            var expires = "";
            
            if (daysToExpire) {
                var date = new Date();
                date.setTime(date.getTime() + (daysToExpire * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        // Function to get a specific cookie by name
        function getCookie(cookieName) {
            var name = cookieName + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');

            for (var i = 0; i < cookieArray.length; i++) {
                var cookie = cookieArray[i].trim();
                if (cookie.indexOf(name) === 0) {
                    return cookie.substring(name.length, cookie.length);
                }
            }

            return null; // Return null if the cookie is not found
        }
    </script>

    {{-- MAP --}}
    <script>

        mapboxgl.accessToken = 'pk.eyJ1IjoiZWRnZXJlYWx0eSIsImEiOiJjbGNvcnE3eDgwYzBvM3JsYTB4dXpxa3I3In0.prc7SeJwtNYofG3O-fv61w';

        var long = {!! json_encode($long) !!};

        var lat = {!! json_encode($lat) !!};

        // console.log(long);

        var map = new mapboxgl.Map({
            container: 'map',
            // style: 'mapbox://styles/edgerealty/clde93eip003001nm4dkn4izw',
            style: 'mapbox://styles/edgerealty/cldfzjqvo003r01lkn5msoiyu',
            // center: [55.220108, 25.111407], // starting position [lng, lat],
            // zoom: 11,
            center: [long,lat],
            // center: [-103.5917, 40.6699],
            zoom: 10,
            // bearing:,
            pitch: 0.00,
            projection: 'mercator'
        });


        const marker1 = new mapboxgl.Marker()
            .setLngLat([long, lat])
            .addTo(map);


        map.addControl(new mapboxgl.NavigationControl());

    </script>




    {{-- MODALS --}}
    <script>
        $(document).ready(function() {
            var form_submission = sessionStorage.removeItem("form_submission");
        });

        function openModal(key) {
            document.getElementById(key).showModal();
            document.body.setAttribute('style', 'overflow: hidden;');
            document.getElementById(key).children[0].scrollTop = 0;
            document.getElementById(key).children[0].classList.remove('opacity-0');
            document.getElementById(key).children[0].classList.add('opacity-100')
        }

        function modalClose(key) {
            document.getElementById(key).children[0].classList.remove('opacity-100');
            document.getElementById(key).children[0].classList.add('opacity-0');
            setTimeout(function () {
                document.getElementById(key).close();
                document.body.removeAttribute('style');
            }, 100);
        }
    </script>



    @yield('form1')
    @yield('form2')
    


@endsection

