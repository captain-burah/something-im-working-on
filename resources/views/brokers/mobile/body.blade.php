<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-8 sm:my-4 mx-auto">
    <div class="container mx-auto my-8">
        <form class="flex flex-col items-start w-full"  method="post" action="{{ URL('en/communities/register-your-interest') }}" id="contact-desktop-form">
            @csrf
               
            <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
            
            <p class="text-gray-600 mb-4">We are excited to establish partnerships with esteemed real estate agencies or broker 
                companies. Please complete the following form to initiate the registration process.
            </p>
            
            @include('brokers.mobile.companyInfo')

            @include('brokers.mobile.authorizedPerson')

            @include('brokers.mobile.bankInfo')

            @include('brokers.mobile.documents')

            <button type="submit"  class="w-full mt-6 bg-black hover:bg-white border hover:border-gray-500 text-white hover:text-black font-semibold p-3">Submit</button>
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

    {{-- FORM SUBMIT --}}
    <script>
        $(document).ready(function () {

            // sessionStorage.setItem("agency_registration_submitted", "false");
            // sessionStorage.getItem("agency_registration_submitted");

            var agency_reg_form_bool = sessionStorage.getItem('agency_registration_submitted');

            if(!agency_reg_form_bool) {

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

                    $.ajax({
                        type:'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content'),
                            'Access-Control-Allow-Origin': 'https://esnaad.com/agency-registration'
                        },
                        {{ URL('en/agency-registration-post') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success:function(data) 
                        {
                            if($.isEmptyObject(data.error)){

                                // console.log(data.success); // TEST THE DATA
                                sessionStorage.setItem("agency_registration_submitted", "true");

                                var successView = document.getElementById("agency-registration-form");
                                successView.classList.add("hidden");

                                var formView = document.getElementById("agency-registration-form-submitted");
                                formView.classList.remove("hidden");
                            }else{
                                printErrorMsg(data.error);
                            }
                        }
                    });
                });
            }
             else {
                var successView = document.getElementById("agency-registration-form");
                successView.classList.add("hidden");

                var formView = document.getElementById("agency-registration-form-submitted");
                formView.classList.remove("hidden");
            }
        });
    </script>
@endsection
