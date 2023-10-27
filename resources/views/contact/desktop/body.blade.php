<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto">
    <div class="w-[50%] mx-auto my-16">
        <form class="flex flex-col items-start w-full"  method="post" action="{{ url('/communities/register-your-interest') }}" id="contact-desktop-form">
            @csrf
               
            <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
            <h3 class="text-2xl text-gray-900 font-semibold">Lorem ipsum dolor sit amet,</h3>
            <p class="text-gray-600 mb-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula</p>
            <input type="hidden" name="country_code" id="country_code">
            <input type="text" name="name" id="name" placeholder="Full Name" class="border p-2  w-full">
            <input type="text" name="name" id="phone" placeholder="Phone Number" class="border p-2 mt-3  w-full">
            <input type="email" name="email" id="email" placeholder="Email" class="border p-2 mt-3 w-full mt-3">
            <textarea name="msg" id="" cols="10" rows="3" placeholder="Tell us about your inquiry" class="border p-2 mt-3 w-full"></textarea>
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
            console.log(document.getElementById('phone').value);
            document.getElementById('country_code').value = iti.getSelectedCountryData().dialCode;
        })


    </script>

    {{-- FORM SUBMIT --}}
    <script>
        /**
         * INITIATE HEADERS WITH CSRF TOKENIZATION
         * FOR FORM SUBMISSION
         */
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="XSRF-TOKEN"]').attr('content')
            }
        });
        $('#contact-desktop-form').on('submit', function(e){

            e.preventDefault();

            var name = $("#name").val();

            var email = $("#email").val();

            var phone = $("#phone").val();

            var country_code = $("#country_code").val();

            var msg = $("#msg").val();



            /**
             * INITIATE AN AJAX SCRIPT FOR THE FORM SUBMISSION
             * ALONG WITH POST ROUTE METHOD AND URL. IF RESPONSE
             * IS A SUCCESS DISPLAY THE THANK YOU MODAL AND
             * UPDATE THE FORM SESSION IN SESSION-STORAGE OF BROWSER
             *
            */
            $.ajax({
                type:'POST',
                url:"{{ URL('api/v1/esnaad/contact-form') }}",
                headers : {
                    'Authorizatio' : 'Bearer ' + 'schDv?8qat`6zLVZ;8Lwoy(g`/Asm%D88$a>7Wl,20amt[=uN1',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                contentType : 'application/x-www-form-urlencoded',
                data:{
                    name:name,
                    email:email,
                    phone:phone,
                    country_code:country_code,
                    msg:msg,
                    
                },
                error : function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                }
            }).done(function(data){  
                alert('Successfully');  
             }).fail(function(jqXHR, ajaxOptions, thrownError){  
                alert(jqXHR.responseText);  
            });  

        });
    </script>

@endsection
