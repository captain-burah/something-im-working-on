
{{-- <style>
    .owl-dots {
    text-align: center;
    padding-top: 15px;
    padding-bottom: 25px;
    }
    .owl-dots button.owl-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    display: inline-block;
    background: #ccc;
    margin: 0 3px;
    }
    .owl-dots button.owl-dot.active {
    background-color: #000;
    }
    .owl-dots button.owl-dot:focus {
    outline: none;
    }
    .owl-nav button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.38) !important;
    }
</style> --}}
<div class="bg-footer sm:mx-auto mx-0 px-0 my-0 mx-auto sm:h-[25vh] xl:h-[50vh]">
    <div class="row-span-2 h-[100%] w-[100%]">
        <div class="owl-carousel">
          <div class="item">  
              <img class="p-0 m-0" src="{{ asset('developments/14.jpg') }}">
          </div>
          <div class="item">  
              <img class="p-0 m-0" src="{{ asset('developments/11.jpg') }}">
          </div>
          <div class="item">  
              <img class="p-0 m-0" src="{{ asset('developments/10.jpg') }}">
          </div>
          <div class="item">  
              <img class="p-0 m-0" src="{{ asset('developments/8.jpg') }}">
          </div>
      </div>   
    </div>
</div>


<script>
    $(document).ready(function(){  
        $('.owl-carousel').owlCarousel({
            margin:10,
            center:true,
            dots: true,
            startPosition: 1,
            responsive:{
                0:{
                    items:1.25
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })
    });
</script>