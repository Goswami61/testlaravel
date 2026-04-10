<x-app-layout>
  
    <div class="container-fluid pt-5">
        <div id="slider" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/1.jpg') }}" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/1.jpg') }}" class="d-block w-100">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('images/1.jpg') }}" class="d-block w-100">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>
    <!-- Slider End -->

    <!-- About Us Start -->
    <div class="container my-5" id="about">
        <h1 class="font-semibold text-xl fs-3 text-gray-800 leading-tight">
            {{ __('About us') }}
        </h1>
        <div class="row">
            <div class="container my-5 col-md-6 col-sm-12">
               <img src="{{asset('images/aboutus.jpg')}}" alt="About us">
            </div>

            <div class="container my-5 col-md-6 col-sm-12">
                <h4 class="font-semibold text-lg fs-4">Why choose us.?</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, unde harum praesentium expedita ea illum deleniti alias culpa repudiandae minus error reiciendis quas ab sed numquam labore voluptatem reprehenderit magnam.</p>
            
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, unde harum praesentium expedita ea illum deleniti alias culpa repudiandae minus error reiciendis quas ab sed numquam labore voluptatem reprehenderit magnam.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, unde harum praesentium expedita ea illum deleniti alias culpa repudiandae minus error reiciendis quas ab sed numquam labore voluptatem reprehenderit magnam.</p>
            
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, unde harum praesentium expedita ea illum deleniti alias culpa repudiandae minus error reiciendis quas ab sed numquam labore voluptatem reprehenderit magnam.</p>

            </div>


        </div>
    </div>
     <!-- About Us End -->
      <!-- Testimonials Start -->
    <div class="container my-5" id="testimonial">
        <h1 class="font-semibold text-xl fs-3 text-gray-800 leading-tight">
            {{ __('Testimonials') }}
        </h1>
        <div class="row">


            <div class="container my-5 col-md-3 col-sm-6">
                <img src="{{asset('images/aboutus.jpg')}}" alt="About us">
                <h6 class="font-semibold text-lg fs-6">John</h6>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, unde harum praesentium expedita ea illum deleniti alias culpa repudiandae minus error reiciendis quas ab sed numquam labore voluptatem reprehenderit magnam.</p>
            </div>

            <div class="container my-5 col-md-3 col-sm-6">
                <img src="{{asset('images/aboutus.jpg')}}" alt="About us">
                <h6 class="font-semibold text-lg fs-6">Jack</h6>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, unde harum praesentium expedita ea illum deleniti alias culpa repudiandae minus error reiciendis quas ab sed numquam labore voluptatem reprehenderit magnam.</p>
            </div>

            <div class="container my-5 col-md-3 col-sm-6">
                <img src="{{asset('images/aboutus.jpg')}}" alt="About us">
                <h6 class="font-semibold text-lg fs-6">Mack</h6>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, unde harum praesentium expedita ea illum deleniti alias culpa repudiandae minus error reiciendis quas ab sed numquam labore voluptatem reprehenderit magnam.</p>
            </div>

            <div class="container my-5 col-md-3 col-sm-6">
                <img src="{{asset('images/aboutus.jpg')}}" alt="About us">
                <h6 class="font-semibold text-lg fs-6">Julli</h6>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, unde harum praesentium expedita ea illum deleniti alias culpa repudiandae minus error reiciendis quas ab sed numquam labore voluptatem reprehenderit magnam.</p>
            </div>


        </div>
    </div>

      <!-- Testimonials End -->
</x-app-layout>