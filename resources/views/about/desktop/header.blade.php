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



<header class="">
    
    {{-- <div class="w-full bg-cover bg-center" style="height: 60vh; background-image: url({{ asset('home/ABOUT.webp') }}), url('{{ URL::asset('assets/img/img-error2.webp')}}');"> --}}
    <div class="w-full bg-cover bg-center" style="height: 50vh; background-image: url({{ asset('home/10.jpg') }}), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-center xl:h-[50vh] h-[30vh] w-full">
            <div class="md:container mx-auto">
                    
                <br>
                <br>
                
                {{-- <div class="w-[50%] mx-auto">
                    <p class="text-white font-thin leading-8 text-base text-center">
                        A  beacon of opulence in real estate development, redefining luxury living through unparalleled design, unwavering quality, and a commitment to excellence
                    </p>
                </div> --}}
            </div>
        </div>
    </div>
</header>
