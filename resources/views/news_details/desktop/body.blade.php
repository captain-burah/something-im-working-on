
    
    <div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl">
        <div class="container mx-auto flex flex-col items-start md:flex-">
            
            <div class="mt-8 lg:flex lg:gap-x-28 xl:gap-x-full w-full">
                <div class="w-full">
                    <div class="space-y-10">
                        <div>

                            <h1 class="text-2xl font-bold mb-4">
                                {{$title}}
                            </h1>

                            <div class="grid grid-cols-2 gap-4 place-content-between">
                                <div class="">
                                    <p class="text-sm mb-2">Posted - {{ \Carbon\Carbon::parse($created_at)->diffForhumans() }}</p>
                                </div>
                                <div class="text-right">
                                    <div class="inline-flex float-right text-right">
                                        <div class="flex-1">
                                            <div class="w-8  rounded-3xl">
                                                    <a href="{{ env('COMPANY_FB') }}" target="_blank" aria-label="esnaad-facebook">
                                                        <img
                                                            src="{{ asset('front/icons/fb.svg') }}"
                                                            class="w-fit rounded"
                                                            alt="social-media-fb"
                                                        >
                                                    </a>
                                            </div>
                                        </div>

                                        <div class="flex-1">
                                            <div class="w-8  rounded-3xl p-1">
                                                <a href="{{ env('COMPANY_IG') }}" target="_blank" aria-label="esnaad-instagram">
                                                    <img
                                                        src="{{ asset('front/icons/ig.png') }}"
                                                        class="w-fit rounded"
                                                        alt="social-media-ig"
                                                    >
                                                </a>
                                            </div>
                                        </div>

                                        <div class="flex-1">
                                            <div class="w-8  rounded-3xl p-1">
                                                <a href="{{ env('COMPANY_TW') }}" target="_blank" aria-label="esnaad-x">
                                                    <img
                                                        src="{{ asset('front/icons/x-logo-black.png') }}"
                                                        class="w-fit rounded"
                                                        alt="social-media-tw"
                                                    >
                                                </a>
                                            </div>
                                        </div>

                                        <div class="flex-1">
                                            <div class="w-8  rounded-3xl p-1">
                                                <a href="{{ env('COMPANY_IN') }}" target="_blank" aria-label="esnaad-linkedin">
                                                    <img
                                                        src="{{ asset('front/icons/in2.png') }}"
                                                        class="w-fit rounded"
                                                        alt="social-media-in"
                                                    >
                                                </a>
                                            </div>
                                        </div>

                                        <div class="flex-1">
                                            <div class="w-8  rounded-3xl p-1">
                                                <a href="https://wa.link/etkc3f" target="_blank" aria-label="esnaad-whatsapp">
                                                    <img
                                                        src="{{ asset('front/icons/wa.png') }}"
                                                        class="w-fit rounded"
                                                        alt="social-media-wa"
                                                    >
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                        
                                </div>
                            </div>

                            <div class="place-content-between w-full">
                                    
                                    
                                </div>


                            <img src="{{ URL("https://mis.esnaad.com/uploads/news/".$id."/header_image/".$header_image)}}" alt="Ensaad-news-article-{{$title}}" class="object-cover w-full h-56 mb-6 rounded-0 shadow-md sm:h-80 2xl:h-96">                          

                            {!! $description !!}
                        </div>
                    </div>
                </div>
                
            </div>

            @if(isset($available))
                <div class="grid md:grid-cols-2 gap-3 mb-5 mx-auto" >
                    @foreach($images as $image)
                        <div>
                            <img src="{{ URL("https://mis.esnaad.com/uploads/news/".$id."/images/".$image['name'])}}" alt="Awesome Tailwind CSS Timelines to use for free Image" class="object-cover w-auto mb-6 rounded-lg shadow h-auto"> 
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>


    
