<div class="max-w-full rounded-0 overflow-hidden" >

    <div class="w-full  group p-8">
        <div class="relative overflow-hidden">

            <div class="grid grid-cols-1 ">
                <div class="">
                    <img
                        class="w-full object-cover hover:shadow-lg hover:shadow-gray/0 mx-0"
                        src="{{ asset($url)}}"
                        alt="esnaad-quality-and-services"
                        onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2 (1).jpg')}}';"
                    >
                </div>
                <div class="absolute bottom-0 left-0 m-3 z-10">
                    <footer class="text-xl text-white font-semibold z-10 ">{{ $base }}</footer>
                </div>
            </div>
            <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                <span class="text-white py-2 px-4 text-justify text-md font-base">
                    {{$description}}
                </span>
            </div>
        </div>
    </div>

</div>
