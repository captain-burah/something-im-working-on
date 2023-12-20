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



<header class="]">
    
    <div class="w-full bg-cover bg-center" style="height: 50vh; background-image: url({{ asset('home/CONTACT.webp') }}), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-center h-full w-full">
            <div class="md:container mx-auto pt-20">
                    
                <h1 class="xl:text-4xl md:text-4xl mx-auto text-white font-light uppercase text-center">
                    CONTACT US
                </h1>
                <br>
                <br>

                {{-- <br>
                
                <p class="w-[60%] mx-auto text-white font-thin leading-8 text-base text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut
                    ligula accumsan dictum. 
                </p>
                <br>
                <br>
                <br> --}}

                <p class="w-[75%] mx-auto text-white font-bold leading-8 text-base text-center">
                    Address: Unit G07, City Walk Building #1, Al Wasl, Dubai.
                </p>
                <p class="w-[75%] mx-auto text-white font-bold leading-8 text-base text-center">
                    Phone:  971 4 123 4567
                </p>
                <p class="w-[75%] mx-auto text-white font-bold leading-8 text-base text-center">
                    Email: info@esnaad.com
                </p>
            </div>
        </div>
    </div>
</header>
