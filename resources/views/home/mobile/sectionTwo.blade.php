<div class="sm:container mt-15">

    <div class="mt-10 mb-5">
        <h3 class="text-2xl font-thin text-center">
            THE THREE PILLARS <br>OF ESNAADS  PHILOSOPHIES
        </h3>
    </div>


    <div class="grid md:grid-cols-4 gap-3 mb-5 mx-auto" >

        <?php //LOAD COMPONENT INDEX CARD ?>
        <x-index-card-mobile
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. "
            base="QUALITY"
            url="{{ asset('home/DESIGN.webp') }}"
        />

        <x-index-card-mobile
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. "
            base="CHOICE"
            url="{{ asset('home/QUALITY.webp') }}"
        />

        <x-index-card-mobile
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. "
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
