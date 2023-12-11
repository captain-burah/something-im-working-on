<div class="container mx-auto  px-4 m-0 mt-5 mb-0">
    <div class="row">
        <div class="grid md:grid-cols-1 mx-auto">
            <div>
                <h1 class="py-2 font-base text-xl">OUR STORY</h1>
                <p class="leading-relaxed">
                    Experience unrivalled elegance with Dubai's one finest real estate developer ESNAAD, with our dedication to innovative thinking, 
                    consistent excellence, and the pursuit of perfection, we redefine luxury. Elevate your living experience with our thoughtfully crafted spaces, where every detail reflects our dedication to 
                    <span class="hidden" id="more-text">
                        creating homes that stand as a testament to sophistication and superior craftsmanship 
                        We are committed to creating spaces that celebrate life, encapsulate your dreams, and add value to the community
                    </span>
                    <button id="toggle-btn" class=" text-black focus:outline-none underline">Read More...</button>
                    <button id="hide-btn" class="hidden text-black focus:outline-none underline">Hide...</button>
                </p>

            </div>
        </div>
    </div>

    <div class="row my-8 p-0">
            <img src="{{ asset('home/home-decor-1.jpg')}}">
        </div>
</div>


<div class="w-full px-4 mx-auto">
    <div class="sm:container pt-0 sm:mx-auto mx-0 mt-4 sm:mb-4 mx-auto">

        <div class="space-y-2">
            <div
                class="group flex flex-col gap-2 rounded-0 text-black"
                tabindex="3"
            >
                <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                <p class="text-xl font-semibold text-left leading-6 py-4">
                    Company Core Values
                </p>
                <img
                    src="https://demo.esnaad.com/public/home/down-arrow.png"
                    class="h-full w-6 transition-all duration-500 group-focus:-rotate-180"
                />
                </div>
                <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000"
                >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.
                </div>
            </div>

            <div
                class="group flex flex-col gap-2 rounded-0 text-black"
                tabindex="1"
            >
                <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                <p class="text-xl font-semibold text-left leading-6 py-4">
                    Company Mission
                </p>
                <img
                    src="https://demo.esnaad.com/public/home/down-arrow.png"
                    class="h-full w-6 transition-all duration-500 group-focus:-rotate-180"
                />
                </div>
                <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000"
                >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.
                </div>
            </div>

            <div
                class="group flex flex-col gap-2 rounded-0 text-black"
                tabindex="2"
            >
                <div class="flex cursor-pointer items-center justify-between border-b border-gray-700">
                <p class="text-xl font-semibold text-left leading-6 py-4">
                    Company Vission
                </p>
                <img
                    src="https://demo.esnaad.com/public/home/down-arrow.png"
                    class="h-full w-6 transition-all duration-500 group-focus:-rotate-180"
                />
                </div>
                <div
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000"
                >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.
                </div>
            </div>
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