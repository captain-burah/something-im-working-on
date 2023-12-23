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
    <div class="w-full bg-cover bg-center" style="height: 50vh; background-image: url('{{ URL::asset('home/9.jpg')}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
    {{-- <div class="w-full bg-cover bg-center" style="height: 40vh;"> --}}
        <div class="flex items-center justify-center h-full w-full bg-black bg-opacity-60" style="padding-top: 10vh;">
            <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto  text-white">
                <h1 class="text-4xl font-thin text-center">
                    NEWS
                </h1>
                <div class="w-[600px] text-center mx-auto">
                    <p class="text-base w-200 text-center font-thin mt-2 leading-8">
                        Breaking Grounds and Headlines: Stay abreast of Dubai's dynamic real estate landscape with our News Hub. Unearth the latest updates on our cutting-edge projects, government initiatives, and industry trends shaping the city's future.
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
