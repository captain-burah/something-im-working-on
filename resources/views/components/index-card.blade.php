<div class="max-w-full rounded-0 overflow-hidden" >

    <div class="w-full group">
        <div class="relative overflow-hidden">

            <div class="grid grid-cols-1 ">

                <img
                    class="sm:w-full object-cover shadow"
                    src="{{ asset($url)}}"
                    alt="esnaad-quality-and-services"
                    onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2 (1).jpg')}}';"
                >

                {{-- <div class="absolute bg-gradient-to-t from-[rgb(0,0,0,.6)] bottom-0 left-0 p-3 z-9 w-full">
                    <footer class="text-xl text-white font-semibold z-9 ">{{ $base }}</footer>
                </div> --}}
            </div>
            
            {{-- <div class="absolute h-full w-full bg-black/50 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                <span class="text-white py-2 px-4 text-justify text-md font-base">
                    {{$description}}
                </span>
            </div> --}}

        </div>
        <div class=" h-full w-full flex items-center justify-center">
                <span class="mt-10 px-4 text-center text-base font-base  leading-8">
                    {{ __('frontend.'.$description) }}
                </span>
            </div>
    </div>

</div>
