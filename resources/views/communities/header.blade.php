

@notmobile
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
        <div class="w-full bg-cover bg-center mb-4" style="height: 50vh; background-image: url('{{ URL::asset('developments/5.jpg')}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        {{-- <div class="w-full bg-cover bg-center" style="height: 40vh;"> --}}
            <div class="flex items-center justify-center h-full w-full bg-black bg-opacity-60" style="padding-top: 10vh;">
                <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto  text-white">
                    <h1 class="text-4xl font-thin text-center">
                        OUR COMMUNITIES
                    </h1>
                    <div class="w-[900px] text-center mx-auto">
                        <p class="text-base w-200 text-center font-thin mt-2">
                            At ESNAAD, we're not just a real estate developer; we're a new player in the Dubai property market. Our focus goes beyond constructing homes to shaping vibrant communities. Our projects are meticulously designed to go beyond mere living spaces, aiming to cultivate a profound sense of belonging and identity for those who reside and work within them. With abundant amenities and open spaces, ESNAAD is dedicated to fostering a strong sense of community among its residents
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endnotmobile

@mobile
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
    <div class="w-full bg-cover bg-center mb-4" style="margin-top: 60px; height: 40vh; background-image: url('{{ URL::asset('developments/5.jpg')}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-left h-full w-full bg-black bg-opacity-60">

            <div class="container mx-0 px-0 mx-auto text-white">
                <h1 class="text-xl font-light px-2">
                    OUR COMMUNITIES
                </h1>
                <h2 class="text-base font-thin leading-6 px-2 pt-2">
                    At ESNAAD, we're not just a real estate developer; we're a new player in the Dubai property market. Our focus goes beyond constructing homes to shaping vibrant communities.
                </h2>
            </div>            
        </div>
    </div>
</header>
@endmobile