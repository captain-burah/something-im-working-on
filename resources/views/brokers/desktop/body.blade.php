<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto">
    <div class="md:w-[80%] xl:w-[50%] mx-auto my-8">
        <form id="uploadForm" action="" method="post">
            @csrf
            <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
            <h3 class="text-2xl text-gray-900 font-semibold"> </h3>
            <p class="text-black mb-4">
                We are excited to establish partnerships 
                with esteemed real estate agencies or broker companies. Please complete the following form to initiate the registration process.
            </p>

            <div id="status"></div>
            
            @include('brokers.desktop.companyInfo')

            @include('brokers.desktop.authorizedPerson')

            @include('brokers.desktop.bankInfo')    

            @include('brokers.desktop.documents')

            <button type="submit" id="submitForm" class="w-full mt-8 bg-black hover:bg-white border hover:border-gray-500 text-white hover:text-black font-semibold p-3">Register Now</button>
        </form>

    </div>
</div>





@section('intel-input')
    {{-- INTEL INPUT --}}
    <script>

        var input = document.querySelector("#phone");

        const iti = window.intlTelInput(input, {

            initialCountry: "auto",

            separateDialCode: true,

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
            document.getElementById('country_code').value = iti.getSelectedCountryData().dialCode;
        })


    </script>

    {{-- <script>
        function submitForm() {
            var form = document.getElementById('uploadForm');
            var formData = new FormData(form);

            // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content');
        
            var xhr = new XMLHttpRequest();
            
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Request was successful
                        // document.getElementById('status').innerHTML = 'Form submitted successfully';
                        Swal.fire({
                            title: "Registration Completed",
                            text: "Thank you for registering! An email has been sent to your inbox with further details about your account status.",
                            icon: "success"
                        }); 
                    } else if (xhr.status >= 400 && xhr.status < 500) {
                        // Client error (4xx): Handle errors related to user input or request structure
                        document.getElementById('status').innerHTML = 'Client error: ' + xhr.responseText;
                        Swal.fire({
                            title: 'Error!',
                            text: 'Input Error. Please check the form data.',
                            icon: 'error',
                            confirmButtonText: 'Close'
                        })
                    } else if (xhr.status >= 500) {
                        // Server error (5xx): Handle errors on the server side
                        // document.getElementById('status').innerHTML = 'Server error: ' + xhr.responseText;
                        Swal.fire({
                            title: 'Error!',
                            text: 'Server Error',
                            icon: 'error',
                            confirmButtonText: 'Close'
                        })
                    } else {
                        // Handle other cases as needed
                        // document.getElementById('status').innerHTML = 'Unexpected error: ' + xhr.responseText;
                        Swal.fire({
                            title: 'Error!',
                            text: 'Unexpected Error',
                            icon: 'error',
                            confirmButtonText: 'Close'
                        })
                    }
                }
            };

            xhr.onerror = function () {
                console.error('Network error occurred');
            };

            xhr.open('POST', "https://mis.esnaad.com/api/v1/esnaad/agency-registration", true);
            // xhr.setRequestHeader("X-CSRF-TOKEN", CSRF_TOKEN);
            xhr.setRequestHeader('Content-Type', 'multipart/form-data');
            xhr.setRequestHeader("authkey", 'YOUR_SECRET_KEY');
            xhr.send(formData);
        }

    </script> --}}
    



    {{-- FORM SUBMIT --}}
    <script>
        $(document).ready(function () {

        /**
         * INITIATE HEADERS WITH CSRF TOKENIZATION
         * FOR FORM SUBMISSION
         */
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content')
            }
        });
        $('#uploadForm').on('submit', function(e){

            e.preventDefault();

            var formData = new FormData(this);

            /**
             * INITIATE AN AJAX SCRIPT FOR THE FORM SUBMISSION
             * ALONG WITH POST ROUTE METHOD AND URL. IF RESPONSE
             * IS A SUCCESS DISPLAY THE THANK YOU MODAL AND
             * UPDATE THE FORM SESSION IN SESSION-STORAGE OF BROWSER
             *
            */
           $.ajax({
                type:'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content'),
                    'Access-Control-Allow-Origin': 'https://esnaad.com/agency-registration'
                },
                url:"{{ URL('http://mis.esnaad.com/api/v1/esnaad/agency-registration') }}",
                data: formData,
                crossDomain: true,
                type: 'json',   
                processData: false,
                contentType: false,
                success:function(data) 
                {
                    if($.isEmptyObject(data.error)){

                        console.log(data.success); // TEST THE DATA

                        // UPDATE LOCAL STORAGE
                        sessionStorage.removeItem("form_submission");
                        sessionStorage.setItem("form_submission", "true");

                        modalClose('mymodalcentered'); // CLOSE THE MODAL

                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
            

        });
        });
    </script>

@endsection
