{{-- Desktop View --}}
<div class="sm:container sm:mx-auto mx-0 px-0 sm:px-4 my-20 sm:my-4 ">

    <div class="flex justify-between mb-5">
        <div>
            <h3 class="text-2xl sm:text-md  text-gray-700">
                New Projects in Dubai
            </h3>
        </div>
        <div class="hidden sm:block">
            <a href="{{ route('luxe.new-projects') }}" class="hover:bg-gray-100 text-gray-700 font-light py-1 px-4 border border-gray-400 rounded shadow hover:bg-white hover:shadow-gray/30"
                aria-label="luxe-home-view-more-new-projects"
            >
                View More
            </a>
        </div>
    </div>

    <div class="grid md:grid-cols-4 gap-2 mb-5">
        @foreach($offplan_projects as $data)
            <div>
                <x-index-card
                    type="offplan"
                    :propertyreference="$data->id"
                    :name="$data->title_en"
                    :price="$data->project_price"
                    :location="@$data->locationss->name_en"
                    :handover="$data->est_completion_en"
                    :img="@$data->images->first()->image"
                    :slug="$data->slug_link"
                    :projtype="@$data->project_types->first()->name_en"
                />
            </div>
        @endforeach


    </div>

    <div class="block sm:hidden flex mx-auto px-4 w-full">
        <a href="{{ route('luxe.new-projects') }}" class="w-full hover:bg-gray-100 mx-auto text-center text-gray-700 font-light py-2 sm:py-1 px-4 border border-gray-400 rounded shadow hover:bg-white hover:shadow-gray/30"
                        aria-label="luxe-home-view-more-new-projects"
                    >
            View More New Projects
        </a>
    </div>
</div>
