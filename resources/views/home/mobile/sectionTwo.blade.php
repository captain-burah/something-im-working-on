<div class="mt-15 bg-footer ">

    <div class="pt-5 mb-5 px-6 w-full">
        <h3 class="text-xl font-thin text-left w-[100%]">
            THE THREE PILLARS <br>OF ESNAADS  PHILOSOPHIES
        </h3>
    </div>

    <div class="owl-carousel">
        <div class="item">  
            <x-index-card-mobile
                description="Our designs blend aesthetics with functionality, creating homes that are as beautiful as they are comfortable while we weave architectural dreams into reality
                "
                base="DESIGN"
                url="{{ asset('home/DESIGN.webp') }}"
            />  
        </div>
        <div class="item">
            <x-index-card-mobile
                description="We are committed to delivering quality in every aspect of its projects, from the choice of materials and equipment, to the execution and supervision of the construction
                "
                base="QUALITY"
                url="{{ asset('home/QUALITY.webp') }}"
            />
        </div>
        <div class="item">
            <x-index-card-mobile
                description="Relentless pursuit of the highest standards, achieved through dedication, skill and a commitment
    to surpassing expectations
                "
                base="EXCELENCE"
                url="{{ asset('home/EXCELLENCE.webp') }}"
            />
        </div>
    </div>


    {{-- <div class="grid md:grid-cols-4 gap-3 mb-5 mx-auto" >

        <x-index-card-mobile
            description="Our designs blend aesthetics with functionality, creating homes that are as beautiful as they are comfortable while we weave architectural dreams into reality
            "
            base="DESIGN"
            url="{{ asset('home/DESIGN.webp') }}"
        />

        <x-index-card-mobile
            description="We are committed to delivering quality in every aspect of its projects, from the choice of materials and equipment, to the execution and supervision of the construction
            "
            base="QUALITY"
            url="{{ asset('home/QUALITY.webp') }}"
        />

        <x-index-card-mobile
            description="Relentless pursuit of the highest standards, achieved through dedication, skill and a commitment
to surpassing expectations
            "
            base="EXCELENCE"
            url="{{ asset('home/EXCELLENCE.webp') }}"
        />

    </div> --}}

    
</div>

<script>
    $(document).ready(function(){  
        $('.owl-carousel').owlCarousel({
            margin:10,
            center:true,
            startPosition: 1,
            responsive:{
                0:{
                    items:1.25
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    });
</script>