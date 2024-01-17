<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-8 sm:my-4 mx-auto">
    <div class="container px-4 mx-auto my-8" >
        @if (\Session::has('success'))
            <div class="w-full bg-green-100 rounded-lg p-4">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        <form class="flex flex-col items-start w-full"  method="post" action="{{ URL('en/contact-form-post') }}" id="contact-desktop-form">
            @csrf
            <div class="icon bg-black text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
            <h3 class="text-2xl text-gray-900 font-semibold">{{__('frontend.contactFormH')}}</h3>
            <p class="text-gray-600 mb-4 text-justify"> {{__('frontend.contactFormP')}}</p>
            <input type="hidden" name="country_code" id="country_code">
            <input type="text" name="name" id="name" placeholder="{{__('frontend.formFullName')}}" class="border p-2  w-full" @if($langSeg == 'ar') dir="rtl" @endif>
            <input type="text" name="name" id="phone" placeholder="{{__('frontend.formPhone')}}" class="border p-2 mt-3  w-full" @if($langSeg == 'ar') dir="rtl" @endif>
            <input type="email" name="email" id="email" placeholder="{{__('frontend.formEmail')}}" class="border p-2 mt-3 w-full mt-3" @if($langSeg == 'ar') dir="rtl" @endif>
            <textarea name="msg" id="" cols="10" rows="3" placeholder="{{__('frontend.formMsg')}}" class="border p-2 mt-3 w-full" @if($langSeg == 'ar') dir="rtl" @endif></textarea>
            <button type="submit"  class="w-full mt-6 bg-black hover:bg-white border hover:border-gray-500 text-white hover:text-black font-semibold p-3">{{__('frontend.formSubmit')}}</button>
        </form>
    </div>

    <div class="py-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24525.775984021395!2d55.260775223769585!3d25.202732498933994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f432322d8d48f%3A0xff82a65f913684c2!2sEsnaad%20developments!5e0!3m2!1sen!2suk!4v1702013459669!5m2!1sen!2suk" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
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
@endsection
