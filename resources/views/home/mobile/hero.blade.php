

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
            height: 400px;
            position: relative;
            overflow: hidden;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 7vh;
        }

</style>

{{-- Mobile View --}}
<div class="video-wrapper bg-hero bg-cover bg-no-repeat bg-top object-cover overflow-hidden max-w-full ">
    <div class="relative isolate  h-full flex flex-1 flex-col justify-between">
        
        <div ></div>
    
        <video playsinline autoplay muted loop poster="/developments/6.jpg">
            {{-- <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4"> --}}
            <source src="{{ asset('home/HERO.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        {{-- @notmobile
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
                                <x-nav-link2 href="{{ url('our-developments') }}" >
                                    {{ __('DEVELOPMENT') }}
                                </x-nav-link2>
                            </div>

                        </div>

                        <div class=" flex items-center ">
                            <div class="shrink-0 flex items-center text-2xl font-thin">
                                @desktop
                                    <img style="height: 70px !important;" src="{{ asset('logo-light.png') }}" alt="esnaad-logo-navbar">
                                @enddesktop
                                @tablet
                                    <img style="height: 50px !important;" src="{{ asset('logo-light.png') }}" alt="esnaad-logo-navbar">
                                @endtablet
                            </div>
                        </div>

                        <div class="flex items-center">

                            <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline px-8">
                                <x-nav-link2 href="{{ url('our-communities') }}" :active="request()->routeIs('dashboard')">
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
        @endnotmobile --}}

    </div>
</div>
