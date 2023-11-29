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
    <div class="w-full bg-cover bg-center" style="height: 100vh;">
        <div class="flex items-center justify-center h-full w-full" >
            <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto  text-black">
                
                <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
                    <div class="text-center pb-12">
                        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-dark">
                            Our Projects
                        </h1>
                        <p class="text-base font-thin text-black">
                            Our projects are a reflection of our commitment to excellence. From luxurious
                            residential complexes to state-of-the-art commercial spaces, each project is
                            designed with attention to detail and a focus on quality.
                        </p>
                        
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- <a href="{{ URL('/project-details') }}" class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center shadow">
                            <div class="relative overflow-hidden rounded-xl lg:h-[20rem] max-h-[34rem]">
                                <img class="h-full w-full object-cover "
                                src="{{ asset('home/COMING_SOON.jpeg')}}"
                                
                                alt="esnaad-project-card">
                            </div>
                            <div class="text-center py-8 sm:py-6">
                                <p class="text-xl text-gray-700 font-bold mb-2">The Gulf Apartments</p>
                                <p class="text-base text-gray-400 font-normal">Business Bay</p>
                            </div>
                        </a> --}}
                        <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center shadow">
                            <div class="relative overflow-hidden rounded-xl lg:h-[20rem] max-h-[34rem]">
                                <div
                                    class="text-white text-xl rounded-xl absolute inset-0  bg-gray-950/90 flex justify-center items-center ">
                                    COMING SOON 
                                </div>
                                <img class="h-full w-full object-cover "
                                src="{{ asset('home/COMING_SOON.jpeg')}}"
                                
                                alt="esnaad-project-card">
                            </div>
                            <div class="text-center py-8 sm:py-6">
                                <p class="text-xl text-gray-700 font-bold mb-2">Coming Soon</p>
                                <p class="text-base text-gray-400 font-normal">Location</p>
                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
        </div>
    </div>
</header>
