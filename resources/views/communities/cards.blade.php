{{-- Desktop View --}}
<div class=" md:container mx-auto md:px-4 my-8 ">
    <div class="grid xl:grid-cols-4 lg:grid-cols-3 grid-cols-2 gap-2 mb-5">

        {{-- @foreach($response as $data)
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
        @endforeach --}}
    </div>
</div>
