@extends('frontend.layout.app')
@section('title', 'Home')
@section('content')

<div>
    <div
      class="d-flex justify-content-center align-items-center home-page-hero hero-section"
    >
      <div class="p-4 hero-intro-section">
        <h1 class="mx-4 pt-2 intro-content fade-in">
          PRIVATE CHAUFFEUR SERVICE IN CALGARY
        </h1>
        <div class="d-flex pb-2 justify-content-center mt-3 fade-in-delayed">
          <a href="#" class="btn-4 rounded"
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
            <div class="d-flex flex-3 gap-4">
                <div class="py-5 bg-black service-card">
                        <h4 class="text-white font-600 font-lato">Airport Limo Service</h4>
                        <div class="position-relative mt-4 card-border">
                            <div class="position-absolute card-inner-border"></div>
                        </div>
                        <div class="d-flex flex-column inner-section">
                            <p class="text-white mt-4 card-content font-lato">Travel to and from Calgary International Airport (YYC) in luxury and comfort with our professional and proficient chauffeurs.</p>
                            <div class="mt-auto">
                                <a href="#" class="btn-4-white rounded"><span>Book Now</span></a>
                            </div>
                        </div>
                    
                </div>
                <div class="py-5 bg-black service-card">
                    <h4 class="text-white font-600 font-lato">Airport Limo Service</h4>
                    <div class="position-relative mt-4 card-border">
                        <div class="position-absolute card-inner-border"></div>
                    </div>
                    <div class="d-flex flex-column inner-section">
                        <p class="text-white mt-4 card-content font-lato">Travel to and from Calgary International Airport (YYC) in luxury and comfort with our professional and proficient chauffeurs.</p>
                        <div class="mt-auto">
                            <a href="#" class="btn-4-white rounded"><span>Book Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="py-5 bg-black service-card">
                    <h4 class="text-white font-600 font-lato">Airport Limo Service</h4>
                    <div class="position-relative mt-4 card-border">
                        <div class="position-absolute card-inner-border"></div>
                    </div>
                    <div class="d-flex flex-column inner-section">
                        <p class="text-white mt-4 card-content font-lato">Travel to and from Calgary International Airport (YYC) in luxury and comfort with our professional and proficient chauffeurs.</p>
                        <div class="mt-auto">
                            <a href="#" class="btn-4-white rounded"><span>Book Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection