<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

    <div class="mx-auto max-w-7xl lg:max-w-8xl xl:max-w-8xl 2xl:px-w-8xl">
        <div class="container mx-auto flex flex-col items-start md:flex-">
            
            <div class="mt-2 lg:flex lg:gap-x-28 xl:gap-x-full w-full">
                <div class="lg:w-4/5">
                    <div class="space-y-10">
                        <div>
                            <div class="grid grid-cols-2 gap-4 place-content-between mb-2">
                                <div class="">
                                    <p class="text-sm mb-2">Published {{\Carbon\Carbon::parse($created_at)->format('j F, Y')}}</p>
                                </div>
                                <div class="text-right">
                                    <div class="inline-flex float-right text-right">
                                        <div class="flex-1">
                                            <div class="w-8  rounded-3xl">
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{$actual_link}}" target="_blank" aria-label="esnaad-facebook">
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
                                                <a href="https://twitter.com/intent/tweet?url={{$actual_link}}" target="_blank" aria-label="esnaad-x">
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
                                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{$actual_link}}" target="_blank" aria-label="esnaad-linkedin">
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
                                                <a href="whatsapp://send?text={{$actual_link}}" target="_blank" aria-label="esnaad-whatsapp">
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
                            <img src="{{ URL("https://mis.esnaad.com/uploads/construction/".$id."/header_image/".$header_image)}}" alt="Ensaad-constructions-article-{{$title}}" class="object-cover w-full h-56 mb-6 rounded-0 shadow-md sm:h-80 2xl:h-96"> 

                            {!! $description !!}
                        </div>
                    </div>
                </div>
                <div class="hidden lg:w-1/4 lg:block">
                    <div>
                        <h3 class="font-medium text-gray-500 dark:text-gray-400">Categories</h3>
                        <div class="flex flex-col mt-2 space-y-1">
                            <a href="/blog" class="font-medium text-black capitalize hover:underline">All Articles</a>
                            <a href="/blog/resources" class="font-medium text-black capitalize hover:underline">News</a>
                            <a href="/blog/tutorial" class="font-medium text-black capitalize hover:underline">Blogs</a>
                            <a href="/blog/tutorial" class="font-medium text-black capitalize hover:underline">Invest In Dubai</a>
                            <a href="/blog/tailwind-css" class="font-medium text-black capitalize hover:underline">Construction Updates</a>
                        </div>
                    </div> 
                    <div class="mt-12">
                        <h3 class="font-medium text-gray-500 dark:text-gray-400">Top Articles</h3> 
                        <div class="flex flex-col mt-2 space-y-3">
                            No Articles as yet
                        </div>
                    </div>
                </div>            
            </div>

            @if(isset($available))
                <div class="grid md:grid-cols-2 gap-3 mb-5 mx-auto" >
                    @foreach($images as $image)
                        <div>
                            <img src="{{ URL("https://mis.esnaad.com/uploads/construction/".$id."/images/".$image['name'])}}" alt="Construction-header-image" class="object-cover w-auto mb-6 rounded-lg shadow h-auto"> 
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>


    
