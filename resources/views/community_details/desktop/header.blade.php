@section('luxe_asset_css')
    <style>
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .animated.faster {
            -webkit-animation-duration: 500ms;
            animation-duration: 500ms;
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
@endsection



<header>
    <div class="w-full bg-cover bg-center" style="height: 60vh; background-image: url('https://mis.esnaad.com/storage/communities/{{$response[0]['id']}}/images/{{$response[0]['header_image']}}'), url('{{ URL::asset('assets/img/img-error2.webp')}}');">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-30">
            
        </div>
    </div>
</header>

{{-- <img class="h-20" src="https://mis.esnaad.com/communities/{{$response[0]['id']}}/header_image/{{$response[0]['header_image']}}"
> --}}


