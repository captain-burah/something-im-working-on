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
    
    <div class="w-full bg-cover bg-center" style="height: 70vh; background-image: url({{ asset('home/invest-in-dubai.webp') }}), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-center h-full w-full">
            <div class="md:container mx-auto">
                    
                <h1 class="xl:text-6xl md:text-4xl mx-auto text-white font-light uppercase text-center">
                    Invest In Dubai
                </h1>

                <br>
                <br>
                
                <div class="w-[50%] mx-auto">
                    <p class="text-white font-thin leading-8 text-base text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut
                        ligula accumsan dictum. Phasellus euismod in lectus nec cursus. Curabitur in sem et elit
                        dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in
                        sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
