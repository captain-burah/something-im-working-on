{{-- Desktop View --}}
<div class="container mx-auto px-4 mx-0 px-0 sm:px-4 mt-10 mb-5 sm:mt-5 sm:mb-2 mx-auto">
    <div class="row">
        <div class="grid md:grid-cols-2 gap-12 mx-auto">
            <div>
                <h2 class="text-left text-xl">
                    {{ __('frontend.homeSectionThreeH') }}
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 mx-0 px-0 sm:px-4 mb-5 sm:mt-5 sm:mb-2 mx-auto">
    <div class="relative overflow-hidden max-h-[24rem] ">
        <div
            class="text-white text-2xl absolute inset-0 flex justify-center items-center" style="background-color: #000; opacity: .9">
            {{ __('frontend.homeSectionThreeImage') }}
        </div>
        <img class="max-h-[24rem] w-full object-cover "
        src="{{ asset('home/COMING_SOON.jpeg')}}"                    
        alt="esnaad-project-card">
    </div>
</div>


<div class="container mx-auto px-4 mx-0 px-0 mt-5  mx-auto">
    <div class="row mb-4">
        <div class="grid md:grid-cols-2 gap-12 mx-auto">
            <div>
                <p class="text-base text-left leading-relax ">
                    {{ __('frontend.homeSectionThreeP') }}  
                </p>
            </div>
        </div>
    </div>

    
</div>

