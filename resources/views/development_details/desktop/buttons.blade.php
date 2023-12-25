<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


<style>
    .iti {
        width: 100% !important;
    }
    .iti__flag-container{
        overflow: visible;
    }
</style>


<div class="sm:container sm:mx-auto mx-0 px-0 my-20 sm:my-4 mx-auto">
    <div class="flex justify-left ...">
        <div class="mr-4">
            <button onclick="openModal('mymodalcentered-community-register')"  class="lg:w-75 text-xl text-white font-bold hover:text-black px-2 lg:py-4 bg-black hover:bg-transparent border border-black hover:border-black rounded-0" type="button">
                Register Your Interest
            </button>
        </div>
        <div class="mx-4">
            <button onclick="openModal('mymodalcentered-community-share')"  class="text-center align-middle rounded-0 cursor-pointer">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="30.000000pt" height="30.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M2495 4725 c-17 -9 -200 -185 -407 -393 -404 -405 -410 -412 -394
                    -496 8 -41 46 -90 87 -111 36 -19 102 -19 137 -1 15 8 128 116 252 240 124
                    124 228 226 232 226 5 0 8 -485 8 -1077 0 -1050 1 -1079 20 -1107 27 -41 87
                    -76 133 -76 52 0 111 32 138 77 l24 38 5 1073 5 1072 225 -226 c124 -124 237
                    -232 252 -240 15 -8 45 -14 68 -14 103 0 175 92 155 198 -6 32 -56 86 -388
                    419 -210 211 -395 389 -413 398 -41 19 -100 19 -139 0z"/>
                    <path d="M1243 3416 c-170 -42 -318 -192 -353 -359 -7 -36 -10 -398 -8 -1182
                    l3 -1130 23 -57 c50 -124 156 -230 281 -280 l56 -23 1315 0 1315 0 57 23 c124
                    50 230 156 280 281 l23 56 3 1134 c3 1250 5 1196 -60 1309 -64 113 -190 205
                    -316 231 -31 6 -163 11 -314 11 -260 0 -262 0 -303 -25 -56 -32 -79 -80 -73
                    -152 5 -55 32 -97 83 -126 13 -8 112 -14 292 -17 302 -6 300 -5 351 -80 l22
                    -33 0 -1090 0 -1089 -21 -38 c-12 -21 -38 -47 -59 -59 l-38 -21 -1244 0 -1245
                    0 -34 23 c-18 12 -44 38 -56 56 l-23 34 0 1092 0 1092 23 33 c50 75 48 74 350
                    80 180 3 279 9 292 17 11 6 34 25 50 43 27 28 30 38 30 98 0 77 -17 107 -76
                    141 -35 20 -51 21 -305 20 -179 0 -286 -5 -321 -13z"/>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</div>




<dialog id="mymodalcentered-community-share" class="bg-transparent  relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-full sm:w-1/4 relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-semibold text-xl text-black">Share</div>
                    <svg onclick="modalClose('mymodalcentered-community-share')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <div class="flex flex-col items-start w-full"  >
                    <div class="px-7  w-full" style="max-height: 40vh;">

                        <div class="mb-6">
                            Living in 
                        </div>

                        <div class="mb-6">
                            <div class="flex my-8 w-full text-center mx-auto">

                                
                
                                <div class="flex-1 mx-auto my-auto">
                                    <div class="w-10 xl:w-10 bg-white rounded-3xl p-1 mx-auto my-auto">
                                        <a href="whatsapp://send?text={{$actual_link}}" data-action="share/whatsapp/share" aria-label="whatsapp-share-community">
                                            <img
                                                src="{{ asset('front/icons/wa.svg')}}"
                                                class="w-fit rounded h-full"
                                                alt="social-media-ig"
                                                height="auto"
                                                width="auto"
                                            >
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 mx-auto">
                                    <div class="w-9 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fedgerealty.ae%2F" target="_blank" ria-label="facebook-share-community">
                                            <img
                                                src="{{ asset('front/icons/fb.png')}}"
                                                class="w-fit rounded"
                                                alt="social-media-fb"
                                            >
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 mx-auto">
                                    <div class="w-9 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{$actual_link}}" aria-label="community-linkedin-share">
                                            <img
                                                src="{{ asset('front/icons/in.png')}}"
                                                class="w-fit rounded"
                                                alt="social-media-in"
                                            >
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 mx-auto">
                                    <div class="w-9 xl:w-10 bg-white rounded-3xl p-1 mx-auto">
                                        <a href="https://twitter.com/intent/tweet?url={{$actual_link}}" aria-label="twitter-X-share-community">
                                            <img
                                                src="{{ asset('front/icons/x.png')}}"
                                                class="w-fit rounded"
                                                alt="social-media-tw"
                                            >
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="p-7 flex justify-end items-center w-full">
                        <div class="w-full font-base text-base border border-gray-500 rounded-0 py-2 px-4 mr-2">
                            {{{$actual_link}}}
                        </div>
                        <button type="button" onclick="modalClose('mymodalcentered-community-share')" class="bg-transparent hover:bg-gray-500 text-gray-800 font-semibold hover:text-white py-2 px-3 border border-gray-500 hover:border-transparent rounded-0"   >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</dialog>




