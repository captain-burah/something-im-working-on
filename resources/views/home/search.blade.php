

<div class="grid grid-rows-1 grid-flow-col gap-4">
    <div class="search">
        <div class="search">
            {{-- <span class="fa fa-search"></span> --}}
            <input
                class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 rounded-3xl shadow-sm mt-0 py-3 text-xs w-96 mx-auto "
                onclick="window.dialog.showModal();document.getElementById('search').disabled = true"
                id="search"
                style="caret-color: transparent; cursor: pointer; border: 0 !important;"
                aria-placeholder="Property, Community..."
                placeholder="Property, Community..."
                type="text"
                name="search"
                :value="old('search')"
                required
                autofocus
                autocomplete="search">
        </div>
    </div>
</div>
