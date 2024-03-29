<header class="container mx-auto mt-6">
  <div
    class="relative h-96 overflow-hidden bg-cover bg-no-repeat p-12 text-center "
    style="background-image: url('{{URL::asset('uploads/blogs/'.$last_blog->id.'/'.$last_blog->image_url)}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}')">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
      style="background-color: rgb(0, 0, 0, 0.5)">
      <div class="flex h-full items-center justify-center">
        <div class="text-white">
          <h2 class="mb-4 text-4xl font-semibold">
            {{$last_blog->name_en}}
          </h2>
          <h4 class="mb-6 text-lg font-semibold">
            {{$last_blog->updated_at->format('Y - M')}} | Latest Read
          </h4>
          <a href="{{ URL($langSeg.'/blogs/'.$last_blog->updated_at->format('Y').'/'.$last_blog->updated_at->format('m').'/'.$last_blog->slug_link) }}">
            <button
              type="button"
              class="rounded border-2 border-neutral-50 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
              data-te-ripple-init
              data-te-ripple-color="light">
                  Read More
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
