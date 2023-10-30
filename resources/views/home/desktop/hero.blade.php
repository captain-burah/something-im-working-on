{{-- <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="container mx-auto flex flex-col items-start md:flex-row">
        <div class="ml-0 md:mr-12 lg:w-2/3 sticky">
            <div class="container mx-auto w-full h-full">
                <style>
                    ul {
                        padding-left: 30px;
                    }
                    li {
                        list-style-type: disc;
                        padding-left: 10px;
                    }
                </style>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum. Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum. Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum. Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum. Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien.
            </div>
        </div>

        <div class="flex flex-col w-full sticky md:bottom- lg:w-1/3 mt-2 mx-0">
            fdsfdafdafdfasfd
        </div>

    </div>
</div> --}}

{{-- <div class="bg-hero bg-cover bg-no-repeat bg-top object-cover overflow-hidden max-w-full h-[100vh]">
    <div class="relative isolate  h-full flex flex-1 flex-col justify-between">
        <div></div>

        @desktop
            <nav x-data="{ open: false }" class="bg-gradient-to-t from-[rgb(0,0,0,.5)] hidden sm:block  ">
                <div class=" container mx-auto px-8">
                    <div class="flex justify-between h-30">

                        <div class="flex items-center">

                            <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline pr-8">
                                <x-nav-link2 href="#" :active="request()->routeIs('dashboard')">
                                    {{ __('ABOUT') }}
                                </x-nav-link2>
                            </div>
                            

                            <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline px-8">
                                <x-nav-link2 href="#" :active="request()->routeIs('dashboard')">
                                    {{ __('DEVELOPMENT') }}
                                </x-nav-link2>
                            </div>

                        </div>

                        <div class=" flex items-center ">
                            <div class="shrink-0 flex items-center hidden md:hidden lg:block text-2xl font-thin">
                                <img style="height: 100px !important;" src="{{ asset('logo-light.png') }}" alt="esnaad-logo-navbar">
                            </div>
                        </div>

                        <div class="flex items-center">

                            <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline px-8">
                                <x-nav-link2 href="#" :active="request()->routeIs('dashboard')">
                                    {{ __('COMMUNITY') }}
                                </x-nav-link2>
                            </div>

                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-center pl-8">
                                <x-nav-link2 href="{{ url('contact') }}" :active="request()->routeIs('home')">
                                    {{ __('CONTACT') }}
                                </x-nav-link2>
                            </div>
                        </div>
                
                    </div>
                </div>
            </nav>
        @enddesktop



    </div>

</div> --}}

<style>
        video {
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;

        }
        .video-wrapper {
            width: 100vw;
            height: 100vh;
            position: relative;
            overflow: hidden;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

</style>


<div class="video-wrapper bg-hero bg-cover bg-no-repeat bg-top object-cover overflow-hidden max-w-full h-[100vh]">
    <div class="relative isolate  h-full flex flex-1 flex-col justify-between">
        <div></div>
    
        <video playsinline autoplay muted loop poster="/home/HOME2.webp">
            {{-- <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4"> --}}
            <source src="{{ asset('home/HERO.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.

        </video>

        @notmobile
            <nav x-data="{ open: false }" class="bg-gradient-to-t from-[rgb(0,0,0,.5)] hidden sm:block  " style="z-index: 100 !important;">
                <div class=" container mx-auto px-8">
                    <div class="flex justify-between h-30">

                        <div class="flex items-center">

                            <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline pr-8">
                                <x-nav-link2 href="{{ url('about-esnaad') }}" :active="request()->routeIs('dashboard')">
                                    {{ __('ABOUT') }}
                                </x-nav-link2>
                            </div>
                            

                            <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline px-8">
                                <x-nav-link2 href="#" :active="request()->routeIs('dashboard')">
                                    {{ __('DEVELOPMENT') }}
                                </x-nav-link2>
                            </div>

                        </div>

                        <div class=" flex items-center ">
                            <div class="shrink-0 flex items-center text-2xl font-thin">
                                @desktop
                                    <img style="height: 100px !important;" src="{{ asset('logo-light.png') }}" alt="esnaad-logo-navbar">
                                @enddesktop
                                @tablet
                                    <img style="height: 50px !important;" src="{{ asset('logo-light.png') }}" alt="esnaad-logo-navbar">
                                @endtablet
                            </div>
                        </div>

                        <div class="flex items-center">

                            <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline px-8">
                                <x-nav-link2 href="#" :active="request()->routeIs('dashboard')">
                                    {{ __('COMMUNITY') }}
                                </x-nav-link2>
                            </div>

                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-center pl-8">
                                <x-nav-link2 href="{{ url('contact') }}" :active="request()->routeIs('home')">
                                    {{ __('CONTACT') }}
                                </x-nav-link2>
                            </div>
                        </div>
                
                    </div>
                </div>
            </nav>
        @endnotmobile

    </div>
</div>
