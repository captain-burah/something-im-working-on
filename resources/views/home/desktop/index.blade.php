@extends('layoutv2.master')

@section('luxe_asset_css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

    <style>
        .iti {
            width: 100% !important;
        }
        .iti__flag-container{
            overflow: visible;
        }
        .bg-hero {
            /* background-image: url(/home/HOME2.webp) */
            background-image: url(/front/images/bg-hero2.jpg)
        }
        .image-blurred-edge {
            background-image: url({{ asset('assets/img/img-error2.webp') }});
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: 0 0 4px 4px white inset;
        }

        .placeholder {
            margin-right: auto;
            margin-left: auto;
            margin-top: 20px;
            width: 100%;
            height: 100%;
            min-height: 400px;
            position: relative;
            /* this is the only relevant part for the example */
        }


        /* both DIVs have the same image */

        .bg-image-blur,
        .bg-image {
            background-image: url({{ asset('home/13.jpg') }});
            background-size: cover;
            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            left: 0;
            min-height: 400px;
            width: 100%;
            height: 100%;
        }


        /* blur the background, to make blurred edges that overflow the unblurred image that is on top */

        .bg-image-blur {
        -webkit-filter: blur(20px);
        -moz-filter: blur(20px);
        -o-filter: blur(20px);
        -ms-filter: blur(20px);
        filter: blur(20px);
        }
    </style>
@endsection

@section('content')

    @include('home.desktop.hero')

    {{-- <div class="py-8">
        @include('home.desktop.intro')
    </div> --}}

    @include('home.desktop.sectionOne')


    <div class="py-8">
        @include('home.desktop.sectionTwo')
    </div>

    @include('home.desktop.sectionThree')
    

    

@endsection




@section('luxe_asset_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    

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


   
    {{-- FORM SUBMIT --}}
    <script>
        /**
         * INITIATE HEADERS WITH CSRF TOKENIZATION
         * FOR FORM SUBMISSION
         */
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content')
            }
        });
        $('#new-project-details-desktop-form').on('submit', function(e){

            e.preventDefault();

            var name = $("#name").val();

            var email = $("#email").val();

            var phone = $("#phone").val();

            var country_code = $("#country_code").val();

            var property_id = $("#property_id").val();



            /**
             * INITIATE AN AJAX SCRIPT FOR THE FORM SUBMISSION
             * ALONG WITH POST ROUTE METHOD AND URL. IF RESPONSE
             * IS A SUCCESS DISPLAY THE THANK YOU MODAL AND
             * UPDATE THE FORM SESSION IN SESSION-STORAGE OF BROWSER
             *
            */
            $.ajax({
                type:'POST',
                url:"{{ URL('dubai-new-projects/register-your-interest') }}",
                data:{
                    name:name,
                    email:email,
                    phone:phone,
                    country_code:country_code,
                    property_id:property_id,
                    success:function(data){
                        if($.isEmptyObject(data.error)){

                            console.log(data.success); // TEST THE DATA

                            // UPDATE LOCAL STORAGE
                            sessionStorage.removeItem("form_submission");
                            sessionStorage.setItem("form_submission", "true");

                            modalClose('mymodalcentered'); // CLOSE THE MODAL

                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                }
            });

        });
    </script>

@endsection
