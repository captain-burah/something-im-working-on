<!-- component -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <div x-data="imageSlider" class="relative mx-autooverflow-hidden rounded-md bg-white p-0">
        <div class="absolute right-5 top-5 z-10 rounded-full bg-gray-600 px-2 text-center text-sm text-white">
            <span x-text="currentIndex"></span>/<span x-text="images.length"></span>
        </div>

        <button @click="previous()" class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
            <i class="fas fa-chevron-left text-2xl font-bold text-gray-500"></i>
        </button>

        <button @click="forward()" class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
            <i class="fas fa-chevron-right text-2xl font-bold text-gray-500"></i>
        </button>

        <div class="relative h-80" style="width: 100vw">
            <template x-for="(image, index) in images">
                <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-0">
                    <img :src="image" alt="image" class="rounded-0" />
                </div>
            </template>
        </div>
    </div>

<script>
  document.addEventListener("alpine:init", () => {
    Alpine.data("imageSlider", () => ({
      currentIndex: 1,
      images: [
        "https://unsplash.it/640/425?image=30",
        "https://unsplash.it/640/425?image=40",
        "https://unsplash.it/640/425?image=50",
      ],
      previous() {
        if (this.currentIndex > 1) {
          this.currentIndex = this.currentIndex - 1;
        }
      },
      forward() {
        if (this.currentIndex < this.images.length) {
          this.currentIndex = this.currentIndex + 1;
        }
      },
    }));
  });
</script>

<div class="container  mx-0 px-0 mx-auto">

    <div class="row-span-2 grid sm:grid-cols-2 gap-4 h-[100%] w-[100%]">
        <div>
            <h2 class="text-esnaad_text text-justify font-base my-8 text-2xl xl:text-3xl w-[90%]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula
                accumsan dictum.
            </h2>
            <p class="text-esnaad_text text-justify font-base my-8 w-[90%]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum. Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim
                condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum.
                Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien.
            </p>
        </div>
        <div class="text-esnaad_text text-justify font-light w-full">
            <div class="row-span-2 grid grid-cols-2 gap-4 w-[100%] ">
                <div>
                    <ul class="list-none">
                        <li class="mb-5">fnjdsafdsa</li>
                        <li class="mb-5">fnjdsafdsa</li>
                        <li class="mb-5">fnjdsafdsa</li>
                        <li class="mb-5">fnjdsafdsa</li>
                        <li class="mb-5">fnjdsafdsa</li>
                    </ul>
                </div>
                <div>
                    <ul class="list-none">
                        <li class="mb-5">fnjdsafdsa</li>
                        <li class="mb-5">fnjdsafdsa</li>
                        <li class="mb-5">fnjdsafdsa</li>
                        <li class="mb-5">fnjdsafdsa</li>
                        <li class="mb-5">fnjdsafdsa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>

