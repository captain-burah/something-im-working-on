{{-- Desktop View --}}
<div class="container px-0 px-4 mx-auto" >
    <div class="row my-20">
        <div class="grid grid-cols-2 gap-12 mb-5 mx-auto" @if($langSeg == 'ar') dir="rtl" @endif>
            <div class="my-auto">
                <h1 class=" text-xl xl:text-3xl font-thin">
                    {{__('frontend.homeSectionOneH')}}
                </h1>
                <p class="text-sm xl:text-base leading-8 mt-2 text-left">
                    {{__('frontend.homeSectionOneP1')}}
                </p>

                <p class="text-sm xl:text-base leading-8 mt- text-left">
                    {{__('frontend.homeSectionOneP2')}}
                </p>
            </div>
            <div>
                <div class="placeholder">
                    <!-- blurred background image for blurred edge -->
                    <div class="bg-image-blur"></div>
                    <!-- same image, no blur -->
                    <div class="bg-image"></div>
                    <!-- content -->
                </div>
            </div>
            {{-- <div class="image-blurred-edge"></div>
            <div class="box-shadow: 0 0 8px 8px white inset;">
                <img style="height: 100%; object-fit: cover; "  src="{{ asset('assets/img/img-error2.webp') }}" alt="community-image-home-tablet">
            </div> --}}
        </div>
    </div>

</div>
