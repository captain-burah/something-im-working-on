{{-- Desktop View --}}
<div class="container mx-auto  px-4 m-0 mt-10 mb-0">
    <div class="row">
        <div class="grid md:grid-cols-1 mx-auto">
            <div>
                <h1 class="py-2 font-base text-xl">{{__('frontend.homeSectionOneH')}}</h1>
                <p class="leading-relaxed">
                    {{__('frontend.homeSectionOneP1')}}
                    <span class="hidden" id="more-text">
                        {{__('frontend.homeSectionOneP1')}}
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