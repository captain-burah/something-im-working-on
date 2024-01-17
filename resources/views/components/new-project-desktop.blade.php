<div class="max-w-6xl mx-auto p-0">

            <div class="w-full bg-white rounded-0 sahdow-lg overflow-hidden flex flex-col justify-center items-center">
                <div class="relative overflow-hidden rounded-0 lg:h-[20rem] max-h-[34rem] z-0">
                    <div
                        class="text-white text-xl rounded-0 absolute inset-0 bg-black bg-opacity-80 flex justify-center items-center ">
                    </div>
                    <img class="h-auto w-[100%] object-cover "
                        src="{{$img}}"
                        alt="esnaad-project-card"
                    >
                </div>
                <div class="row w-full grid grid-cols-5 mt-4 z-20">
                    <div class="col-span-2 mt-[-70px] w-full mx-auto">
                        <img class="object-cover m-0 p-0  z-90 text-center mx-auto"
                            width="160px" height="auto"
                            src="{{$logo}}"
                            alt="esnaad-project-card"
                        >
                    </div>
                    <div class="col-span-3" >
                        <h2 class="text-xl text-black font-bold text-left">{{$name}}</h2>
                        <p class="text-base text-black font-thin text-left">{{$location}}</p>
                    </div>
                </div>
                <div class="text-center py-4 sm:py-4 w-full">
                    <a href="#details" class="bg-black border-black text-sm text-white font-thin py-3 px-10 rounded-0">
                        Explore More
                    </a>
                </div>
            </div>
    </div>