{{-- Desktop View --}}
<div class=" md:container mx-auto md:px-4 my-8 pt-20 ">
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-dark">
                Our Communities
            </h1>
            <p class="text-base font-thin text-black">
                We don’t just build homes - we build communities. Our projects are
                designed to foster a sense of community, with ample amenities and open spaces
                that bring people together
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
            <div class="w-  full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center shadow">
                <div class="relative overflow-hidden rounded-xl lg:h-[20rem] max-h-[34rem]">
                    <div
                        class="text-white text-xl rounded-xl absolute inset-0  bg-gray-950/80 flex justify-center items-center ">
                        COMING SOON 
                    </div>
                    <img class="h-full w-full object-cover "
                    src="{{ asset('home/sec3-1.jpg')}}"
                    
                    alt="esnaad-project-card">
                </div>
                <div class="text-center py-8 sm:py-6">
                    <p class="text-xl text-gray-700 font-bold mb-2">Coming Soon</p>
                    <p class="text-base text-gray-400 font-normal">Location </p>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="grid xl:grid-cols-4 lg:grid-cols-3 grid-cols-2 gap-2 mb-5">
        @foreach($response as $data)
            <div>
                <div class="w-full h-fit group">
                    <div class="relative overflow-hidden h-32 md:h-56">
                        <img
                            class="h-full w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0"
                            src="{{ asset('uploads/communities/images/'.$data->id.'/'.$data->images->first()->image)}}"
                            onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                            alt="LPD-{{$data->slug_link}}"
                        >
                        <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <a href="{{ URL('/dubai-communities/'.$data->slug_link) }}" aria-label="view-more-{{$data->slug_link}}">
                                <button class="bg-white text-black py-2 px-5">More Details</button>
                            </a>
                        </div>
                    </div>

                    <div class="px-3 py-3 mx-auto">

                        <p class="py-2 text-xs font-light text-center mb-0">
                            {{$data->projects_count}} Projects
                        </p>

                        <p class="py-2 text-sm font-light uppercase text-center mb-0 border border-solid border-gray-300 ">
                            {{ Str::limit($data->title_en, 60 ) }}
                        </p>

                    </div>

                </div>
            </div>
        @endforeach
    </div> --}}
</div>
