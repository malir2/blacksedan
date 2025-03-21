@extends('frontend.layout.app')
@section('title', 'About Us')
@section('content')

<div>
    <div class="d-flex justify-content-center align-items-center home-page-hero fleet-page-hero about-hero hero-section">
        <div class="py-4 px-2 hero-intro-section fleet-intro-section">
          <h1 class="mx-2 pt-2 intro-content fade-in">
            WHERE ELEGANCE MEETS AFFORDABILITY
          </h1>
          <div class="d-flex pb-2 justify-content-center mt-3 fade-in-delayed">
            <a href="#" class="btn-4 rounded"
              ><span class="fw-bold">Book Now</span></a
            >
          </div>
        </div>
      </div>

      {{-- Fleet Section --}}
    <div class="pb-5 pt-2 container-custom about-section">
        <div class="mb-3 mt-5 heading-border"></div>
        <h1 class="mb-0 text-black">Welcome to Black Sedan</h1>
        
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