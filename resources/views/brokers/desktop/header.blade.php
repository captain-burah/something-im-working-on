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
    <div class="w-full bg-cover bg-center" style="height: 40vh;">
        <div class="flex items-center justify-center h-full w-full" style="padding-top: 10vh; background-color: #f4f4f4 !important;">
            <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto  text-black">
                <h1 class="text-xl font-semibold ">
                    AGENCY REGISTRATION
                </h1>
                <h2 class="text-4xl font-thin mt-2">
                    Welcome to the Real Estate Brokerage Registration Portal!
                </h2>
            </div>
        </div>
    </div>
</header>
