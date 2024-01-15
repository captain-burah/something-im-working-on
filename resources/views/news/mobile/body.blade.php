@if(isset($available))
    <div class="sm:container sm:mx-auto sm:px-4 my-4 sm:my-4 mx-auto">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-2 mx-4 mb-5">

            @foreach($response as $data)
                <?php
                    $id = $data['id'];
                    $title = $data['title'];
                    $titlear = $data['title_ar'];
                    $sluglink = $data['slug_link'];
                    $date = $data['created_at'];
                    $thumbnail = $data['thumbnail'];
                ?>
                <div class="">
                    <div class="mx-auto px-0 ">
                        <div class="max-w-full cursor-pointer rounded-0 bg-white p-2 shadow">
                            <div class="row">
                                <img class="w-full rounded-0 object-cover object-center" src="{{ asset('developments/3.jpg')}}" alt="news-thumbnail"/>
                            </div>
                            <div class="row pt-4">
                                <div class="grid grid-cols-7">
                                    <div class="col-span-2 text-center">
                                        <img class="w-full h-[20vw] w-[20vw]  rounded-0 object-cover object-center" 
                                            src="{{ asset('developments/1.jpg')}}" 
                                            height="3vw"
                                            width="3vw"
                                            alt="project-logo" 
                                        />
                                    </div>
                                    <div class="col-span-5">
                                        <p class="ml-4 text-lg font-thin text-black">{{$title}}</p>
                                        {{-- <p class="ml-4 mb-4 font-thin text-sm text-black">{{ Carbon\Carbon::parse($date)->format('j F Y') }}</p> --}}
                                        <a href="{{ URL($langSeg.'/news/'.$sluglink) }}" class="ml-4 mb-4 bg-black text-white px-15 py-3">
                                            Explore
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
