
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
      <div class="card home" style="border-radius: 5em;">
        <img class="card-img-top" src={{ asset('img/nails.jpg') }} alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nails section</h5>
          <p class="card-text">offers many services for our client.including manicures, pedicures, nail polish , nail repair,nail design,extension, fake nails.</p>
          <a href="{{ url('/gallery') }}" id="card_btn" class="btn btn-primary">Show all </a>
        </div>
      </div>
      <div class="card home" style="border-radius: 5em;">
        <img class="card-img-top" src={{ asset('img/stylist-cutting-hair.jpg') }} alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Hair section</h5>
          <p class="card-text">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
          <a href="{{ url('/hair-gallery') }}" id="card_btn" class="btn btn-primary">Show all </a>
        </div>
      </div>
      <div class="card home" style="border-radius: 5em;">
        <img class="card-img-top" src={{ asset('img/141736725_763844297864216_5928760459472082522_n.jpg') }} alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Bridal section</h5>
          <p class="card-text">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
          <a href="{{ url('/bridal-gallery') }}" id="card_btn" class="btn btn-primary">Show all</a>
        </div>
      </div>
      <div class="card home" style=" border-radius: 5em;">
        <img class="card-img-top" src={{ asset('img/service-1.jpg') }} alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">face and body section</h5>
          <p class="card-text">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
         <a href="{{ url('/face-gallery') }}" id="card_btn" class="btn btn-primary">Show all </a>
        </div>
      </div>
    </div>
</section>


        <!-- services start -->
        <!-- prices start -->

        @php
        $i=1
    @endphp
    <div id="price_table">
        <h2> Our prices</h2>
        <table id="table"    class="table table-striped">



            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">service </th>
                <th scope="col">price(start from*)</th>

              </tr>
            </thead> @foreach ( $services as $service )
            <tbody>
              <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $service->service_name}}</td>
                <td>{{ $service->price}}JD</td>

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
    </div>
          <!-- prices end -->
           <!-- Testimonial Start -->

           <section class="home-testimonial">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center testimonial-pos">

                    <div class="col-md-12 d-flex justify-content-center">
                        <h2>Testimonials</h2>
                    </div>
                </div>
                <section class="home-testimonial-bottom">
                    <div class="container testimonial-inner">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">“I've been with the Salon BS Experience for over a year now. Consistent cuts and experience.”</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Haya</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">“One of the best salon experiences I've ever had! the aroma therapy head massagewas amizing.”</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Ruba</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 style-3">
                                <div class="tour-item ">
                                    <div class="tour-desc bg-white">
                                        <div class="tour-text color-grey-3 text-center">“5-star service & haircut! I've never been more comfortable,they more importantly educate about your hair.”</div>
                                        <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                        <div class="link-name d-flex justify-content-center">Farah</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
        </section>

    <!-- Testimonial End -->

@endsection





