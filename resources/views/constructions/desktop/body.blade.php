@if(isset($available))
    <div class="sm:container sm:mx-auto sm:px-4 sm:my-4 mx-auto">
        <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 gap-2 mb-5">

            @foreach($response as $data)
                <?php
                    $id = $data['id'];
                    $title = $data['title'];
                    $titlear = $data['title_ar'];
                    $sluglink = $data['slug_link'];
                    $thumbnail = $data['thumbnail'];
                ?>
                <a href="{{ url('/constructions/'.$id) }}">
                
                    <div class="max-w-sm rounded overflow-clip shadow">
                        <img class="w-full" src="{{ url('https://mis.esnaad.com/uploads/construction/'.$id.'/thumbnail/'.$thumbnail)}}" alt="Sunset in the mountains">
                        <div class="px-6 py-4 ">
                            <h3 class="font-bold text-xl mb-2">{{$title}}</h3>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endif
