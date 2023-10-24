<?php
    $route_name = request()->route()->getName();
?>

<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <div class="max-w-full rounded overflow-hidden @isset($type) @if($type == 'luxury') bg-black @endif @endisset ">

        <div class="w-full h-fit group">
            <div class="relative overflow-hidden">
                {{-- <img class="h-96 w-full object-cover" src="https://images.unsplash.com/photo-1659576294143-1da218a2d82e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt=""> --}}
                <img
                    class="h-48 w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0"
                    src="{{ asset('uploads/projects/images/'.$propertyreference.'/'.$img)}}" alt="lpd-projects-{{$img}}"
                    onerror="this.onerror=null;this.src='{{ URL::asset('assets/img/img-error2.webp')}}';"
                >
                <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <a href="{{ URL('/dubai-new-projects/'.$slug) }}" aria-label="view-more-{{$slug}}">
                        <button class="bg-white text-black py-2 px-5">More Details</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="px-3 py-3 @isset($type) @if($type == 'luxury') hover:bg-gray-700 @endif @endisset">
        {{-- <div class="px-6 py-4 @isset($type) @if($type == 'luxury') hover:bg-gray-200 @endif @endisset hover:bg-white"> --}}
            <a href="{{ url('/dubai-new-projects/'.$slug) }}" aria-label="similar-properties-luxe-properties-dubai" >
                <div class="flex flex-wrap -mx-3" style="height: 40px !important;">
                    <div class="flex-none w-auto max-w-full px-3 my-auto">
                        <div class="h-full">
                            <p class=" text-md mb-0 ">
                                <span class="font-bold">{{ Str::limit($name, 60 ) }}</span>
                                {{-- <span class="font-thin">@if($type == '1') Off Plan @elseif($type == '2') Ready @else Unlisted @endif</span> --}}
                            </p>
                        </div>
                    </div>
                </div>
            </a>

            <hr class="border-solid border-1 border-gray-300 my-2">

            <div class="">
                <p class="font-light md:text-sm my-2 h-full " >
                    {{ $location }}
                </p>
            </div>

            <div class="flex flex-wrap grid grid-cols-2 gap-2 my-2">
                <div>
                    <p class="font-semibold text-whatsapp md:text-sm">

                        @if($price == 'Price On Request')
                            {{ __('Price on Request') }}
                        @else
                            AED {{ $price }}
                        @endif
                    </p>
                </div>
                <div>
                    <p class="font-light md:text-sm text-right">
                        {{ $projtype }}
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap grid grid-cols-3 gap-2 my-2">
                <div class="col-span-2">
                    <p class="font-light md:text-sm">
                        {{ $developer }}
                    </p>
                </div>
                <div>
                    <p class="font-light md:text-sm text-right">
                        {{ $handover }}
                    </p>
                </div>
            </div>


            @if($route_name == "luxe.communities.details" || $route_name == "luxe.dubai-developers.details")

            @else
                <div class="flex flex-wrap grid grid-cols-2 gap-2 mb-5">
                    <div>
                        <button onclick="openModal('mymodalcentered-{{$id}}')"  class="inline-block w-full  py-2 font-light text-sm text-center  align-middle transition-all bg-transparent border border-gray-500 rounded-0 cursor-pointer leading-normal ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md">
                            Request Details
                        </button>
                    </div>
                    <div>
                        <a href="https://wa.me/971585602665?text=Good Day! I would like to have know more about the Off Plan project - {{ $name }}. Thank you LuXe Properties Dubai!" aria-label="whatsapp-for-{{$slug}}">
                            <button type="button" class="inline-block w-full px-6 py-2 text-white font-light text-sm text-center  align-middle transition-all bg-transparent border border-gray-500 rounded-0 cursor-pointer leading-normal ease-in tracking-tight-rem shadow-xs bg-150 bg-x-25 bg-whatsapp hover:-translate-y-px active:opacity-85 hover:shadow-md">
                                WhatsApp
                            </button>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>

</div>


<dialog id="mymodalcentered-{{$id}}" class="bg-transparent  relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-lg w-full sm:w-1/4 relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-thin text-xl text-gray-900">{{$name}}</div>
                    <svg onclick="modalClose('mymodalcentered-{{$id}}')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <form class="flex flex-col items-start w-full"  method="post" action="{{ route('luxe.form.new.projects.details') }}">
                    @csrf
                    <div class="px-7  w-full" style="max-height: 40vh;">

                        <input type="hidden" id="property_id" name="property_id" value="{{$id}}">
                        <input type="hidden" id="country_code" name="country_code">
                        <input type="hidden" id="url" name="url" value="{{Request::url()}}">

                        <div class="mb-6">
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Your Name"  required>
                        </div>
                        <div class="mb-6">
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Email Address" required>
                        </div>
                        <div class="mb-6">
                            <input type="tel" id="phone" name="phone" class="phone w-max px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Phone" style="width: 100% !important" required>
                        </div>
                    </div>

                    <div class="p-7 flex justify-end items-center w-full">
                        <button type="submit" class="bg-whatsapp hover:bg-whatsapp text-white font-bold py-2 px-4 rounded mr-3">
                            Register Your Interest
                        </button>
                        <button type="button" onclick="modalClose('mymodalcentered-{{$id}}')" class="bg-transparent hover:bg-gray-500 text-gray-800 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded"   >
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</dialog>


@section('intel-input')
    
@endsection
