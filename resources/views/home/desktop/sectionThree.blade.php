{{-- Desktop View --}}
<div class="container px-0 px-4 mx-auto" @if($langSeg == 'ar') dir="rtl" @endif>
    <div class="mt-10 mb-10">
        <h3 class="text-xl xl:text-3xl font-thin text-center">
            
            {{ __('frontend.homeSectionThreeH') }}
            
        </h3>
    </div>
    <div class="row my-10">
        <div class="grid grid-cols-5 gap-12 mb-5 mx-auto">
            
            <div class="col-span-2 w-full bg-white sahdow-lg overflow-hidden flex flex-col justify-center items-center ">
                <div class="relative overflow-hidden max-h-[24rem] ">
                    <div
                        class="text-white text-2xl absolute inset-0  flex justify-center items-center shadow " style="background-color: #000; opacity: .9;">
                        {{ __('frontend.homeSectionThreeImage') }}
                    </div>
                    <img class="max-h-[24rem] w-full object-cover "
                    src="{{ asset('home/COMING_SOON.jpeg')}}"                    
                    alt="esnaad-project-card">
                </div>
            </div>
            <div class="col-span-3 my-auto">
                <h2 class=" text-xl xl:text-4xl">
                </h2>
                <p class="text-xl mt-10 text-justify leading-8">
                    {{ __('frontend.homeSectionThreeP') }}
                </p>
            </div>
        </div>
    </div>

</div>
