<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<?php
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }
?>

@notmobile
    <div class="block py-24 sm:py-12 bg-footer_form" id="footer_form" style="visibility:hidden">
        <div class="container mx-auto px-2 lg:px-8"  @if($langSeg == 'ar') dir="RTL" @endif>    
            <div class="row mb-5">
                <h2 class="text-4xl font-base">
                    {{__('frontend.footerFormH2')}}
                </h2>
                <p class="w-[75%] text-gray-800" id="submitIncomplete">
                    {{__('frontend.footerFormP1')}}
                </p>
                <p class="w-[75%] text-gray-800 my-10" id="submitComplete">
                    {{__('frontend.footerFormP2')}}
                </p>
            </div>

            <div class="row">
                <form id="subscriptionForm" >
                    <div class="grid xl:grid-cols-3 grid-cols-2 gap-2 xl:gap-4 text-dark ">

                        <input type="hidden" name="ip_address" value="{{$ip_address}}">
                    
                        <div class="border-b border-gray-500">
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" type="text" placeholder="{{__('frontend.formFullName')}}" name="name" aria-label="Full name" autocomplete="off" required>
                        </div>

                        <div class="border-b border-gray-500">
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" type="email" placeholder="{{__('frontend.formEmail')}}" name="email" aria-label="Email" required>
                        </div>

                        <div id="submitComplete">
                            <button type="button" id="submitButtonDone" class=" w-full text-sm text-gray-500 px-2 py-2 bg-transparent border border-gray-500 rounded-0">
                                {{__('frontend.footerFormSubmissionCompleted')}}
                            </button>
                            <button type="submit" id="submitButton" class=" w-full text-sm text-white hover:text-black px-2 py-2 bg-black hover:bg-transparent border border-black hover:border-black rounded-0">
                                {{__('frontend.footerFormSubscribe')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endnotmobile


@mobile
    <div class="block py-24 sm:py-12 bg-footer_form" id="footer_form" style="visibility:hidden">
        <div class="container mx-auto px-2 lg:px-8">

            <div class="row mb-5">
                <h2 class="text-3xl font-base" >
                    {{__('frontend.footerFormH2')}}
                </h2>
                <p id="submitIncompleteMobile" class="leading-8 text-justify">
                    {{__('frontend.footerFormP1')}}
                </p>
                <p class="my-5 leading-8 text-justify" id="submitCompleteMobile">
                    {{__('frontend.footerFormP2')}}
                </p>
            </div>

            

            <div class="row">
                <form id="subscriptionFormMobile" >
                    <div class="grid grid-cols-1 gap-2 xl:gap-4 text-dark ">

                        <input type="hidden" name="ip_address" value="{{$ip_address}}">

                        <div class="border-b border-gray-500 my-2">
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" type="text" placeholder="{{__('frontend.formFullName')}}" name="name" aria-label="Full name">
                        </div>

                        <div class="border-b border-gray-500 my-2">
                            <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none focus:border-gray-400 focus:ring-gray-400" type="email" placeholder="{{__('frontend.formEmail')}}" name="email" aria-label="Email">
                        </div>

                        <div class=" my-2">
                            <button type="submit" id="submitButtonMobile" class=" w-full text-sm text-white hover:text-black px-2 py-2 bg-black hover:bg-transparent border border-black hover:border-black rounded-0">
                                {{__('frontend.footerFormSubscribe')}}
                            </button>
                            <button type="button" id="submitButtonMobileDone" class=" w-full text-sm text-black text-gray-500 px-2 py-2 bg-black bg-transparent border border-gray-500 rounded-0">
                                {{__('frontend.footerFormSubmissionCompleted')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endmobile


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $( document ).ready(function() {
        if (localStorage.getItem('subscriptionSubmitted')) {
            $('#submitButtonDone').show();
            $('#submitButton').hide(); 
            $('#submitButtonMobileDone').show();
            $('#submitButtonMobile').hide();  

            $('#submitCompleteMobile').show();
            $('#submitIncompleteMobile').hide();

            $('#submitComplete').show();
            $('#submitIncomplete').hide();
            
            $('#subscriptionForm').hide();
            $('#subscriptionFormMobile').hide();
        } else {
            $('#submitButtonDone').hide();
            $('#submitButton').show();

            $('#submitButtonMobileDone').hide();
            $('#submitButtonMobile').show();

            $('#submitCompleteMobile').hide();
            $('#submitIncompleteMobile').show();

            $('#submitComplete').hide();
            $('#submitIncomplete').show();     

            $('#subscriptionForm').show();
            $('#subscriptionFormMobile').show();
        }
    });

    // Check if the form has been submitted before
    // if (localStorage.getItem('subscriptionSubmitted')) {
    //     disableForm();
    // }

    $('#subscriptionForm').on('submit', function(e){
        e.preventDefault();

        if (localStorage.getItem('subscriptionSubmitted')) {
            // alert('You have already submitted the form');
            
            return;
        }

        var formData = new FormData(this);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'authkey': 'YOUR_SECRET_KEY',
            }
        });

        $.ajax({
            type:'POST',
            url: "{{ URL('en/subscription-form') }}",
            data: formData,
            processData: false,
            contentType: false,
            success:function(data)
            {
                if($.isEmptyObject(data.error)){
                    // sessionStorage.removeItem("form_submission");
                    // sessionStorage.setItem("form_submission", "true");
                    // modalClose('mymodalcentered');
                    $('#submitComplete').show();
                    $('#submitIncomplete').hide();
                    $('#submitButtonDone').show();
                    $('#submitButton').hide();  
                    $('#subscriptionForm').hide();

                }else{
                    printErrorMsg(data.error);
                    alert(data.error);

                }
            }
        });

        // Simulate a successful submission
        // alert('Subscription successful!');

        // Disable the form to prevent further submissions
        // disableForm();

        // Store the submission status in local storage
        // localStorage.setItem('subscriptionSubmitted', 'true');
    });





    $('#subscriptionFormMobile').on('submit', function(e){
        e.preventDefault();

        if (localStorage.getItem('subscriptionSubmitted')) {
            // alert('You have already submitted the form');
            
            return;
        }

        var formData = new FormData(this);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content')},
            url: "{{ URL('en/subscription-form') }}",
            data: formData,
            processData: false,
            contentType: false,
            success:function(data)
            {
                if($.isEmptyObject(data.error)){
                    // sessionStorage.removeItem("form_submission");
                    // sessionStorage.setItem("form_submission", "true");
                    // modalClose('mymodalcentered');
                    $('#submitCompleteMobile').show();
                    $('#submitIncompleteMobile').hide();
                    $('#submitButtonMobileDone').show();
                    $('#submitButtonMobile').hide();  
                    $('#subscriptionFormMobile').hide();
                }else{
                    printErrorMsg(data.error);
                    alert(data.error);

                }
            }
        });

        // Simulate a successful submission
        // alert('Subscription successful!');

        // Disable the form to prevent further submissions
        disableFormMobile();

        // Store the submission status in local storage
        localStorage.setItem('subscriptionSubmitted', 'true');
    });

    function disableForm() {
        document.getElementById('submitButton').disabled = true;
    }

    function disableFormMobile() {
        document.getElementById('submitButtonMobile').disabled = true;
    }
</script>