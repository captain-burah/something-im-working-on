{{-- Desktop View --}}
<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4">

    <div class="flex justify-between mb-5">
        <div>
            <h3 class="text-2xl sm:text-md text-gray-700">
                Ready Properties in Dubai
            </h3>
        </div>
        <div class="hidden sm:block">
            <a href="{{ route('luxe.buy') }}" class="hover:bg-gray-100 text-gray-700 font-light py-1 px-4 border border-gray-400 rounded shadow hover:bg-white hover:shadow-gray/30"
                aria-label="luxe-view-more-ready-projects"
            >
                View More
            </a>
        </div>
    </div>

    <div class="grid md:grid-cols-4 gap-2 mb-5">
        @foreach($ready_properties as $data)
            <div>
                <x-buy-card
                    :sluglink="$data->slug_link"
                    :id="$data->id"
                    :titleen="$data->title_en"
                    :location="$data->locationss->title_en"
                    :price="$data->price"
                    :type="$data->property_release"
                    :bedrooms="$data->bedrooms"
                    :bathrooms="$data->bathrooms"
                    :img="@$data->images->first()->image"
                    :category="$data->property_category->cat_name_en"
                    :price="$data->price"
                    :area="$data->area"

                />
            </div>
        @endforeach

    </div>

    <div class="block sm:hidden flex mx-auto px-4 w-full">
        <a href="{{ route('luxe.buy') }}" class="w-full hover:bg-gray-100 mx-auto text-center text-gray-700 font-light py-2 sm:py-1 px-4 border border-gray-400 rounded shadow hover:bg-white hover:shadow-gray/30"
            aria-label="luxe-view-more-ready-projects"
        >
            View More Ready Properties
        </a>
    </div>
</div>


