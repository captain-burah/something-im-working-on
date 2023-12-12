<?php $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


<style>
    .iti {
        width: 100% !important;
    }
    .iti__flag-container{
        overflow: visible;
    }
</style>


<div class="mx-0 px-0 ">
    <div class="mx-0">
        <button onclick="openModal('mymodalcentered-community-register')" class="w-full bg-black border-black text-lg text-white font-semibold py-4 px-2 rounded-0" type="button">
            Register Your Interest
        </button>
    </div>
</div>



<dialog id="mymodalcentered-community-register" class="bg-transparent relative w-screen h-screen">
    <div class="p-2 flex justify-center items-center fixed left-0 top-0 w-full h-full bg-black bg-opacity-80 transition-opacity duration-300 opacity-0">
        <div class="bg-white flex rounded-0 w-full relative">
            <div class="flex flex-col items-start w-full">
                <div class="p-4 flex items-stretch w-full">
                    <div class="font-thin text-xl text-gray-900">Register Your Interest</div>
                    <svg onclick="modalClose('mymodalcentered-community-register')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div>
                <form id="subscriptionForm" >
                    <div class="px-4  w-full" style="max-height: 40vh;">
                        <input type="hidden" id="project" name="project" value="project_name">
                        <input type="hidden" id="country_code" name="country_code">
                        <input type="hidden" id="url" name="url" value="{{$actual_link}}">
                        <input type="hidden" id="url" name="enquiry_type" value="">

                        <div class="mb-6">
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Your Name"  required>
                        </div>

                        <div class="mb-6">
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Email Address" required>
                        </div>

                        <div class="mb-6">
                            <input type="tel" id="phone" name="phone" class="w-max px-4 py-2 border rounded-0 focus:outline-none focus:ring-2 focus:ring-gray-500" placeholder="Phone" style="width: 100% !important" required>
                        </div>
                    </div>

                    <div class="p-4 flex justify-end items-center w-full">
                        <button type="button" onclick="modalClose('mymodalcentered-community-register')" class="bg-transparent hover:bg-black text-black font-semibold hover:text-white py-2 px-4 border border-black hover:border-transparent rounded-0"   >
                            Close
                        </button>
                        <button type="  " class="bg-black hover:bg-white border border-black text-white hover:text-black font-bold py-2 px-4 rounded-0 ml-3">
                            Register Your Interest
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</dialog>



<script>
    function myFunction() {
        // Get the text field
        var copyText = document.getElementById("myInput");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);
    }
</script>

@section('intel-input')
    {{-- INTEL INPUT --}}
    <script>

        var input = document.querySelector("#phone");

        const iti = window.intlTelInput(input, {

            initialCountry: "auto",

            separateDialCode: true,

            // utilsScript: "/build/js/utils.js", // for editing placeholders

            geoIpLookup: function(success) {

                fetch("https://api.ipdata.co/?api-key=1f9ecc1670c915b3ddd397d233297968ccf720c0861abf9ecac1a8ef")
                .then(function(response) {
                    if (!response.ok) return success("");
                    return response.json();
                })
                .then(function(ipdata) {
                    success(ipdata.country_code);
                });
            },
        });

        input.addEventListener("countrychange", function() {
            // console.log(document.getElementById('phone').value);
            console.log(document.querySelector('[name="phone"]').value);
            document.getElementById('country_code').value = iti.getSelectedCountryData().dialCode;
        })


    </script>

    {{-- FORM SUBMIT --}}
    <script>
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
                url:"{{ URL('/project-detail-inquiry') }}",
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
    </script>

@endsection


