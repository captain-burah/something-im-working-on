@if(isset($available))
    <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto min-h-screen py-8">
        <div class="grid xl:grid-cols-3 lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5">

            @foreach($response as $data)
                <?php
                    $id = $data['id'];
                    $title = $data['title'];
                    $titlear = $data['title_ar'];
                    $sluglink = $data['slug_link'];
                    $thumbnail = $data['thumbnail'];
                ?>
                <div class="mx-auto px-0 ">
                    <div class="max-w-full cursor-pointer rounded-0 bg-white p-2 shadow">
                        <div class="row">
                            {{-- <img class="w-full rounded-0 object-cover object-center" src="{{ URL($langSeg.'/https://mis.esnaad.com/uploads/construction/'.$id.'/thumbnail/'.$thumbnail)}}" alt="product" /> --}}
                            <img class="w-full rounded-0 object-cover object-center" src="{{ asset('developments/3.jpg')}}" alt="product" />
                        </div>
                        <div class="row">
                            <div class="grid grid-cols-7">
                                <div class="col-span-2">
                                    <img class="w-full ml-[1vw] mt-[-3vw] xl:h-[6vw] xl:w-[6vw]  rounded-0 object-cover object-center" 
                                        src="{{ asset('developments/1.jpg')}}" 
                                        height="3vw"
                                        width="3vw"
                                        alt="project-logo" 
                                    />
                                </div>
                                <div class="col-span-5 mb-4">
                                    <p class="mt-4 pl-4 text-xl font-thin text-black">The Gulf Villas & Residences</p>
                                    <p class="mb-2 ml-4 font-thin text-black">Nad Al Sheba</p>
                                    <div class="mt-4 ml-4 mb-4 h-5 relative w-auto rounded-full overflow-hidden">
                                        <div class=" w-full h-full bg-gray-200 absolute "></div>
                                        <div class=" h-full bg-black sm:bg-black absolute" style="width:30%"><div class="h-full w-full mx-auto text-xs text-center text-white font-bold">30%</div></div>
                                    </div>
                                    <a href="{{ URL($langSeg.'/constructions/'.$sluglink) }}" 
                                        class="mt-4 ml-4 mb-4 bg-black text-white px-15 py-3">
                                        Explore
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row text-center pb-5 pt-2">
                            <a href="{{ URL($langSeg.'/constructions/the-gulf-villas') }}" 
                                class="bg-black text-white px-15 py-3">
                                Explore
                            </a>
                        </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif


{{-- <div class="max-w-sm rounded overflow-clip shadow">
                        <img class="w-full" src="{{ URL($langSeg.'/https://mis.esnaad.com/uploads/construction/'.$id.'/thumbnail/'.$thumbnail)}}" alt="Sunset in the mountains">
                        <div class="px-6 py-4 ">
                            <h3 class="font-thin text-base mb-2">{{$title}}</h3>

                            <div class="mt-2 h-6 relative w-auto rounded-full overflow-hidden">
                                <div class=" w-full h-full bg-gray-200 absolute "></div>
                                <div class=" h-full bg-yellow-400 sm:bg-green-500 absolute" style="width:30%"><div class="h-full w-full mx-auto text-sm text-center pt-1 text-white font-bold">30%</div></div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="max-w-6xl mx-auto p-0"> --}}