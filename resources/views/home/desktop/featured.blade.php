<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 mx-auto">

    <div class="grid md:grid-cols-3 gap-3 mb-5 mx-auto" >

        <?php //LOAD COMPONENT INDEX CARD ?>
        <x-index-card
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan.
            "
            base="QUALITY"
            url="{{ asset('home/f1.webp') }}"
        />

        <x-index-card
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan.
            "
            base="CHOICE"
            url="{{ asset('home/f2.webp') }}"
        />

        <x-index-card
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan. 
             ."
            base="EXCELENCE"
            url="{{ asset('home/f3.webp') }}"
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
