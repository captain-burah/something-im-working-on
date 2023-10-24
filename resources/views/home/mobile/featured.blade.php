<div class="sm:container ">

    <div class="grid md:grid-cols-4 gap-3 mb-5 mx-auto" >

        <?php //LOAD COMPONENT INDEX CARD ?>
        <x-index-card-mobile
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan"
            base="Quality"
            url="home/images/"
        />

        <x-index-card-mobile
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan"
            base="EXCELENCE"
            url="home/images/"
        />

        <x-index-card-mobile
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan"
            base="INTERIOR"
            url="home/images/"
        />

        <x-index-card-mobile
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan"
            base="AMENITIES"
            url="home/images/"
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
