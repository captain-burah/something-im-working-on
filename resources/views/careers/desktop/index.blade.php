@extends('layoutv2.master')

@section('luxe_asset_css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
    
    

    <style>
        .iti {
            width: 100% !important;
            margin-top: 10px;
        }
        .iti__flag-container{
            overflow: visible;
        }
    </style>
@endsection



@section('content')
    <section class="my-0">
        @include('careers.desktop.header')
    </section>

    <section class="m-0">
        @include('careers.desktop.body')
    </section>
@endsection










@section('luxe_asset_js')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        function setCookie(name, value, daysToExpire) {
            var expires = "";
            
            if (daysToExpire) {
                var date = new Date();
                date.setTime(date.getTime() + (daysToExpire * 05 * 60 * 1000));
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
    
    @yield('intel-input')

@endsection

