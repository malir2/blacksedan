@extends('frontend.layout.app')
@section('title', 'Our Services')
@section('content')

<div>
  <div class="d-flex justify-content-center align-items-center home-page-hero hero-section services-hero">
    <div class="py-4 px-2 hero-intro-section services-intro-section">
      <h1 class="mx-2 pt-2 intro-content fade-in">
        TOP-TIER LIMO SERVICE, TAILORED TO YOUR BUDGET
      </h1>
      <div class="d-flex pb-2 justify-content-center mt-3 fade-in-delayed">
        <a href="#" class="btn-4 rounded"
          ><span class="fw-bold">Book Now</span>
        </a>
      </div>
    </div>
  </div>
  <div class="mt-5 services-container">
    <div class="bg-white py-5">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3 service-heading-border"></div>
          <h1 class="mb-0 text-black font-600 services-headings">Services in Calgary and Surrounding Areas</h1>
        </div>
        <div class="col-md-6">
          <p class="mb-0 services-section-para">Black Sedan offers transportation services in Calgary and surrounding areas. Our services include airport transfers, corporate events, special occasions, Canmore/Banff/Lake Louise, and more! We make sure that customers are offered affordable luxury with exceptional service.</p>
        </div>
      </div>
      <div class="row pt-3 my-5">
        <div class="col-md-6">
          <div class="mb-3 service-heading-border"></div>
          <h1 class="mb-0 text-black font-600 services-headings">24//7 Limousine Service</h1>
        </div>
        <div class="col-md-6">
          <p class="mb-0 services-section-para">Black Sedan offers limo services around the clock. We make sure you get to your destination on time, anytime.</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection