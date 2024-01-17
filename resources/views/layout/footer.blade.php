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

                    <div class="grid grid-cols-2 gap-4 reverse"  @if($langSeg == 'ar') dir="RTL" @endif>

                        <div class="col-span-2">
                            <div class="mx-auto">
                                <span class="text-3xl text-gray-900 text-center mx-auto py-5" >
                                    <img style="height: 60px !important;" src="{{ asset('logo-dark-2.png') }}" alt="esnaad-logo-footer" class="mb-5">
                                </span>

                                <p class="text-md text-black w-full text-justify mb-6">
                                    {{ __('frontend.footerEsnaadP') }}
                                </p>
                                <div class="flex my-8 w-full text-justify my-auto inline-block align-middle w-50">

                                    <div class="flex-1">
                                        <div class="w-8 bg-white rounded-3xl p-1">
                                                <a href="{{ env('COMPANY_FB') }}" target="_blank" aria-label="esnaad-facebook" rel="canonical">
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
                                            <a href="{{ env('COMPANY_IG') }}" target="_blank" aria-label="esnaad-instagram" rel="canonical">
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
                                            <a href="{{ env('COMPANY_TW') }}" target="_blank" aria-label="esnaad-x" rel="canonical">
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
                                            <a href="{{ env('COMPANY_IN') }}" target="_blank" aria-label="esnaad-linkedin" rel="canonical">
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
                                            <a href="{{ env('COMPANY_WA`') }}" target="_blank" aria-label="esnaad-whatsapp" rel="canonical">
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

                        <div class="mt-5"  @if($langSeg == 'ar') dir="RTL" @endif>
                            <p class="text-md font-bold text-gray-800">
                                {{ __('frontend.footerLinks') }}
                            </p>

                            <ul class="list-none footer-li" style="padding-left:    0px !important;">
                                <li class="text-md text-black my-2">
                                    <a href="{{ URL($langSeg.'/about-us') }}" aria-label="about-us" rel="canonical">{{ __('frontend.footerLinksAboutEsnaad') }}</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ URL($langSeg.'/invest-in-dubai') }}" aria-label="invest-in-dubai" rel="canonical">{{ __('frontend.footerLinksWhyInvest') }}</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ URL($langSeg.'/agency-registration') }}" aria-label="broker-registration" rel="canonical">{{ __('frontend.footerLinksBrokerReg') }}</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ URL($langSeg.'/careers')}}" aria-label="broker-registration" rel="canonical">{{ __('frontend.footerLinksCareers') }}</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ URL($langSeg.'/contact') }}" aria-label="contact-us" rel="canonical">{{ __('frontend.footerLinksContact') }}</a>
                                </li>

                            </ul>
                        </div>

                        <div class="mt-5"  @if($langSeg == 'ar') dir="RTL" @endif>
                            <p class="text-md font-bold text-gray-800">
                                {{ __('frontend.footerContacts') }}
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
                                        {{ __('frontend.footerAddress') }}
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
                                        {{ __('frontend.footerContacts') }}
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

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 reverse"  @if($langSeg == 'ar') dir="RTL" @endif>

                        <div class="col-span-2" @if($langSeg == 'ar') dir="RTL" @endif>
                            <div class="mx-auto">
                                <span class="text-3xl text-gray-900 text-center mx-auto py-5" >
                                    <img style="height: 60px !important;" src="{{ asset('logo-dark-2.png') }}" alt="esnaad-logo-footer" class="mb-5">
                                </span>

                                <p class="text-md text-black text-justify mb-6 w-[80%]">
                                    {{ __('frontend.footerEsnaadP') }}
                                </p>
                                <div class="flex my-8 text-justify my-auto inline-block align-middle w-[50%]">

                                    <div class="flex-1">
                                        <div class="w-8 bg-footer rounded-3xl">
                                                <a href="{{ env('COMPANY_FB') }}" target="_blank" aria-label="esnaad-facebook" rel="canonical">
                                                    <svg  id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M288,192v-38.1c0-17.2,3.8-25.9,30.5-25.9H352V64h-55.9c-68.5,0-91.1,31.4-91.1,85.3V192h-45v64h45v192h83V256h56.4l7.6-64  H288z M330.2,240h-41.1H272v15.5V432h-51V255.5V240h-14.9H176v-32h30.1H221v-16.5v-42.2c0-24.5,5.4-41.2,15.5-51.8  C247.7,85.5,267.6,80,296.1,80H336v32h-17.5c-12,0-27.5,1.1-37.1,11.7c-8.1,9-9.4,20.1-9.4,30.1v37.6V208h17.1H334L330.2,240z"/></svg>
                                                </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class="w-8 bg-footer rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_IG') }}" target="_blank" aria-label="esnaad-instagram" rel="canonical">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="instagram"><g fill="none" stroke="#000" stroke-miterlimit="10"><path d="M11.5 15.5h-7a4 4 0 0 1-4-4v-7a4 4 0 0 1 4-4h7a4 4 0 0 1 4 4v7a4 4 0 0 1-4 4z"></path><circle cx="8" cy="8" r="3.5"></circle><circle cx="12.5" cy="3.5" r=".5"></circle></g></svg>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class="w-8 bg-footer rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_TW') }}" target="_blank" aria-label="esnaad-x" rel="canonical">
                                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 1668.56 1221.19" height="26px" viewBox="0 0 1668.56 1221.19" id="twitter-x"><path d="M283.94,167.31l386.39,516.64L281.5,1104h87.51l340.42-367.76L984.48,1104h297.8L874.15,558.3l361.92-390.99
		                                            h-87.51l-313.51,338.7l-253.31-338.7H283.94z M412.63,231.77h136.81l604.13,807.76h-136.81L412.63,231.77z" transform="translate(52.39 -25.059)"></path></svg>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class="w-8 bg-footer rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_IN') }}" target="_blank" aria-label="esnaad-linkedin" rel="canonical">
                                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" height="27px" id="linkedin"><path d="M7.5006104,9C7.5003662,9,7.5001831,9,7.5,9h-4C3.223999,8.9998169,3.0001831,9.2234497,3,9.4993896C3,9.4996338,3,9.4998169,3,9.5v12c-0.0001831,0.276001,0.2234497,0.4998169,0.4993896,0.5C3.4996338,22,3.4998169,22,3.5,22h4c0.276001,0.0001831,0.4998169-0.2234497,0.5-0.4994507C8,21.5003662,8,21.5001831,8,21.5v-12C8.0001831,9.223999,7.7765503,9.0001831,7.5006104,9z M7,21H4V10h3V21z M18,9c-1.0848389,0.000061-2.1393433,0.3580933-3,1.0185547V9.5c0.0001831-0.276001-0.2234497-0.4998169-0.4993896-0.5C14.5003662,9,14.5001831,9,14.5,9h-4c-0.276001-0.0001831-0.4998169,0.2234497-0.5,0.4993896C10,9.4996338,10,9.4998169,10,9.5v12c-0.0001831,0.276001,0.2234497,0.4998169,0.4994507,0.5c0.0001831,0,0.0003662,0,0.0005493,0h4c0.276001,0.0001831,0.4998169-0.2234497,0.5-0.4994507c0-0.0001831,0-0.0003662,0-0.0005493V16c0-0.8284302,0.6715698-1.5,1.5-1.5S18,15.1715698,18,16v5.5c-0.0001831,0.276001,0.2234497,0.4998169,0.4994507,0.5c0.0001831,0,0.0003662,0,0.0005493,0h4c0.276001,0.0001831,0.4998169-0.2234497,0.5-0.4994507c0-0.0001831,0-0.0003662,0-0.0005493V14C22.9967651,11.2399292,20.7600708,9.0032349,18,9z M22,21h-3v-5c0-1.3807373-1.1192627-2.5-2.5-2.5S14,14.6192627,14,16v5h-3V10h3v1.203125c0,0.2124634,0.1343994,0.4016724,0.335022,0.4716797c0.2001343,0.0721436,0.4240112,0.0079956,0.5556641-0.1591797c1.3625488-1.7268066,3.8669434-2.0220337,5.59375-0.6594238C21.4462891,11.6152344,22.0053101,12.7747192,22,14V21z M5.867981,2.0018311C5.7503662,1.9935913,5.6323242,1.992981,5.5146484,2C4.0053711,1.8969116,2.6983032,3.0368652,2.5952148,4.5461426c-0.0041504,0.06073-0.0062256,0.121521-0.0063477,0.182373c-0.0130005,1.49646,1.1895752,2.7200928,2.6860352,2.7330933c0.0610962,0.0005493,0.1221313-0.0010376,0.1831055-0.0046387h0.0283203c1.5064087,0.1054077,2.8129883-1.0303345,2.918396-2.5367432S7.3743896,2.1072388,5.867981,2.0018311z M5.8334351,6.4598389C5.7179565,6.470459,5.6016235,6.4695435,5.4863281,6.4569702H5.4580078C4.5018921,6.5304565,3.6672974,5.8150024,3.593811,4.8588867C3.5203247,3.902832,4.2357788,3.0681763,5.1918945,2.9946899C5.2994385,2.9864502,5.4074707,2.9882202,5.5146484,3C6.4700317,2.9119873,7.315918,3.6151123,7.4039917,4.5704956C7.4920044,5.5259399,6.7888794,6.3718262,5.8334351,6.4598389z"></path></svg>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class="w-8 bg-footer rounded-3xl p-1">
                                            <a href="https://wa.link/etkc3f" target="_blank" aria-label="esnaad-whatsapp" rel="canonical">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="whatsapp"><g fill="none" stroke="#000" stroke-miterlimit="10"><path d="M8.002.5h-.004C3.863.5.5 3.864.5 8c0 1.64.529 3.161 1.428 4.396l-.935 2.787 2.883-.921A7.448 7.448 0 0 0 8.002 15.5c4.135 0 7.498-3.364 7.498-7.5S12.137.5 8.002.5z"></path><path d="M12.175 10.931c-.172.484-.858.884-1.405 1.001-.374.079-.862.142-2.507-.534-2.103-.863-3.457-2.982-3.562-3.119-.1-.138-.849-1.122-.849-2.139 0-1.017.522-1.514.732-1.726.172-.175.458-.254.732-.254.088 0 .168.004.24.008.21.008.315.021.454.35.172.413.593 1.43.643 1.534.05.104.101.246.029.384-.067.142-.126.204-.231.325-.105.121-.206.213-.311.342-.097.113-.206.234-.084.442.122.204.542.884 1.161 1.43.799.705 1.447.93 1.678 1.026.172.071.378.054.505-.079.16-.171.358-.454.559-.734.143-.2.324-.225.513-.154.193.067 1.215.567 1.426.671.21.104.349.154.4.242.049.087.049.5-.123.984z"></path></g></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div @if($langSeg == 'ar') dir="RTL" @endif>
                            <p class="text-md font-bold text-black">
                                {{ __('frontend.footerLinks') }}
                            </p>

                            <ul class="list-none footer-li" style="padding-left: 0px !important;">
                                <li class="text-md text-black my-2">
                                    <a href="{{ URL($langSeg.'/about-us') }}" aria-label="about-us" rel="canonical">{{ __('frontend.footerLinksAboutEsnaad') }}</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ URL($langSeg.'/invest-in-dubai') }}" aria-label="invest-in-dubai" rel="canonical">{{ __('frontend.footerLinksWhyInvest') }}</a>
                                </li>
                                <li class="text-md text-black my-2" aria-label="">
                                    <a href="{{ URL($langSeg.'/agency-registration') }}" aria-label="broker-registration" rel="canonical">{{ __('frontend.footerLinksBrokerReg') }}</a>
                                </li>
                                <li class="text-md text-black my-2" aria-label="">
                                    <a href="{{ URL($langSeg.'/careers')}}" aria-label="career-registration" rel="canonical">{{ __('frontend.footerLinksCareers') }}</a>
                                </li>
                                <li class="text-md text-black my-2">
                                    <a href="{{ URL($langSeg.'/contact') }}" aria-label="contact-us" rel="canonical">{{ __('frontend.footerLinksContact') }}</a>
                                </li>

                            </ul>
                        </div>

                        <div @if($langSeg == 'ar') dir="RTL" @endif>
                            <p class="text-md font-bold text-black">
                                {{ __('frontend.footerContacts') }}
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
                                        {{ __('frontend.footerAddress') }}
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
                                            <span style="direction: ltr !important;">
                                                {{ __('frontend.footerContact') }}                                            
                                            </span>
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
                                ESNAAD © {{ now()->year }} All Rights Reserved | <a href="{{ URL($langSeg.'/terms-and-conditions') }}" aria-label="terms-and-conditions" > Terms & Conditions</a> | <a href="{{ URL($langSeg.'/privacy-and-policy') }}" aria-label="privacy-and-policy" > Privacy & Policy </a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @enddesktop

    @mobile
        <div class="block py-8 text-gray-50 bg-footer" id="footer" style="visibility:hidden">
            <div class="container mx-auto px-4"  @if($langSeg == 'ar') dir="RTL" @endif>

                <!-- Footer Links -->
                <div class="mx-auto max-w-full lg:mt-24 lg:max-w-full">

                    <div class="row "  @if($langSeg == 'ar') dir="RTL" @endif>

                        <div class="py-4">
                            <div class="mx-auto">
                                <span class="text-3xl text-gray-900 text-center mx-auto py-5" >
                                    <img style="height: 60px !important;" src="{{ asset('logo-dark-2.png') }}" alt="esnaad-logo-footer" class="mb-5">
                                </span>

                                <p class="text-md text-black text-justify mb-6 w-full leading-6" >
                                    {{ __('frontend.footerEsnaadP') }}
                                </p>
                                <div class="flex justify-between my-8 text-justify my-auto inline-block align-middle ">

                                    <div class="flex-1">
                                        <div class="w-8  rounded-3xl p-0">
                                            <a href="{{ env('COMPANY_FB') }}" target="_blank" aria-label="esnaad-facebook" rel="canonical">
                                                <svg  id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M288,192v-38.1c0-17.2,3.8-25.9,30.5-25.9H352V64h-55.9c-68.5,0-91.1,31.4-91.1,85.3V192h-45v64h45v192h83V256h56.4l7.6-64  H288z M330.2,240h-41.1H272v15.5V432h-51V255.5V240h-14.9H176v-32h30.1H221v-16.5v-42.2c0-24.5,5.4-41.2,15.5-51.8  C247.7,85.5,267.6,80,296.1,80H336v32h-17.5c-12,0-27.5,1.1-37.1,11.7c-8.1,9-9.4,20.1-9.4,30.1v37.6V208h17.1H334L330.2,240z"/></svg>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        <div class="w-8  rounded-3xl p-1">
                                            <a href="{{ env('COMPANY_IG') }}" target="_blank" aria-label="esnaad-instagram" rel="canonical">
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
                                            <a href="{{ env('COMPANY_TW') }}" target="_blank" aria-label="esnaad-x" rel="canonical">
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
                                            <a href="{{ env('COMPANY_IN') }}" target="_blank" aria-label="esnaad-linkedin" rel="canonical">
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
                                            <a href="{{ env('COMPANY_WA') }}"  target="_blank" aria-label="esnaad-whatsapp" rel="canonical">
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
                            <span> {{ __('frontend.footerLinks') }} </span>
                            <img
                                src="https://demo.esnaad.com/public/home/down-arrow.png"
                                class="h-full w-8 transition-all duration-500 group-focus:-rotate-180"
                            />
                        </div>
                        <div class="hidden h-auto max-h-0 items-center opacity-0 transition-all group-focus:block group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
                            <ul class="list-none footer-li capitalize leading-8" style="padding-left: 0px !important;">
                                <li class="text-md text-black my-3">
                                    <a href="{{ URL($langSeg.'/about-us') }}" aria-label="about-us" rel="canonical">{{ __('frontend.footerLinksAboutEsnaad') }}</a>
                                </li>
                                <li class="text-md text-black my-3">
                                    <a href="{{ URL($langSeg.'/invest-in-dubai') }}" aria-label="invest-in-dubai" rel="canonical">{{ __('frontend.footerLinksWhyInvest') }}</a>
                                </li>
                                <li class="text-md text-black my-3">
                                    <a href="{{ URL($langSeg.'/broker-registration') }}" aria-label="broker-registration" rel="canonical">{{ __('frontend.footerLinksBrokerReg') }}</a>
                                </li>
                                <li class="text-md text-black my-3">
                                    <a href="{{ URL($langSeg.'/careers')}}" aria-label="broker-registration" rel="canonical">{{ __('frontend.footerLinksCareers') }}</a>
                                </li>
                                <li class="text-md text-black my-3">
                                    <a href="{{ URL($langSeg.'/contact') }}" aria-label="contact-us" rel="canonical">{{ __('frontend.footerLinksContact') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 mx-auto my-2">
                    <div class="flex justify-center mt  mt-6">
                        <div>
                            <p class="text-base font-thin text-black leading-8">
                                ESNAAD © {{ now()->year }} All Rights Reserved <br>
                                <a href="{{ URL($langSeg.'/terms-and-conditions') }}" aria-label="terms-and-conditions" rel="canonical">Terms & Conditions</a>
                                <a href="{{ URL($langSeg.'/privacy-and-policy') }}" aria-label="privacy-and-policy" rel="canonical">| Privacy & Policy</a>
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
