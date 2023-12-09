{{-- Desktop View --}}
<div class="container mx-auto  mt-10 mb-0">
    <div class="row">
        <div class="grid md:grid-cols-1 mx-auto">
            <div>
                <h1 class="py-2 font-base text-xl">OUR STORY</h1>
                <p class="leading-relaxed">
                    Inspired by over  20 years of expertise within the real estate industry & construction, elevating your living experiences
                    with our thoughtfully crafted spaces, where every detail reflects our dedication to creating homes 
                    that stand as a testament to sophistication and superior craftsmanship.
                    The brand is dedicated to delivering luxurious projects 
                    <span class="hidden" id="more-text">
                        with levels of designs beyond imaginations, craftsmanship and services that offer unique and a tailored one-stop 
                        shop to our clients from around the world, looking beyond what is, to see what could be.
                    </span>
                    <button id="toggle-btn" class=" text-black focus:outline-none underline">Read More...</button>
                    <button id="hide-btn" class="hidden text-black focus:outline-none underline">Hide...</button>
                </p>

            </div>
        </div>
    </div>

    <div class="row mt-8 p-0">
        <img src="{{ asset('home/13.jpg')}}">
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