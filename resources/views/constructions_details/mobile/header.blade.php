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

   
    <div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl ">
        <div class="container mx-auto flex flex-col items-start md:flex-">
            <div class="ml-0 md:mr-12 sticky">
                <div class="container mx-auto w-full h-full xl:mt-[15vh]">
                    <style>
                        ul {
                            padding-left: 30px;
                        }
                        li {
                            list-style-type: disc;
                            padding-left: 10px;
                        }
                    </style>
                    <div class="flex items-center overflow-x-auto whitespace-nowrap">
                        <a href="/constructions" class="text-lg font-semibold text-gray-400 hover:underline">
                            Construction Updates
                        </a>
                        <span class="mx-2 text-gray-500 dark:text-gray-400">
                            /
                        </span> 
                        <h3 class="text-base font-bold text-gray-800 capitalize text-black">
                            {{ $title }}
                        </h3>
                    </div>

                    
                </div>
            </div>
            
        </div>
    </div>


    

</header>



