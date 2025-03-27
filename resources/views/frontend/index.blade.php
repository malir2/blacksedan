@extends('frontend.layout.app')
@section('title', 'Home')
@section('content')

<div>
  <div class="d-flex justify-content-center align-items-center home-page-hero hero-section">
    <div class="p-4 hero-intro-section">
      <h1 class="mx-4 pt-2 intro-content fade-in">
        PRIVATE CHAUFFEUR SERVICE IN CALGARY
      </h1>
      <div class="d-flex pb-2 justify-content-center mt-3 fade-in-delayed">
        <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4 rounded"
          ><span class="fw-bold">Book Now</span></a
        >
      </div>
    </div>
  </div>

  <!-- Services Section -->
  <div class="py-5 services-section">
    <div class="container-custom py-3 py-md-5">
      <div class="row">
        <div class="col-md-4 px-0">
          <div class="mb-3 service-heading-border"></div>
          <h1 class="mb-0 text-black">Our Services</h1>
        </div>
        <div class="col-md-8 px-0">
          <p class="mb-0 services-section-para slide-top">
            Black Sedan is a private limo company based in Calgary. We
            provide luxury transportation services for any occasion,
            offering a fleet of elegant, well-maintained vehicles to ensure
            comfort and style. We provide various services, such as the
            following:
          </p>
        </div>
      </div>
      <div class="mt-5">
        <div class="d-flex flex-wrap gap-4 custom-flex">
          <div class="py-5 bg-black service-card">
                  <h4 class="text-white font-600 font-lato pointer">Airport Limo Service</h4>
                  <div class="position-relative mt-4 card-border">
                      <div class="position-absolute card-inner-border"></div>
                  </div>
                  <div class="d-flex flex-column inner-section">
                      <p class="text-white mt-4 card-content font-lato">Travel to and from Calgary International Airport (YYC) in luxury and comfort with our professional and proficient chauffeurs.</p>
                      <div class="mt-auto">
                          <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4-white rounded pointer"><span>Book Now</span></a>
                      </div>
                  </div>
              
          </div>
          <div class="py-5 bg-black service-card">
              <h4 class="text-white font-600 font-lato">Canmore/Banff/Lake Louise</h4>
              <div class="position-relative mt-4 card-border">
                  <div class="position-absolute card-inner-border"></div>
              </div>
              <div class="d-flex flex-column inner-section">
                  <p class="text-white mt-4 card-content font-lato">Black Sedan has experienced chauffeurs that can guide you through the scenic Rocky ountains in your cozy and comfortable limo on your way to one of the world’s most popular vacation destinations.</p>
                  <div class="mt-auto">
                      <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4-white rounded"><span>Book Now</span></a>
                  </div>
              </div>
          </div>
          <div class="py-5 bg-black service-card">
              <h4 class="text-white font-600 font-lato">City Trip</h4>
              <div class="position-relative mt-4 card-border">
                  <div class="position-absolute card-inner-border"></div>
              </div>
              <div class="d-flex flex-column inner-section">
                  <p class="text-white mt-4 card-content font-lato">Tour the city of Calgary and its famous landmarks in our luxurious and clean cars, where our experienced chauffeurs can take you to your hotel or residence.</p>
                  <div class="mt-auto">
                      <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4-white rounded"><span>Book Now</span></a>
                  </div>
              </div>
          </div>
          <div class="py-5 bg-black service-card">
              <h4 class="text-white font-600 font-lato">Corporate Car Service</h4>
              <div class="position-relative mt-4 card-border">
                  <div class="position-absolute card-inner-border"></div>
              </div>
              <div class="d-flex flex-column inner-section">
                  <p class="text-white mt-4 card-content font-lato">Black Sedan understands the importance of time and offers priority limo service to existing and long-lasting corporate partners. Experience executive and exclusive limo service on your next corporate get together or business meeting by using our services.</p>
                  <div class="mt-auto">
                      <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4-white rounded"><span>Book Now</span></a>
                  </div>
              </div>
          </div>
          <div class="py-5 bg-black service-card">
              <h4 class="text-white font-600 font-lato">Special Events</h4>
              <div class="position-relative mt-4 card-border">
                  <div class="position-absolute card-inner-border"></div>
              </div>
              <div class="d-flex flex-column inner-section">
                  <p class="text-white mt-4 card-content font-lato">Add grace to all your important events with Black Sedan. We make sure the transportation is effortless and your weddings, graduation, anniversaries and more are memorable.</p>
                  <div class="mt-auto">
                      <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4-white rounded"><span>Book Now</span></a>
                  </div>
              </div>
          </div>
          <div class="py-5 bg-black service-card">
              <h4 class="text-white font-600 font-lato">Surrounding Areas</h4>
              <div class="position-relative mt-4 card-border">
                  <div class="position-absolute card-inner-border"></div>
              </div>
              <div class="d-flex flex-column inner-section">
                  <p class="text-white mt-4 card-content font-lato">We cater to all your needs. Travel to and from Calgary to other locations such as Lethbridge, Edmonton, Red Deer, Medicine Hat, and more!</p>
                  <div class="mt-auto">
                      <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4-white rounded"><span>Book Now</span></a>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Fleet Section --}}
  <div class="py-5 container-custom fleet-section">
    <div class="mb-3 mt-5 heading-border"></div>
    <h1 class="mb-0 text-black text-center">Our Fleet</h1>
    <div class="mt-4 pt-3 fleet-cards">
      <div class="fleet-card">
        <div class="p-3 fleet-card-inner">
          <div class="position-relative fleet-card-image">
            <div class="image-shade"></div>
            <img src="{{ asset("frontend/images/car1.webp") }}" alt="Car 1"  />
          </div>
          <div class="p-3">
            <h4>Lincoln Aviator Sedan</h4>
            <ul class="px-3 mb-0">
              <li>3 pieces of luggage</li>
              <li>up-to 3 passengers maximum</li>
            </ul>
            <p class="mb-0 fw-bold">...</p>
            <div class="mt-4">
              <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4 rounded fleet-btn"><span class="fw-bold">Book Now</span>
              </a>
            </div>
          </div>
        </div>
        <div class="fleet-card-border-bottom"></div>
      </div>
      <div class="fleet-card">
        <div class="p-3 fleet-card-inner">
          <div class="position-relative fleet-card-image">
            <div class="image-shade"></div>
            <img src="{{ asset("frontend/images/car2.webp") }}" alt="Car 1"  />
          </div>
          <div class="p-3">
            <h4>Cadillac Lyriq Sedan</h4>
            <ul class="px-3 mb-0">
              <li>3 pieces of luggage</li>
              <li>up-to 3 passengers maximum</li>
            </ul>
            <p class="mb-0 fw-bold">...</p>
            <div class="mt-4">
              <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4 rounded fleet-btn"><span class="fw-bold">Book Now</span>
              </a>
            </div>
          </div>
        </div>
        <div class="fleet-card-border-bottom"></div>
      </div>
      <div class="fleet-card">
        <div class="p-3 fleet-card-inner">
          <div class="position-relative fleet-card-image">
            <div class="image-shade"></div>
            <img src="{{ asset("frontend/images/car3.webp") }}" alt="Car 1"  />
          </div>
          <div class="p-3">
            <h4>GMC Yukon Denali Xl SUV</h4>
            <ul class="px-3 mb-0">
              <li>6 pieces of luggage</li>
              <li>up-to 6 passengers maximum</li>
            </ul>
            <p class="mb-0 fw-bold">...</p>
            <div class="mt-4">
              <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4 rounded fleet-btn"><span class="fw-bold">Book Now</span>
              </a>
            </div>
          </div>
        </div>
        <div class="fleet-card-border-bottom"></div>
      </div>
      <div class="fleet-card">
        <div class="p-3 fleet-card-inner">
          <div class="position-relative fleet-card-image">
            <div class="image-shade"></div>
            <img src="{{ asset("frontend/images/car4.webp") }}" alt="Car 1"  />
          </div>
          <div class="p-3">
            <h4>Chevrolet Suburban SUV</h4>
            <ul class="px-3 mb-0">
              <li>6 pieces of luggage</li>
              <li>up-to 6 passengers maximum</li>
            </ul>
            <p class="mb-0 fw-bold">...</p>
            <div class="mt-4">
              <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4 rounded fleet-btn"><span class="fw-bold">Book Now</span>
              </a>
            </div>
          </div>
        </div>
        <div class="fleet-card-border-bottom"></div>
      </div>
      <div class="fleet-card">
        <div class="p-3 h-100 fleet-card-inner">
          <div class="position-relative fleet-card-image">
            <div class="image-shade"></div>
            <img src="{{ asset("frontend/images/car5.jpg") }}" alt="Car 1"  />
          </div>
          <div class="p-3">
            <h4>Ford Transit Sprinter</h4>
            <ul class="px-3 mb-0">
              <li>8 pieces of luggage</li>
              <li>up-to 10 passengers maximum</li>
            </ul>
            <p class="mb-0 fw-bold">...</p>
            <div class="mt-4">
              <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4 rounded fleet-btn"><span class="fw-bold">Book Now</span>
              </a>
            </div>
          </div>
        </div>
        <div class="fleet-card-border-bottom"></div>
      </div>
      <div class="fleet-card">
        <div class="p-3 fleet-card-inner">
          <div class="position-relative fleet-card-image">
            <div class="image-shade"></div>
            <img src="{{ asset("frontend/images/car6.webp") }}" alt="Car 1"  />
          </div>
          <div class="p-3">
            <h4>Dodge Ram Stretch Limousine</h4>
            <ul class="px-3 mb-0">
              <li>half ton of luggage</li>
              <li>up-to 15 passengers maximum</li>
            </ul>
            <p class="mb-0 fw-bold">...</p>
            <div class="mt-4">
              <a href="#bookNowModal" data-bs-toggle="modal" class="btn-4 rounded fleet-btn"><span class="fw-bold">Book Now</span>
              </a>
            </div>
          </div>
        </div>
        <div class="fleet-card-border-bottom"></div>
      </div>
    </div>
    <div class="py-5 mb-4"></div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $('.fleet-cards').slick({
      slidesToShow: 3, // Show 3 cards by default
      slidesToScroll: 1, // Scroll one card at a time
      infinite: false, // Infinite looping
      draggable: true, // Enable dragging
      arrows: true, // Show navigation buttons
      autoplay:true,
      autoplaySpeed: 2000,
      prevArrow: '<button type="button" class="slick-prev"><span class="fa-solid fa-angle-left arrows"></span></button>',
      nextArrow: '<button type="button" class="slick-next"><span class="fa-solid fa-angle-right arrows"></span></button>',
      responsive: [
        {
            breakpoint: 991, // On screens smaller than 767px
            settings: {
                slidesToShow: 2, // Show 2 cards
            },
        },
        {
            breakpoint: 575, // On screens smaller than 575px
            settings: {
                slidesToShow: 1, // Show 1 card
            },
        },
      ],
    });
  });
</script>
@endsection