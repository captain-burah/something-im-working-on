<style>
    .footer-li>li{
        list-style: none;
    }
    .footer-li {
        padding-left: -30px !important;
    }
</style>

    @notmobile
    @if($route_name != 'esnaad.contact')
        @include('layout.footer_form')
    @endif
    @endnotmobile

    @tablet
        <div class="block py-24 sm:py-8  text-gray-50 bg-footer" id="footer" style="visibility:hidden">
            <div class="container mx-auto px-2 lg:px-8">

                <!-- Footer Links -->
                <div class="mx-auto mt-4 max-w-full lg:mt-24 lg:max-w-full">

                    <div class="grid grid-cols-2 gap-4 reverse">

                        <div class="col-span-2">
                            <div class="mx-auto">
                                <span class="text-3xl text-gray-900 text-center mx-auto py-5" >
                                    <img style="height: 60px !important;" src="{{ asset('logo-dark-2.png') }}" alt="esnaad-logo-footer" class="mb-5">
                                </span>

                                <p class="text-md text-black w-full text-justify mb-6">
                                    {{ __('
                                        With a commitment to excellence and a passion for innovation, ESNAAD has carved a distinctive niche in the real estate industry, setting new standards in luxury living, urban development, and sustainable design
                                    ') }}
                                </p>
                                <div class="flex my-8 w-full text-justify my-auto inline-block align-middle w-50">

                                    <div class="flex-1">
                                        <div class="w-8 bg-white rounded-3xl p-1">
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
                                        <div class="w-8 bg-white rounded-3xl p-1">
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
                                        <div class="w-8 bg-white rounded-3xl p-1">
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
                                        <div class="w-8 bg-white rounded-3xl p-1">
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
                                        <div class="w-8 bg-footer rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_WA`') }}" target="_blank" aria-label="esnaad-whatsapp">
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

                        <div class="mt-5">
                            <p class="text-md font-bold text-gray-800">
                                {{ __('Links') }}
                            </p>

                            <ul class="list-none footer-li" style="padding-left:    0px !important;">
                                <li class="text-md text-black my-2">
                                    <a href="{{ url('about-us') }}" aria-label="about-us">About ESNAAD</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ url('invest-in-dubai') }}" aria-label="invest-in-dubai">Why Invest In Dubai?</a>
                                </li>
                                {{-- <li class="text-md text-black my-2">
                                    <a href="{{ url('communities/') }}" aria-label="communities">Communities</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ url('projects/') }}" aria-label="projects">Projects</a>
                                </li> --}}
                                <li class="text-md text-black my-2">
                                    <a href="{{ url('agency-registration') }}" aria-label="broker-registration">Broker Registration</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="#careers" aria-label="broker-registration">Careers</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ url('contact') }}" aria-label="contact-us">Contact Us</a>
                                </li>

                            </ul>
                        </div>

                        <div class="mt-5">
                            <p class="text-md font-bold text-gray-800">
                                {{ __('Contacts') }}
                            </p>

                            <ul class="list-none footer-li leading-10" style="padding-left: 0px !important;">
                                <li class="text-md text-black my-2">
                                    <div  class="inline-flex items-center">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            fill="#000000" stroke="none">
                                            <path d="M2385 5109 c-559 -58 -1049 -402 -1308 -915 -43 -86 -111 -283 -131
                                            -384 -74 -364 -26 -736 135 -1064 24 -49 341 -553 704 -1120 490 -765 669
                                            -1037 694 -1053 46 -31 116 -31 162 0 24 16 206 291 691 1047 362 564 680
                                            1070 707 1125 188 383 221 827 90 1228 -84 257 -215 471 -405 661 -355 355
                                            -840 527 -1339 475z m360 -912 c269 -75 478 -288 546 -557 8 -31 14 -105 14
                                            -170 0 -123 -12 -188 -53 -285 -93 -219 -290 -387 -522 -446 -71 -18 -269 -18
                                            -340 0 -232 59 -429 227 -522 446 -41 97 -53 162 -53 285 0 123 12 188 53 285
                                            93 220 305 400 522 444 30 6 64 13 75 15 37 9 229 -3 280 -17z"/>
                                            <path d="M1244 1635 c-728 -203 -1062 -553 -886 -928 32 -70 124 -174 212
                                            -242 291 -223 840 -384 1525 -447 183 -17 747 -17 930 0 685 63 1234 224 1525
                                            447 88 68 180 172 212 242 177 378 -171 736 -906 933 -98 26 -121 29 -131 18
                                            -7 -7 -175 -269 -375 -583 -200 -314 -381 -592 -402 -620 -194 -251 -592 -250
                                            -779 2 -20 26 -204 310 -409 631 -204 320 -377 582 -384 581 -6 0 -66 -16
                                            -132 -34z"/>
                                            </g>
                                        </svg>
                                        &nbsp;
                                        Building No. 1 - City Walk, Dubai
                                    </div>
                                </li>
                                <li class="text-md text-black my-2">
                                    <div class="inline-flex items-center">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="13.000000pt" height="13.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            fill="#000000" stroke="none">
                                            <path d="M894 5105 c-124 -27 -147 -45 -470 -369 -282 -281 -304 -306 -337
                                            -376 -55 -116 -68 -178 -74 -342 -6 -165 7 -274 57 -464 301 -1143 1647 -2647
                                            2935 -3279 382 -187 671 -269 955 -270 174 0 262 18 383 77 78 38 98 57 379
                                            337 314 314 332 337 372 470 21 70 21 202 0 272 -36 120 -51 138 -448 537
                                            -209 211 -408 403 -441 427 -198 141 -453 121 -619 -48 -50 -51 -70 -81 -104
                                            -162 -24 -54 -55 -115 -70 -135 -96 -130 -280 -212 -437 -196 -234 25 -583
                                            237 -879 533 -358 358 -569 770 -518 1010 24 112 103 229 196 291 22 16 70 41
                                            106 56 104 44 129 59 178 101 166 145 202 417 81 610 -35 57 -725 754 -809
                                            819 -67 51 -155 91 -234 105 -75 14 -125 13 -202 -4z"/>
                                            </g>
                                        </svg>
                                        &nbsp;
                                        +971 4287 9506
                                    </div>
                                </li>
                                <li class="text-md text-black my-2">
                                    <div class="inline-flex items-center" >
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            fill="#000000" stroke="none">
                                            <path d="M366 4464 c-255 -62 -415 -322 -351 -569 20 -75 57 -143 107 -195 45
                                            -46 2175 -1471 2253 -1506 119 -54 260 -52 382 5 95 45 2182 1442 2235 1496
                                            249 254 113 686 -243 770 -94 22 -4291 21 -4383 -1z"/>
                                            <path d="M0 2236 c0 -810 3 -1181 11 -1218 37 -176 179 -320 360 -363 94 -22
                                            4267 -22 4372 0 182 38 329 184 366 363 13 61 16 2386 3 2380 -4 -1 -487 -323
                                            -1074 -715 -587 -392 -1099 -729 -1139 -748 -110 -56 -204 -77 -339 -77 -135
                                            0 -229 21 -339 77 -40 19 -552 356 -1139 748 -587 392 -1070 714 -1074 715 -5
                                            2 -8 -521 -8 -1162z"/>
                                            </g>
                                        </svg>
                                        &nbsp;
                                        <?php //EMAIL IS BELOW ENCODED OR IN OBFUSCATION ?>
                                        &#105;&#110;&#102;&#111;&#064;&#101;&#115;&#110;&#097;&#097;&#100;&#046;&#099;&#111;&#109;
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

                <div class="col-span-2 mx-auto">

                    <div class="flex-grow border-t border-gray-400 mt-4"></div>

                    <div class="flex justify-left my-2">
                        <div>
                            <p class="text-base text-black">
                                ESNAAD © {{ now()->year }} All Rights Reserved | Terms & Conditions | Privacy & Policy
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endtablet

    @desktop
        <div class="block py-12 sm:py-8  text-gray-50 bg-footer" id="footer" style="visibility:hidden">
            <div class="container mx-auto px-2 lg:px-8">

                <!-- Footer Links -->
                <div class="mx-auto mt-4 max-w-full lg:mt-0 lg:max-w-full">

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 reverse">

                        <div class="col-span-2">
                            <div class="mx-auto">
                                <span class="text-3xl text-gray-900 text-center mx-auto py-5" >
                                    <img style="height: 60px !important;" src="{{ asset('logo-dark-2.png') }}" alt="esnaad-logo-footer" class="mb-5">
                                </span>

                                <p class="text-md text-black text-justify mb-6 w-[80%]">
                                    {{ __('
                                        With a commitment to excellence and a passion for innovation, ESNAAD has carved a distinctive niche in the real estate industry, setting new standards in luxury living, urban development, and sustainable design
                                    ') }}
                                </p>
                                <div class="flex my-8 text-justify my-auto inline-block align-middle w-[50%]">

                                    <div class="flex-1">
                                        <div class="w-8 bg-footer rounded-3xl">
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
                                        <div class="w-8 bg-footer rounded-3xl p-1">
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
                                        <div class="w-8 bg-footer rounded-3xl p-1">
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
                                        <div class="w-8 bg-footer rounded-3xl p-1">
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
                                        <div class="w-8 bg-footer rounded-3xl p-1">
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

                        <div >
                            <p class="text-md font-bold text-black">
                                {{ __('Links') }}
                            </p>

                            <ul class="list-none footer-li" style="padding-left: 0px !important;">
                                <li class="text-md text-black my-2">
                                    <a href="{{ url('about-us') }}" aria-label="about-us">About ESNAAD</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ url('invest-in-dubai') }}" aria-label="invest-in-dubai">Why Invest In Dubai?</a>
                                </li>
                                {{-- <li class="text-md text-black my-2">
                                    <a href="{{ url('communities/') }}" aria-label="communities">Communities</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ url('projects/') }}" aria-label="projects">Projects</a>
                                </li> --}}
                                <li class="text-md text-black my-2" aria-label="">
                                    <a href="{{ url('agency-registration') }}" aria-label="broker-registration">Broker Registration</a>
                                </li>
                                <li class="text-md text-black my-2" aria-label="">
                                    <a href="#careers" aria-label="broker-registration">Careers</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ url('contact') }}" aria-label="contact-us">Contact Us</a>
                                </li>

                            </ul>
                        </div>

                        <div >
                            <p class="text-md font-bold text-black">
                                {{ __('Contacts') }}
                            </p>

                            <ul class="list-none footer-li leading-10" style="padding-left: 0px !important;">
                                <li class="text-md text-black my-2">
                                    <div  class="inline-flex items-center">
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                            width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                                            preserveAspectRatio="xMidYMid meet">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                            fill="#000000" stroke="none">
                                            <path d="M2385 5109 c-559 -58 -1049 -402 -1308 -915 -43 -86 -111 -283 -131
                                            -384 -74 -364 -26 -736 135 -1064 24 -49 341 -553 704 -1120 490 -765 669
                                            -1037 694 -1053 46 -31 116 -31 162 0 24 16 206 291 691 1047 362 564 680
                                            1070 707 1125 188 383 221 827 90 1228 -84 257 -215 471 -405 661 -355 355
                                            -840 527 -1339 475z m360 -912 c269 -75 478 -288 546 -557 8 -31 14 -105 14
                                            -170 0 -123 -12 -188 -53 -285 -93 -219 -290 -387 -522 -446 -71 -18 -269 -18
                                            -340 0 -232 59 -429 227 -522 446 -41 97 -53 162 -53 285 0 123 12 188 53 285
                                            93 220 305 400 522 444 30 6 64 13 75 15 37 9 229 -3 280 -17z"/>
                                            <path d="M1244 1635 c-728 -203 -1062 -553 -886 -928 32 -70 124 -174 212
                                            -242 291 -223 840 -384 1525 -447 183 -17 747 -17 930 0 685 63 1234 224 1525
                                            447 88 68 180 172 212 242 177 378 -171 736 -906 933 -98 26 -121 29 -131 18
                                            -7 -7 -175 -269 -375 -583 -200 -314 -381 -592 -402 -620 -194 -251 -592 -250
                                            -779 2 -20 26 -204 310 -409 631 -204 320 -377 582 -384 581 -6 0 -66 -16
                                            -132 -34z"/>
                                            </g>
                                        </svg>
                                        &nbsp;
                                        Building No. 1 - City Walk, Dubai
                                    </div>
                                </li>
                                <li class="text-md text-black my-2">
                                    <div class="inline-flex items-center">
                                        <a href="tel:{{ env('COMPANY_PHONE') }}" class="inline-flex items-center"></a>
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                width="13.000000pt" height="13.000000pt" viewBox="0 0 512.000000 512.000000"
                                                preserveAspectRatio="xMidYMid meet">

                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                fill="#000000" stroke="none">
                                                <path d="M894 5105 c-124 -27 -147 -45 -470 -369 -282 -281 -304 -306 -337
                                                -376 -55 -116 -68 -178 -74 -342 -6 -165 7 -274 57 -464 301 -1143 1647 -2647
                                                2935 -3279 382 -187 671 -269 955 -270 174 0 262 18 383 77 78 38 98 57 379
                                                337 314 314 332 337 372 470 21 70 21 202 0 272 -36 120 -51 138 -448 537
                                                -209 211 -408 403 -441 427 -198 141 -453 121 -619 -48 -50 -51 -70 -81 -104
                                                -162 -24 -54 -55 -115 -70 -135 -96 -130 -280 -212 -437 -196 -234 25 -583
                                                237 -879 533 -358 358 -569 770 -518 1010 24 112 103 229 196 291 22 16 70 41
                                                106 56 104 44 129 59 178 101 166 145 202 417 81 610 -35 57 -725 754 -809
                                                819 -67 51 -155 91 -234 105 -75 14 -125 13 -202 -4z"/>
                                                </g>
                                            </svg>
                                            &nbsp;
                                            +971 4 287 9506
                                        </a>
                                    </div>
                                </li>
                                <?php //EMAIL IS BELOW ENCODED OR IN OBFUSCATION ?>
                                <li class="text-md text-black my-2">
                                    <div class="inline-flex items-center" >
                                        <a href="mailto:{{env('COMPANY_EMAIL')}}" class="inline-flex items-center">
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                width="15.000000pt" height="15.000000pt" viewBox="0 0 512.000000 512.000000"
                                                preserveAspectRatio="xMidYMid meet">

                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                fill="#000000" stroke="none">
                                                <path d="M366 4464 c-255 -62 -415 -322 -351 -569 20 -75 57 -143 107 -195 45
                                                -46 2175 -1471 2253 -1506 119 -54 260 -52 382 5 95 45 2182 1442 2235 1496
                                                249 254 113 686 -243 770 -94 22 -4291 21 -4383 -1z"/>
                                                <path d="M0 2236 c0 -810 3 -1181 11 -1218 37 -176 179 -320 360 -363 94 -22
                                                4267 -22 4372 0 182 38 329 184 366 363 13 61 16 2386 3 2380 -4 -1 -487 -323
                                                -1074 -715 -587 -392 -1099 -729 -1139 -748 -110 -56 -204 -77 -339 -77 -135
                                                0 -229 21 -339 77 -40 19 -552 356 -1139 748 -587 392 -1070 714 -1074 715 -5
                                                2 -8 -521 -8 -1162z"/>
                                                </g>
                                            </svg>
                                            &nbsp;
                                            &#105;&#110;&#102;&#111;&#064;&#101;&#115;&#110;&#097;&#097;&#100;&#046;&#099;&#111;&#109;
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

                <div class="col-span-2 mx-auto">

                    <div class="flex-grow border-t border-gray-400 mt-4"></div>

                    <div class="flex justify-left my-2">
                        <div>
                            <p class="text-base text-black">
                                ESNAAD © {{ now()->year }} All Rights Reserved | <a href="{{ url('terms-and-conditions') }}" aria-label="terms-and-conditions" > Terms & Conditions</a> | <a href="{{ url('privacy-and-policy') }}" aria-label="privacy-and-policy" > Privacy & Policy </a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @enddesktop




    @mobile
        <div class="block py-8 text-gray-50 bg-footer" id="footer" style="visibility:hidden">
            <div class="container mx-auto px-4">

                <!-- Footer Links -->
                <div class="mx-auto max-w-full lg:mt-24 lg:max-w-full">

                    <div class="row ">

                        <div class="py-4">
                            <div class="mx-auto">
                                <span class="text-3xl text-gray-900 text-center mx-auto py-5" >
                                    <img style="height: 60px !important;" src="{{ asset('logo-dark-2.png') }}" alt="esnaad-logo-footer" class="mb-5">
                                </span>

                                <p class="text-md text-black text-left mb-6 w-full leading-6">
                                    With a commitment to excellence and a passion for innovation, ESNAAD has carved a distinctive niche in the real estate industry, setting new standards in luxury living, urban development, and sustainable design
                                </p>
                                <div class="flex justify-between my-8 text-justify my-auto inline-block align-middle ">

                                    <div class="flex-1">
                                        <div class="w-8  rounded-3xl p-0">
                                                <a href="{{ env('COMPANY_FB') }}" target="_blank" aria-label="esnaad-facebook">
                                                <svg  id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M288,192v-38.1c0-17.2,3.8-25.9,30.5-25.9H352V64h-55.9c-68.5,0-91.1,31.4-91.1,85.3V192h-45v64h45v192h83V256h56.4l7.6-64  H288z M330.2,240h-41.1H272v15.5V432h-51V255.5V240h-14.9H176v-32h30.1H221v-16.5v-42.2c0-24.5,5.4-41.2,15.5-51.8  C247.7,85.5,267.6,80,296.1,80H336v32h-17.5c-12,0-27.5,1.1-37.1,11.7c-8.1,9-9.4,20.1-9.4,30.1v37.6V208h17.1H334L330.2,240z"/></svg>
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
                                        <div class="w-8 bg-footer rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_WA') }}"  target="_blank" aria-label="esnaad-whatsapp">
                                                <img
                                                    src="{{ asset('front/icons/wa.png') }}"
                                                    class="w-fit rounded"
                                                    alt="social-media-wa"
                                                >
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class="w-8 bg-footer rounded-3xl p-1">
                                            <a href="mailto:{{ env("COMPANY_EMAIL") }}">
                                                <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="8-Email" id="_8-Email"><path d="M45,7H3a3,3,0,0,0-3,3V38a3,3,0,0,0,3,3H45a3,3,0,0,0,3-3V10A3,3,0,0,0,45,7Zm-.64,2L24,24.74,3.64,9ZM2,37.59V10.26L17.41,22.17ZM3.41,39,19,23.41l4.38,3.39a1,1,0,0,0,1.22,0L29,23.41,44.59,39ZM46,37.59,30.59,22.17,46,10.26Z"/></g></svg>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class="w-8 bg-footer rounded-3xl p-1">
                                            <a href="tel:{{ env('COMPANY_PHONE') }}">
                                                <svg enable-background="new 0 0 50 50" height="24" id="Layer_1" version="1.1" viewBox="0 0 50 50" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><path d="M30.217,35.252c0,0,4.049-2.318,5.109-2.875  c1.057-0.559,2.152-0.7,2.817-0.294c1.007,0.616,9.463,6.241,10.175,6.739c0.712,0.499,1.055,1.924,0.076,3.32  c-0.975,1.396-5.473,6.916-7.379,6.857c-1.909-0.062-9.846-0.236-24.813-15.207C1.238,18.826,1.061,10.887,1,8.978  C0.939,7.07,6.459,2.571,7.855,1.595c1.398-0.975,2.825-0.608,3.321,0.078c0.564,0.781,6.124,9.21,6.736,10.176  c0.419,0.66,0.265,1.761-0.294,2.819c-0.556,1.06-2.874,5.109-2.874,5.109s1.634,2.787,7.16,8.312  C27.431,33.615,30.217,35.252,30.217,35.252z" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="2"/></svg> 
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="group flex flex-col gap-2 rounded-lg text-black " tabindex="1">
                        <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                            <span> Links </span>
                            <img
                                src="https://demo.esnaad.com/public/home/down-arrow.png"
                                class="h-full w-8 transition-all duration-500 group-focus:-rotate-180"
                            />
                        </div>
                        <div class="hidden h-auto max-h-0 items-center opacity-0 transition-all group-focus:block group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                            <ul class="list-none footer-li capitalize leading-8" style="padding-left: 0px !important;">
                                <li class="text-md text-black my-3">
                                    <a href="{{ url('about-us') }}" aria-label="about-us">About ESNAAD</a>
                                </li>
                                <li class="text-md text-black my-3">
                                    <a href="{{ url('invest-in-dubai') }}" aria-label="invest-in-dubai">Why Invest In Dubai?</a>
                                </li>
                                {{-- <li class="text-md text-black my-3">
                                    <a href="{{ url('communities/') }}" aria-label="communities">Communities</a>
                                </li>
                                <li class="text-md text-black my-3">
                                    <a href="{{ url('projects/') }}" aria-label="projects">Projects</a>
                                </li> --}}
                                <li class="text-md text-black my-3">
                                    <a href="{{ url('broker-registration') }}" aria-label="broker-registration">Broker Registration</a>
                                </li>
                                <li class="text-md text-black my-3">
                                    <a href="#careers" aria-label="broker-registration">Careers</a>
                                </li>
                                <li class="text-md text-black my-3">
                                    <a href="{{ url('contact') }}" aria-label="contact-us">Contact Us</a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-span-2 mx-auto my-2">

                    {{-- <div class="flex-grow border-t border-gray-950 "></div> --}}

                    <div class="flex justify-center mt  mt-6">
                        <div>
                            <p class="text-base font-thin text-black leading-8">
                                ESNAAD © {{ now()->year }} All Rights Reserved <br>
                                <a href="{{ url('terms-and-conditions') }}" aria-label="terms-and-conditions">Terms & Conditions</a>
                                <a href="{{ url('privacy-and-policy') }}" aria-label="privacy-and-policy">| Privacy & Policy</a>
                            </p>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endmobile




    
    <script>
        setTimeout(function(){
            if(document.getElementById('footer')) {
                document.getElementById('footer').style.visibility = "visible";
            }
            if(document.getElementById('footer_form')) {
                document.getElementById('footer_form').style.visibility = "visible";
            }
        },1000);
    </script>

    @yield('luxe_asset_js')

    @yield('footer_js')

</body>
