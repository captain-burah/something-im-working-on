<div class="sm:container mt-15">

    <div class="mt-10 mb-5">
        <h3 class="text-2xl font-thin text-center">
            THE THREE PILLARS <br>OF ESNAADS  PHILOSOPHIES
        </h3>
    </div>


    <div class="grid md:grid-cols-4 gap-3 mb-5 mx-auto" >

        <?php //LOAD COMPONENT INDEX CARD ?>
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

    </div>

    <?php //SHOW ON MOBILE ONLY ?>
    {{-- <div class="block sm:hidden flex mx-auto px-4 w-full">
        <a href="{{ route('luxe.new-projects') }}" class="w-full hover:bg-gray-100 mx-auto text-center text-gray-700 font-light py-2 sm:py-1 px-4 border border-gray-400 rounded shadow hover:bg-white hover:shadow-gray/30"
            aria-label="luxe-home-view-more-new-projects"
        >
            View More New Projects
        </a>
    </div> --}}
</div>
