<div class="fixed top-0 z-50 w-full z-50" >
  <nav class=" bg-white p-4 lg:p-0 lg:h-screen shadow-md"  @if($langSeg == 'ar') dir="RTL" @endif>
    <div class="flex items-center justify-center"  @if($langSeg == 'ar') dir="RTL" @endif>
      <div class="flex-1"></div>
      <div class="">
        <a href="{{ url($langSeg.'/') }}">
              <img style="height: 42px !important;" class="px-2" src="{{ asset('logo-dark-2.png') }}" alt="esnaad-logo-navbar">
          </a>
      </div>
      <div  class="flex-1" >
        <button @if($langSeg == 'ar') class="block lg:hidden text-white px-1 my-auto float-left" @else class="block lg:hidden text-white px-1 my-auto float-right" @endif  id="mobile-menu-button" aria-label="mobile-hamburger-navbar">
          <svg height="28px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" 
            viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" 
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  
            s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,
            0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
          </svg>
        </button>   
      </div>
    </div>
    
    <ul class="hidden bg-white lg:block space-y-6 pt-8 pb-4 pl-[10vw]  " >
        <li ><a href="{{ url($langSeg.'/about-us') }}" class="text-dark" rel="canonical">About</a></li>
        <li ><a href="{{ url($langSeg.'/projects') }}" class="text-dark" rel="canonical">Projects</a></li>
        <li ><a href="{{ url($langSeg.'/communities') }}" class="text-dark" rel="canonical">Communities</a></li>
        <li ><a href="{{ url($langSeg.'/constructions') }}" class="text-dark" rel="canonical">Construction</a></li>
        <li ><a href="{{ url($langSeg.'/news') }}" class="text-dark" rel="canonical">News</a></li>
        <li ><a href="{{ url($langSeg.'/contact') }}" class="text-dark" rel="canonical">Contact Us</a></li>
        <li >
          <div class="flex flex-row ...">
            <div class="p-0 py-auto my-auto">Language </div>
            <div class="p-0">
              <x-dropdown-link href="{{$finalUrlen}}">
                <img 
                    src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEXUlEQVR4nO2Yj09TVxTH+0/NCTKKOCUoKBTZpPwQZUwCbChxZrgYolkIicRsI8vi5rZs7mfCzH6VgdMMgQGR8aMi/gKFMUv7Xkv7XmlL+9q+73Lv6ys8Hq8tUp1Z3je5aZr0nnM/99x77jk1GHTp0qVLly5dz4GiHIe1WglG8Pl3D/By6W8wFltSHrJsGS8ohqzN2DIWW5B7sBudn07Dx/nh/eQiFrN3UHsqAHv+bvh/+QkQRQXIgs2HE60j/wlA4+khPJz3Ijg8BOZgsWQrcxs8755TA8iO2CNVEO7eUUAQpt6+xyiq/v2ZABRWXkXXr3MQWAbus61xG2xlGULWSWpHBRC42gNHQb7046zt4D94D2LArwBZ9gk0nDtLup8KQI7Jgrb3J8G5A1j+5iss5hrpXPJJviMSidtRAVzumkXI6wP/YSdsO16kEwmQv3t1UbKm73tQ0zyQVoDXmgeo3dDkBNiKsvi8pZMnEHHYFf6FcFQNQIyY6//AzQkWwswDOGuPxo24GuoQnp9TGImKIn7u/Rt7y3u3BJBX1oOvr8xC8PDgLnSsbl5JEVaGBlWbN3l7CYffvLExgDxa2kbBOgN098nlpmHMzqTREUMhhUGXO0jD/iQALW2jYFjZzx7Jz0sZG/pZ8kh+yDEjcxMCkEF2llyksIdT7AzJBiQrrNfElAtVb9xICUAR6ddrlJGeU0eaJJDCKmUCSQogj5o1Z5MpP5TwbIYjYlIA8rYE+dhdy9qe8K7df8ih7tSfG64rZYD12cH3/bdY3CVnh2x4L30MURBUzrUAVgb64SgqiGc77kIHRJ9v09lOBYA0SwsgXTL87wBs6xw+78OgA2ToEUBaj1C6L5mehZIo5YdsX4VUm0ejykYnvLAAV1NjfKeddbUQZmeSRmB4jFUtJjQxDsb8quKVDzsYWkLsP7xxD5ISQOv5cbg5ZVElBoP09ZVbO3veLvo6O51++lonA5CLOAcbUNoNh6VXPtYD2HfvpN95Pii9yqbu1AEqGvrwl9Wp2qmVwQE4Sg5Ii8rcRrslweWmEco3S2V1KgC0jD7UQ+siUtuvVYRl4T79dnweW1WO0O0pWKeXUN3UnxggoVFFa2dGaOoWbt1x48jx/i31AxWNfRizutSbRWom037NzVIBkLDaGY2wrineli9/oRnWJ+3IckwWtHdawfHJj6v/xytwsP7kaTQ0PgbG/Ep8Ae4z7yDMsvRiHdC4WFvtiQsqNRLGo0dw1h9bTRj1x7QBojwPT3sbDRv5MVNqQnBkGLNzPBpahhIuYKsAxtioPTmIuzPK/6mIAtevwb4vT+Mhi0bh+6EL9j250nHJyYL3s0sIeAO4+OU9+gdTKs7TAWAsttDj2fHRFHz+sAIi6vWCO9+uBnDWVK/m4ebjiNgeY2iUQWnt9ZSdphPAGBumo9fosV0vFQBx4ijcS1s7m92Pt87d3LSzpwFgjI2mMyOY/2dZG0CXLl26dOnSZXj2+hdh4D9R4Q/X/wAAAABJRU5ErkJggg==" 
                    alt="Red dot" 
                    height="auto"
                    width="auto"
                    style="height: 25px; width: 25px;"
                />
              </x-dropdown-link>
            </div>
            <div class="p-0 ">
              <x-dropdown-link href="{{$finalUrl}}">
                <img 
                    src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAcElEQVR4nO3VsQ3EMAgFUKaKUlzF7edJI1mR3HOty5T25T2JARDwiQCAfzC+Rz2ps32WqNBAM4GyQjNH3KRQidHxhkd29XuJCg10EygrNHPEXQqVGB1veGSZuUSFBtIEygrNHHFKoRKjY+dHBgCxoR+KvePZGHXRaQAAAABJRU5ErkJggg==" 
                    alt="Red dot" 
                    height="auto"
                    width="auto"
                    style="height: 25px; width: 25px;"
                />
              </x-dropdown-link>
            </div>
          </div>
          
          
        </li>
      </ul>
    
  </nav>
  
  
</div>
<div class="lg:flex-grow">
  <!-- Content Goes Here -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#mobile-menu-button').click(function() {
      $('ul').toggleClass('hidden');
    });
  });
</script>