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
                <a href="{{ url('/constructions/'.$sluglink) }}" class="">
                    <!-- component -->
<!-- Create By Joker Banny -->
                    <div class="">
                        <div class="mx-auto px-0">
                            <div class="max-w-full cursor-pointer rounded-0 bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md">
                                <div class="row">
                                    <img class="w-full rounded-0 object-cover object-center" src="{{ url('https://mis.esnaad.com/uploads/construction/'.$id.'/thumbnail/'.$thumbnail)}}" alt="product" />
                                </div>
                                <div class="row">
                                    <p class="my-4 pl-4 font-bold text-gray-500">Location</p>
                                    <p class="mb-4 ml-4 text-xl font-semibold text-gray-800">{{$title}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif


{{-- <div class="max-w-sm rounded overflow-clip shadow">
                        <img class="w-full" src="{{ url('https://mis.esnaad.com/uploads/construction/'.$id.'/thumbnail/'.$thumbnail)}}" alt="Sunset in the mountains">
                        <div class="px-6 py-4 ">
                            <h3 class="font-thin text-base mb-2">{{$title}}</h3>

                            <div class="mt-2 h-6 relative w-auto rounded-full overflow-hidden">
                                <div class=" w-full h-full bg-gray-200 absolute "></div>
                                <div class=" h-full bg-yellow-400 sm:bg-green-500 absolute" style="width:30%"><div class="h-full w-full mx-auto text-sm text-center pt-1 text-white font-bold">30%</div></div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="max-w-6xl mx-auto p-0"> --}}