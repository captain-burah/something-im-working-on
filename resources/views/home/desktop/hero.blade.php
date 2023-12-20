
<style>
        video {
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;

        }
        .video-wrapper {
            width: 100vw;
            height: 100vh;
            position: relative;
            overflow: hidden;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

</style>


<div class="video-wrapper bg-hero bg-cover bg-no-repeat bg-top object-cover overflow-hidden max-w-full h-[70vh] ">
    <div class="relative isolate  h-full flex flex-1 flex-col justify-between">
        <div></div>
    
        <video name="ESNAAD" playsinline autoplay muted loop poster="/developments/6.jpg" class="mt-[5rem]">
            {{-- <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4"> --}}
            <source src="{{ asset('videos/1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.

        </video>


    </div>
</div>
