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

                <p class="w-[75%] mx-auto text-white font-thin leading-8 text-base text-center">
                    Address: Unit G07, City Walk Building #1, Al Wasl, Dubai.
                </p>
                <p class="w-[75%] mx-auto text-white font-thin leading-8 text-base text-center">
                    <a href="tel:{{ env('COMPANY_PHONE') }}" >
                        Phone: 
                        &nbsp;
                        +971 4 287 9506
                    </a>
                </p>
                <p class="w-[75%] mx-auto text-white font-thin leading-8 text-base text-center">
                    <a href="mailto:{{env('COMPANY_EMAIL')}}" class="inline-flex items-center">
                        Email:
                        &nbsp;
                        &#105;&#110;&#102;&#111;&#064;&#101;&#115;&#110;&#097;&#097;&#100;&#046;&#099;&#111;&#109;
                    </a>
                </p>
            </div>
        </div>
    </div>
</header>
