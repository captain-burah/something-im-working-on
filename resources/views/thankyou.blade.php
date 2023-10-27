@extends('layoutv2.master')

@section('content')

    @include('layoutv2.search')

<header>

    <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url('{{URL::asset('front/images/bg-hero3.jpg')}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white text-2xl font-semibold uppercase md:text-4xl">
                    Thank You!
                    <br>

                </h1>
                <p class="text-white text-md font-semibold xl:text-lg">
                    One of our consultants will contact you shortly.
                </p>

                {{-- <div class="flex flex-wrap grid grid-cols-2 gap-2 my-2 w-full">

                    <div>
                        <button onclick="openModal('mymodaltop')" class="mt-4 px-4 py-2 w-full bg-black text-white text-xs uppercase font-medium rounded-sm  hover:bg-gray-100 hover:text-gray-800 focus:outline-none ring-1 ring-gray-200 ">
                            Dubai New Projects
                        </button>
                    </div>
                    <div>
                        <a href="#project_detail_map_section" aria-label="dubai-new-project-in-detail-view-map">
                            <button class="mt-4 px-4 py-2 w-full bg-gray-100 text-gray-800 text-xs uppercase font-medium rounded-sm  hover:bg-black hover:text-gray-100 focus:outline-none ring-1 ring-gray-200 ">
                                Open Map View
                            </button>
                        </a>
                    </div>


                </div> --}}


            </div>
        </div>
    </div>
</header>

@endsection

