@if(isset($available))
    <div class="sm:container sm:mx-auto sm:px-4 my-4 sm:my-4 mx-auto">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-2 mx-4 mb-5">

            @foreach($response as $data)
                <?php
                    $id = $data['id'];
                    $title = $data['title'];
                    $titlear = $data['title_ar'];
                    $sluglink = $data['slug_link'];
                    $thumbnail = $data['thumbnail'];
                ?>
                <a href="{{ url('/news/'.$id) }}" aria-label="news-artcile">
                    <div class="max-w-sm rounded overflow-clip shadow">
                        <img class="object-cover w-full h-[200px] " src="{{ url('https://mis.esnaad.com/uploads/news/'.$id.'/thumbnail/'.$thumbnail)}}" alt="Sunset in the mountains">
                        <div class="px-6 py-4 ">
                            <h3 class="font-thin text-base mb-2">{{$title}}</h3>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif
