<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6" >

            <div class="w-full bg-white rounded-0 sahdow-lg overflow-hidden flex flex-col justify-center items-center">
                <div class="relative overflow-hidden rounded-0 lg:h-[20rem] max-h-[34rem]">
                    <div
                        class="text-white text-xl rounded-0 absolute inset-0  bg-black bg-opacity-80 flex justify-center items-center ">
                    </div>
                    <img class="h-full w-full object-cover "
                    src="{{$img}}"
                    
                    alt="esnaad-project-card">
                </div>
                <div class="row grid grid-cols-3 mt-4">
                    <div>
                        <div class="absolute xs:ml-[5vw] xs:mt-[-6vh]  sm:w-22">
                            <img class="h-full w-full object-cover m-0 p-0 "
                                src="{{$logo}}"
                                alt="esnaad-project-card"
                            >
                        </div>
                    </div>
                    <div class="col-span-2 min-w-[100vw]" @if($langSeg == 'ar') dir="rtl" @endif>
                        <h2 class="text-xl text-black font-bold text-left min-w-[100vw]">{{$name}}</h2>
                        <p class="text-base text-black font-thin text-left">{{$location}}</p>
                    </div>
                </div>
                <div class="text-center py-8 sm:py-6 w-[100%]">
                    <a href="{{url($langSeg.'/project-details')}}" class="bg-black border-black text-sm text-white font-thin py-4 px-20 rounded-0">
                        Explore More
                    </a>
                </div>
            </div>
        </div>
    </div>