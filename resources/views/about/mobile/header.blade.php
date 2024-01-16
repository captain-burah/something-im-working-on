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

<header>
    <div class="w-full bg-cover bg-center" style="height:40vh; background-image: url({{ asset('home/ABOUT.webp') }}), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-left h-full w-full">
            <div class="container mx-6 my-auto">
                    
                <h1 class="text-xl text-white font-bold uppercase mx-auto text-left mb-2 mt-15">
                    {{__('frontend.aboutH')}}
                </h1>
                
                <p class="text-white font-thin leading-relax text-base text-left">
                    {{__('frontend.aboutMobileP1')}}
                </p>
            </div>
        </div>
    </div>
</header>