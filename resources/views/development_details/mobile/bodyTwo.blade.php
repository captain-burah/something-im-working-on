
<div class="mx-0 px-4 mx-auto w-full pb-4">
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


<div class="mx-0 px-0 mt-4 mb-0 mx-auto w-full bg-footer">
    <div class="row-span-2 px-4 grid xl:grid-cols-2 gap-0 h-[100%] w-[100%]">
        <div class="xl:m-10">
            <p class="text-esnaad_text text-justify font-sm xl:font-base my-8 xl:w-[90%]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum. Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim
                condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien. 
                <span class="hidden" id="more-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum.
                    Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum.
                    Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum.
                    Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien.
                </span>
                <button id="toggle-btn" class=" text-black focus:outline-none underline">Read More...</button>
                <button id="hide-btn" class="hidden text-black focus:outline-none underline">Hide...</button>
            </p>
        </div>
    </div>
</div>

<script>
    const moreTextEl = document.getElementById('more-text');
    const toggleBtnEl = document.getElementById('toggle-btn');
    const hideBtnEl = document.getElementById('hide-btn');

    toggleBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });

    hideBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });
</script>