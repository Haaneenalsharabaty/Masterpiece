
@extends('layouts.app')

@section('content')
 <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src='{{ asset('img/carousel2.jpg') }}' style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">BS salon</h3>
                            <p class="mx-md-5 px-5"> the first one-place professional beauty center in Jordan that offers all services needed for beauties & brides for all occasions.

                                We provide professional services with our expert team such as, hair styling, makeup, beauty care, nail art, tattoo and much more.</p>
                            <a id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src='{{ asset('img/133870803_747015482880431_1008598404181133074_n.jpg') }}' style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Bridal section</h3>
                            <p class="mx-md-5 px-5">To make our service complete, we made a private section for brides.With our certified professional team will make your day fabulous.

                            </p>
                            <a  id="slider-btn"class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src='{{ asset('img/147671408_772665770315402_5210615345362085253_n.jpg') }}' style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">collection of trend-led hairstyles</h3>
                            <p class="mx-md-5 px-5">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Carousel End -->
      <!-- services start -->

<section class="services">
    <h2> Our Sections</h2>
    <div class="services-container">
      <div class="card home" style="width: 18rem;border-radius: 5em;">
        <img class="card-img-top" src={{ asset('img/nails.jpg') }} alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nails section</h5>
          <p class="card-text">offers many services for our client.including manicures, pedicures, nail polish , nail repair,nail design,extension, fake nails.</p>
          <a href="#" id="card_btn" class="btn btn-primary">Show all </a>
        </div>
      </div>
      <div class="card home" style="width: 18rem;border-radius: 5em;">
        <img class="card-img-top" src={{ asset('img/stylist-cutting-hair.jpg') }} alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Hair section</h5>
          <p class="card-text">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
          <a href="#" id="card_btn" class="btn btn-primary">Show all </a>
        </div>
      </div>
      <div class="card home" style="width: 18rem;border-radius: 5em;">
        <img class="card-img-top" src={{ asset('img/141736725_763844297864216_5928760459472082522_n.jpg') }} alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Bridal section</h5>
          <p class="card-text">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
          <a href="#" id="card_btn" class="btn btn-primary">Show all</a>
        </div>
      </div>
      <div class="card home" style="width: 18rem; border-radius: 10em;">
        <img class="card-img-top" src={{ asset('img/service-1.jpg') }} alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">face and body section</h5>
          <p class="card-text">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
          <a href="#" id="card_btn" class="btn btn-primary">Show all </a>
        </div>
      </div>
    </div>
</section>


        <!-- services start -->
        <!-- prices start -->

        @php
        $i=1
    @endphp
        <table class="table table-striped">



            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">service </th>
                <th scope="col">price</th>

              </tr>

            </thead>
            <tbody>
              <tr> @foreach ( $services as $service )
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $service->service_name}}</td>
                <td>{{ $service->price}}</td>

              </tr>
              @endforeach
              {{-- <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr> --}}
            </tbody>
          </table>
          <!-- prices end -->
           <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="img/testimonial.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
                    <h1 class="mb-4">What Our Clients Say!</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection





