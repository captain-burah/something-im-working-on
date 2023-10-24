

{{-- Mobile View --}}
<div class="block lg:hidden container mx-auto px-4 ">

    <div class="flex justify-between mb-5">
        <div>
            <h3 class="text-md text-gray-700">
                Featured Off-Plan
            </h3>
        </div>
        <div>
            <a class="hover:bg-gray-100 text-gray-700 font-light py-0 px-4 border border-gray-400 rounded shadow hover:bg-white hover:shadow-gray/30">
                View More
            </a>
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-4 mb-5">
        @foreach($ready_projects as $data)
            <div>
                <x-index-card
                    type="luxury"
                    :propertyreference="$data->id"
                    :name="$data->title_en"
                    :price="$data->project_price"
                    :location="@$data->locationss->name_en"
                    :handover="$data->est_completion_en"
                    :img="@$data->images->first()->image"
                    :slug="$data->slug_link"
                    :projtype="@$data->project_types->first()->name_en"
                ></x-index-card>
            </div>
        @endforeach



    </div>
</div>
