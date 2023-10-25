@section('luxe_asset_css')
    <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animated.faster {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
@endsection



<header class="xl:mt-[2 0vh]">
    
    <div class="w-full bg-cover bg-center" style="height: 60vh; background-image: url({{ asset('home/3.jpg') }}), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="md:container">
                    
                <h1 class="xl:text-4xl md:text-4xl text-white font-light uppercase">
                    GET IN TOUCH
                </h1>

                <br>
                
                <p class="w-[75%] text-white font-bold text-base">
                    Thank you for considering ESNAAD Developments for your real estate needs in Dubai. 
                    We're excited to assist you with your inquiries, 
                    provide information about our properties, and answer any questions you may have.
                </p>
            </div>
        </div>
    </div>
</header>