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

   
    <div class="container mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl">
        <div class=" flex flex-col items-start px-4">
            <div class="ml-0 md:mr-12 sticky">
                <div class="container mx-auto w-full h-full mt-[15vh]">
                    <style>
                        ul {
                            padding-left: 30px;
                        }
                        li {
                            list-style-type: disc;
                            padding-left: 10px;
                        }
                    </style>
                    
                    <h1 class="text-2xl font-bold mb-0">
                        {{$title}}
                    </h1>

                    <div class="flex items-center overflow-x-auto whitespace-nowrap">
                        <a href="/news" class="text-sm text-black">
                            NEWS
                        </a>
                        <span class="mx-2 text-sm text-black">
                            /
                        </span> 
                        <p class="text-sm capitalize text-black">
                            {{ $title }}
                        </p>
                    </div>

                    
                </div>
            </div>
            
        </div>
    </div>


    

</header>



