<dialog id="dialog" style="width: 50%" >
        <button onclick="window.dialog.close();document.getElementById('search').disabled=false" aria-label="close" class="x">❌</button>



        <div class="container mx-auto ">
            {{-- <div class="">
                Search
            </div> --}}

            <div class="grid grid-cols-2 gap-4">

                <div class="text-center mx-auto">
                    <button class="w3-bar-item w3-button mx-auto text-2xl text-center" id="off-plan-btn" onclick="openCity('off-plan')">Off-Plan</button>
                </div>

                <div class="text-center mx-auto">
                    <button class="w3-bar-item w3-button mx-auto text-2xl text-center" id="ready-btn" onclick="openCity('ready')">Ready</button>
                </div>

            </div>

            <div class="w-96 mx-auto">


            </div>
        </div>

            <div id="off-plan" class="w3-container city">

                {{-- <input  {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}> --}}

                <p>London</p>
                <p>London is the capital city of England</p>
            </div>

            <div id="ready" class="w3-container city" style="display:none">
                <p>Paris</p>
                <p>Paris is the capital of France</p>
            </div>

            <script>
                function openCity(cityName) {
                    var i;
                    var x = document.getElementsByClassName("city");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    document.getElementById(cityName).style.display = "block";
                }
            </script>

        {{-- <p>You can also change the styles of the <code>::backdrop</code> from the CSS.</p> --}}
    </dialog>
