<style >
    dialog {
        padding: 1rem 3rem;
        background: white;
        /* max-width: auto; */
        padding-top: 2rem;
        border-radius: 20px;
        border: 0;
        box-shadow: 0 5px 30px 0 rgb(0 0 0 / 10%);
        animation: fadeIn 1s ease both;
        &::backdrop {
            animation: fadeIn 1s ease both;
            background: rgb(255 255 255 / 40%);
            z-index: 2;
            backdrop-filter: blur(20px);
        }
        .x {
            filter: grayscale(1);
            border: none;
            background: none;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: ease filter, transform 0.3s;
            cursor: pointer;
            transform-origin: center;
            &:hover {
                filter: grayscale(0);
                transform: scale(1.1);
            }
        }
        h2 {
            font-weight: 600;
            font-size: 2rem;
            padding-bottom: 1rem;
        }
        p {
            font-size: 1rem;
            line-height: 1.3rem;
            padding: 0.5rem 0;
            a {
                &:visited {
                    color: rgb(var(--vs-primary));
                }
            }
        }
    }

    button.primary {
        display: inline-block;
        font-size: 0.8rem;
        color: #fff !important;
        background: rgb(var(--vs-primary) / 100%);
        padding: 13px 25px;
        border-radius: 17px;
        transition: background-color 0.1s ease;
        box-sizing: border-box;
        transition: all 0.25s ease;
        border: 0;
        cursor: pointer;
        box-shadow: 0 10px 20px -10px rgb(var(--vs-primary) / 50%);
        &:hover {
            box-shadow: 0 20px 20px -10px rgb(var(--vs-primary) / 50%);
            transform: translateY(-5px);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 0.9;
        }
    }

    .navbar1 {
        transition: all 0.5s !important;
    }

    .navbar-scrolled {
        background-color: #1c1c1c !important;
    }

</style>
@notmobile
    <div class=" container  mx-auto px-8">
        <div class="flex justify-between h-20">

            <div class="flex items-center">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline pr-5">
                    <x-nav-link href="{{ url('about-esnaad') }}" aria-label="navbar-route">
                        {{ __('ABOUT ESNAAD') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline px-5">
                    <x-nav-link href="{{ url('communities/fdsad') }}"  aria-label="navbar-route">
                        {{ __('COMMUNITIES') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:flex mx-auto no-underline px-5">
                    <x-nav-link href="{{ url('developments/Feil-Cummerata') }}" aria-label="navbar-route">
                        {{ __('DEVELOPMENTS') }}
                    </x-nav-link>
                </div>


                {{-- DROP DOWN NAV BAR --}}
                {{-- <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex inline-flex items-center px-3 py-2  leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>Buy</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content" class="bg-white border-0">
                        <x-dropdown-link :href="route('luxe.buy')">
                            {{ __('All Properties') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('luxe.offplan-properties')">
                            {{ __('Off-Plan Properties') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('luxe.ready-properties')">
                            {{ __('Ready Properties') }}
                        </x-dropdown-link>

                        <hr>

                        <x-dropdown-link :href="route('luxe.ready.villas')">
                            {{ __('Ready Villas') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('luxe.ready.apartments')">
                            {{ __('Ready Apartments') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('luxe.ready.townhouses')">
                            {{ __('Ready Townhouses') }}
                        </x-dropdown-link>

                        <hr>

                        <x-dropdown-link :href="route('luxe.offplan.apartments')">
                            {{ __('Off-Plan Villas') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('luxe.offplan.villas')">
                            {{ __('Off-plan Apartments') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('luxe.offplan.townhouses')">
                            {{ __('Off-Plan Townhouses') }}
                        </x-dropdown-link>

                    </x-slot>
                </x-dropdown> --}}

            </div>

            <div class=" flex items-center ">
                <div class="shrink-0 flex items-center hidden md:hidden lg:block text-2xl font-thin">
                    @tablet
                        <a href="{{ url('/') }}" aria-label="home-route">
                            <img style="height: 30px !important;" src="{{ asset('logo-dark.png') }}" alt="esnaad-logo-navbar">
                        </a>
                    @endtablet

                    @desktop
                        <a href="{{ url('/') }}" aria-label="home-route">
                            <img style="height: 70px !important;" src="{{ asset('logo-dark.png') }}" alt="esnaad-logo-navbar">
                        </a>
                    @enddesktop
                </div>
            </div>

            <div class="flex items-center">

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-center">
                    <x-nav-link href="{{ url('invest-in-dubai') }}"  aria-label="navbar-route">
                        {{ __('INVEST IN DUBAI') }}
                    </x-nav-link>
                </div>


                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-center">
                    <x-nav-link href="{{ url('/media-center') }}"  aria-label="navbar-route">
                        {{ __('MEDIA CENTER') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-center">
                    <x-nav-link href="{{ url('contact') }}"   aria-label="navbar-route">
                        {{ __('CONTACT') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                @if(Auth::user())
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endif
            </div> --}}


            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-700 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endnotmobile

@mobile
    @include('layout.mobileNavigation')
@endmobile



