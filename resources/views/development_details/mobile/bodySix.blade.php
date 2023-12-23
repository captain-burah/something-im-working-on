<div class="bg-footer mx-0 py-8 mt-4 mx-auto">
    <div class="row px-4 mb-4">
        <h2 class="text-esnaad_text text-left leading-6 text-xl ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus
        </h2>
    </div>

    <div class="mx-0 px-0 mx-auto w-full pb-4">
        <div class="row-span-2 grid xl:grid-cols-2 gap-4 h-[100%] w-[100%]">
            <div>
                {{-- <iframe width="100%" style="margin:0;" src="{{ asset('videos/project-details.mp4') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
                <video width="100%" height="auto" autoplay="autoplay" muted loop>
                    <source src="{{ asset('videos/project-details.mp4') }}" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>

            </div>
        </div>
    </div>

</div>




<div class="mx-0 px-0 mt-4 mb-0 mx-auto w-full ">
    <div class="row px-4 grid xl:grid-cols-2 gap-0 h-[100%] w-[100%]">
        <div class="">
            <p class="text-esnaad_text text-justify font-sm xl:font-base my-4 xl:w-[90%]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum. Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim
                condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien. 
                <span class="hidden" id="more-text2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum.
                    Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum.
                    Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum.
                    Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien.
                </span>
                <button id="toggle-btn2" class="text-black focus:outline-none underline">Read More...</button>
                <button id="hide-btn2" class="hidden text-black focus:outline-none underline">Hide...</button>
            </p>
        </div>
    </div>
</div>

<script>
    const moreTextEl2 = document.getElementById('more-text2');
    const toggleBtnEl2 = document.getElementById('toggle-btn2');
    const hideBtnEl2 = document.getElementById('hide-btn2');

    toggleBtnEl2.addEventListener('click', () => {
        moreTextEl2.classList.toggle('hidden');
        toggleBtnEl2.classList.toggle('hidden');
        hideBtnEl2.classList.toggle('hidden');
    });

    hideBtnEl2.addEventListener('click', () => {
        moreTextEl2.classList.toggle('hidden');
        toggleBtnEl2.classList.toggle('hidden');
        hideBtnEl2.classList.toggle('hidden');
    });
</script>
