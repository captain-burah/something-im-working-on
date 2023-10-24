
@section('developments_gallery_head')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@endsection


    <div class="sm:container sm:mx-auto mx-0 px-0 my-20 sm:my-4 mx-auto sm:h-[35vh] md:h-[75vh] xl:h-[75vh]">
          
        <div class="row-span-2 grid sm:grid-cols-1 gap-4 h-[100%] w-[100%] mx-auto">
            <div>
                <div x-data="imageSlider" class="relative h-full mx-auto overflow-hidden rounded-0 bg-gray-100 ">
                    <div class="absolute right-5 top-5 z-10 rounded-full bg-white px-2 text-center text-sm text-black">
                        <span x-text="currentIndex"></span>/<span x-text="images.length"></span>
                    </div>
                    <button @click="previous()" class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                    </button>

                    <button @click="forward()" class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                    </button>

                    <div class="relative h-full">
                        <template x-for="(image, index) in images">
                            <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-0 h-full w-full">
                                <img :src="image" alt="developer-images" class="h-full w-full object-cover md:h-full md:w-full hover:shadow-lg hover:shadow-gray/0" />
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="sm:container sm:mx-auto mx-0 px-0 xl:my-20 sm:my-4 mx-auto">

    <div class="row-span-2 grid sm:grid-cols-2 gap-4 h-[100%] w-[100%]">
        <div>
            <h2 class="text-esnaad_text text-justify font-base leading-10 my-8 text-2xl xl:text-3xl w-[90%]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula
                accumsan dictum.
            </h2>
            <p class="text-esnaad_text text-justify font-base my-8 w-[90%]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum. Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim
                condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rhoncus augue ut ligula accumsan dictum.
                Phasellus euismod in lectus nec cursus. Curabitur in sem et elit dignissim condimentum eget ac dui. Nulla non nisl mollis ipsum laoreet ultrices ac in sapien.
            </p>
        </div>
        <div class="text-esnaad_text text-justify font-light m-8 w-full">
            <div class="row-span-2 grid sm:grid-cols-2 gap-4 w-[100%] h-[30%] mb-8">
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



@section('developments_gallery_js')
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
@endsection

