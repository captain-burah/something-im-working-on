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
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 leading-6 mt-4"
                >
                    At ESNAAD, we are guided by our core values, which define who we are and what we do. With Integrity we act with honesty, transparency, and accountability in all our dealings with our customers, partners, employees, and society following and pursuing excellence in everything we do, from the quality of our developments and services, to the performance of our teams, to the satisfaction of our stakeholders. Embracing innovation as a way to create value, solve problems, and improve our processes and developments while caring about the environment and the future generations in sustainability that engages to improving community well-being through planned development and community-building programs and maintaining the highest standards of honesty and openness in all of our relationships.
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
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 leading-6 mt-4"
                >
                    Our mission is to create innovative and sustainable living spaces that enhance the quality of life of our stakeholders and investors. We aim to achieve this by empowering dreams, building legacies while redefining luxury living in the heart of Dubai. With a commitment to excellence, we envision and create dynamic communities that inspire a lifestyle of distinction working with talented and professional partners that share our vision and values, and that provide us with the best expertise and resources in the industry.
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
                class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 leading-6 mt-4"
                >
                    Our vision is to be the region’s leading premium real estate development and investment company, with a Design, Quality and Excellence whilst, Developing our organization and culture, and fostering a work environment that attracts, motivates, and retains the best talent in the industry. We innovate and improve our processes and developments, to adopt to the latest trends in technologies and best practices as to the code of conduct within the real estate realm.
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