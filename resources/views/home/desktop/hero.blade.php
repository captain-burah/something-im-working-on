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

<div class="bg-hero bg-cover bg-no-repeat bg-top object-cover overflow-hidden max-w-full h-[100vh]">
    <div class="relative isolate px-6 lg:px-8 h-full flex flex-1 flex-col justify-between">
        <div></div>

        @desktop
            <div>
                <nav x-data="{ open: false }" class="bg-transparent border-b border-gray-100 hidden sm:block ">
                    <!-- Primary Navigation Menu -->
                    <div class=" container mx-auto px-8">
                        <div class="flex justify-between h-30">

                            <div class="flex items-center">

                                <!-- Navigation Links -->
                                <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline pr-5">
                                    <x-nav-link2 href="#" :active="request()->routeIs('dashboard')">
                                        {{ __('ABOUT') }}
                                    </x-nav-link2>
                                </div>

                                <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline px-5">
                                    <x-nav-link2 href="#" :active="request()->routeIs('dashboard')">
                                        {{ __('COMMUNITIES') }}
                                    </x-nav-link2>
                                </div>

                                <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline px-5">
                                    <x-nav-link2 href="#" :active="request()->routeIs('dashboard')">
                                        {{ __('DEVELOPMENTS') }}
                                    </x-nav-link2>
                                </div>

                            </div>

                            <div class=" flex items-center ">
                                <div class="shrink-0 flex items-center hidden md:hidden lg:block text-2xl font-thin">
                                    <img style="height: 100px !important;" src="{{ asset('logo-light.png') }}" alt="esnaad-logo-navbar">
                                </div>
                            </div>

                            <div class="flex items-center">

                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-center">
                                    <x-nav-link2 href="#" :active="request()->routeIs('home')">
                                        {{ __('INVEST IN DUBAI') }}
                                    </x-nav-link2>
                                </div>


                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-center">
                                    <x-nav-link2 href="#" :active="request()->routeIs('home')">
                                        {{ __('MEDIA CENTER') }}
                                    </x-nav-link2>
                                </div>

                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-center">
                                    <x-nav-link2 href="#" :active="request()->routeIs('home')">
                                        {{ __('CONTACT US') }}
                                    </x-nav-link2>
                                </div>
                            </div>
                   
                        </div>
                    </div>
                </nav>
            </div>
        @enddesktop



    </div>

</div>