<dialog id="mymodalcentered-community-register" class="bg-transparent relative w-screen h-screen">
    <div class="p-7 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-1/4 relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-7 flex items-stretch w-full">
                    <div class="font-thin text-xl text-gray-900">Register Your Interest</div>
                    <svg onclick="modalClose('mymodalcentered-community-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <form class="flex flex-col items-start w-full"  method="post" action="{{ url('/project-detail-inquiry') }}">
                    @csrf
                    <div class="px-7  w-full" style="max-height: 40vh;">

                        <input type="hidden" id="community" name="community_id" value="fdsaf">
                        <input type="hidden" id="url" name="url" value="{{$actual_link}}">

                        <div class="mb-6">
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Your Name"  required>
                        </div>

                        <div class="mb-6">
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Email Address" required>
                        </div>

                        <div class="mb-6">

                            <table class="w-full">
                                <tr>
                                    <td>
                                        <select name="country_code"  class="w-full" >
                                            <option data-countryCode="AE" value="971" Selected>United Arab Emirates (+971)</option>
                                            <optgroup label="Other countries">
                                                <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                                <option data-countryCode="AO" value="244">Angola (+244)</option>
                                                <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                                <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                                <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                                <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                                <option data-countryCode="AU" value="61">Australia (+61)</option>
                                                <option data-countryCode="AT" value="43">Austria (+43)</option>
                                                <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                                <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                                <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                                <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                                <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                                <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                                <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                                <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                                <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                <option data-countryCode="CL" value="56">Chile (+56)</option>
                                                <option data-countryCode="CN" value="86">China (+86)</option>
                                                <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                                <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                                <option data-countryCode="CG" value="242">Congo (+242)</option>
                                                <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                                <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                                <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                                <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                                <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                                <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                <option data-countryCode="FI" value="358">Finland (+358)</option>
                                                <option data-countryCode="FR" value="33">France (+33)</option>
                                                <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                                <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                                <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                <option data-countryCode="DE" value="49">Germany (+49)</option>
                                                <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                                <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                <option data-countryCode="GR" value="30">Greece (+30)</option>
                                                <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                                <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                <option data-countryCode="GU" value="671">Guam (+671)</option>
                                                <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                                <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                                <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                                <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                                <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                                <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                                <option data-countryCode="IN" value="91">India (+91)</option>
                                                <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                                <option data-countryCode="IL" value="972">Israel (+972)</option>
                                                <option data-countryCode="IT" value="39">Italy (+39)</option>
                                                <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                <option data-countryCode="JP" value="81">Japan (+81)</option>
                                                <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                                <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                                <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                                <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                                <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                <option data-countryCode="LA" value="856">Laos (+856)</option>
                                                <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                                <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                                <option data-countryCode="LY" value="218">Libya (+218)</option>
                                                <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                <option data-countryCode="MO" value="853">Macao (+853)</option>
                                                <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                                <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                                <option data-countryCode="ML" value="223">Mali (+223)</option>
                                                <option data-countryCode="MT" value="356">Malta (+356)</option>
                                                <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                                <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                                <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                                <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                                <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                                <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                                <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                                <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                                <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                <option data-countryCode="NE" value="227">Niger (+227)</option>
                                                <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                <option data-countryCode="NU" value="683">Niue (+683)</option>
                                                <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                                <option data-countryCode="NO" value="47">Norway (+47)</option>
                                                <option data-countryCode="OM" value="968">Oman (+968)</option>
                                                <option data-countryCode="PW" value="680">Palau (+680)</option>
                                                <option data-countryCode="PA" value="507">Panama (+507)</option>
                                                <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                                <option data-countryCode="PL" value="48">Poland (+48)</option>
                                                <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                                <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                                <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                                <option data-countryCode="RO" value="40">Romania (+40)</option>
                                                <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                                <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                                <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                                <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                                <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                                <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                                <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                <option data-countryCode="ES" value="34">Spain (+34)</option>
                                                <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                                <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                                <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                                <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                                <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                <option data-countryCode="SI" value="963">Syria (+963)</option>
                                                <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                                <option data-countryCode="TG" value="228">Togo (+228)</option>
                                                <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                                <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                                <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                                <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                                <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                                <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                                <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                                <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                                <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                            </optgroup>
                                        </select>
                                    </td>
                                <td><input type="text" name="phone" id="phone" placeholder="ex: 501234567" class="border w-full" required></td>
                                    
                                </tr>
                            </table>
                        </div>

                        <div>
                            <button type="submit" class="bg-black w-[100%] hover:bg-white border border-black text-white hover:text-black font-bold py-2 rounded-0">
                                Register Your Interest
                            </button>
                        </div>
                    </div>

                    <div class="p-7 flex justify-end items-center w-full">
                        
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</dialog>

