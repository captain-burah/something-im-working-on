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
    <div class="w-full bg-cover bg-center" style="height: 100vh; background-image: url('{{ URL::asset('developments/7.jpg')}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-left h-full w-full bg-gray-950/70">

            <div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto text-white">
                <h1 class="text-4xl font-semibold ">
                    The Gulf Villas
                </h1>
                <p class="text-base font-light leading-8 w-[45%]">
                    Our projects are a reflection of our commitment to excellence. From luxurious
                    residential complexes to state-of-the-art commercial spaces, each project is
                    designed with attention to detail and a focus on quality.
                </p>
            </div>

        </div>
    </div>
</header>



