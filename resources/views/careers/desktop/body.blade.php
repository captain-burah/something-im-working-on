<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto " id="career-registration-form">
    <div class="md:w-[80%] xl:w-[50%] mx-auto my-8">
        <form id="formView">
            
            <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
            
            <h3 class="text-2xl text-gray-900 font-semibold"> </h3>
            
            <p class="text-black mb-4">
                Ready to take the next step in your career? 
                Submit your application now! We eagerly anticipate the addition of motivated and skilled 
                individuals to the ESNAAD community
            </p>

            <div id="status"></div>

            <input type="hidden" id="4srMa62q63awVETd4mo9" name="4srMa62q63awVETd4mo9">

            @include('careers.desktop.authorizedPerson')

            <button type="button" id="formViewSubmit"  class="w-full mt-8 bg-black hover:bg-white border hover:border-gray-500 text-white hover:text-black font-semibold p-3">Register Now</button>

        </form>

    </div>
</div>

<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto hidden " id="verification">
    <div class="md:w-[80%] xl:w-[50%] mx-auto my-8">
        <!-- component -->
        <!-- component -->
        <div class="flex  items-center justify-center ">
            <div class="rounded-lg  px-16 py-14">
                {{-- <h3 class="my-2 text-center text-3xl font-semibold text-gray-700">Verification!</h3> --}}
                <p class="w-[100%] text-center font-normal text-gray-600">
                    <form id="verificationForm">
                        <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
                        <h3 class="text-2xl text-gray-900 font-semibold text-center">Enter Verification Code</h3>
                        <table class="w-full">
                            <tbody>
                                <caption class="my-4">
                                    We've sent a code to <span id="email_placeholder"></span>
                                </caption>
                                <tr class="mx-auto text-center">
                                    <td class="mx-auto text-center"><input type="text" class="text-center mx-auto" name="applicant_code" id="applicant_code" placeholder="xxxx - xxxx - xxxx - xxxx" class=" w-full" ></td>
                                </tr>
                                <tr class="mx-auto text-center hidden">
                                    <td class="mx-auto text-center text-red-900"><small>Verification Failed! Enter the code sent to your email</small></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button"  id="verificationFormSubmit" class="w-full mt-8 bg-black hover:bg-white border hover:border-gray-500 text-white hover:text-black font-semibold p-3">Verify</button>
                        <button type="button" id="ResendVerificationCode" class="w-full mt-4 text-black font-thin">Didn't get a code? <span class="font-bold">Click to resend</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto hidden " id="thankyou">
    <div class="md:w-[80%] xl:w-[50%] mx-auto my-8">
        <!-- component -->
        <!-- component -->
        <div class="flex  items-center justify-center ">
            <div class="rounded-lg  px-16 py-14">
                {{-- <h3 class="my-2 text-center text-3xl font-semibold text-gray-700">Verification!</h3> --}}
                <p class="w-[100%] text-center font-normal text-gray-600">
                    <div>
                        <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
                        <h3 class="text-2xl text-gray-900 font-semibold text-center">Thank You!</h3>
                        <table class="w-full">
                            <tbody>
                                <caption class="my-4">
                                    Your submission has been recorded
                                </caption>
                            </tbody>
                        </table>                    
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>




@section('intel-input')

    {{-- FORM SUBMIT --}}
    <script type="application/javascript">
        $(document).ready(function () {           

            var career_verifiying = sessionStorage.getItem('career_verifiying');
            var career_form_verification_code;

            if(career_verifiying) {
                /** SWAP THE CONTENTS*/
                var verificationView = document.getElementById("career-registration-form");
                verificationView.classList.add("hidden");

                var formView = document.getElementById("verification");
                formView.classList.remove("hidden");
            }

            $('#formViewSubmit').on('click', function(e){

                e.preventDefault();

                /** GENERATE CODE*/
                career_form_verification_code = Math.floor(1000 + Math.random() * 9000);

                /** SET A COOKIE*/
                setCookie("_NrJFRxtB1984WVogY2Ci", career_form_verification_code, 1);

                /** ASSIGN CODE TO INPUT*/
                document.getElementById('4srMa62q63awVETd4mo9').value = career_form_verification_code;

                var verificationView = document.getElementById("career-registration-form");
                verificationView.classList.add("hidden");

                var formView = document.getElementById("verification");
                formView.classList.remove("hidden");

                /** GET FORM DATA*/
                var formData = new FormData($('#formView')[0]);

                $.ajax({
                    type:'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Access-Control-Allow-Origin': 'https://esnaad.com/career-registration-post-v1'
                    },
                    url:"{{ URL('/career-registration-post-v1') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success:function(data) 
                    {
                        setCookie("_i7gEG1tj42frZ6ezVqdy", "true", 1);

                        if($.isEmptyObject(data.error)){
                            
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                });
            });  

            $('#verificationFormSubmit').on('click', function(e){

                e.preventDefault();

                /** GENERATE CODE*/
                var career_form_verification_code_cookies = getCookie('_NrJFRxtB1984WVogY2Ci');

                console.log(career_form_verification_code_cookies);

                /** SET A COOKIE*/
                setCookie("_NrJFRxtB1984WVogY2Ci", career_form_verification_code, 1);

                /** ASSIGN CODE TO INPUT*/
                var career_form_verification_code_user = document.getElementById('applicant_code').value;

                if(career_form_verification_code_user == career_form_verification_code_cookies) {

                    /** GET FORM DATA*/
                    var formData = new FormData($('#formView')[0]);

                    $.ajax({
                        type:'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Access-Control-Allow-Origin': 'https://esnaad.com/career-registration-post-v2'
                        },
                        url:"{{ URL('/career-registration-post-v2') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success:function(data) 
                        {
                            if($.isEmptyObject(data.error)){
                                /** SWAP THE CONTENTS*/
                                var verificationView2 = document.getElementById("verification");
                                verificationView2.classList.add("hidden");
                                var thankyouView = document.getElementById("thankyou");
                                thankyouView.classList.remove("hidden");
                            }else{
                                printErrorMsg(data.error);
                            }
                        }
                    });
                    
                    
                }

                
            });          
        });
    </script>
@endsection
