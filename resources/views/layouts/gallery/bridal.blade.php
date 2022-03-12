
@extends('layouts.app')

@section('content')
 <!-- Carousel Start -->
  <div style="width: 30em" class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
                <li data-target="#header-carousel" data-slide-to="3"></li>
                <li data-target="#header-carousel" data-slide-to="4"></li>
                <li data-target="#header-carousel" data-slide-to="5" ></li>
                <li data-target="#header-carousel" data-slide-to="6"></li>


            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img
                     class="position-absolute w-100 h-100" src='{{ asset('img/133870803_747015482880431_1008598404181133074_n.jpg') }}' style="object-fit: cover;">
                    {{-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">BS salon</h3>
                            <p class="mx-md-5 px-5"> the first one-place professional beauty center in Jordan that offers all services needed for beauties & brides for all occasions.

                                We provide professional services with our expert team such as, hair styling, makeup, beauty care, nail art, tattoo and much more.</p>
                            <a id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img
                 class="position-absolute w-100 h-100" src='{{ asset('img/b2.PNG') }}' style="object-fit: cover;">
                    {{-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Bridal section</h3>
                            <p class="mx-md-5 px-5">To make our service complete, we made a private section for brides.With our certified professional team will make your day fabulous.

                            </p>
                            <a  id="slider-btn"class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img style="width:20em;" class="position-absolute w-100 h-100" src='{{ asset('img/b3.PNG') }}' style="object-fit: cover;">
                    {{-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">collection of trend-led hairstyles</h3>
                            <p class="mx-md-5 px-5">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src='{{ asset('img/b4.PNG') }}' style="object-fit: cover;">
                    {{-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">collection of trend-led hairstyles</h3>
                            <p class="mx-md-5 px-5">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img  class="position-absolute w-100 h-100" src='{{ asset('img/b5.PNG') }}' style="object-fit: cover;">
                    {{-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">collection of trend-led hairstyles</h3>
                            <p class="mx-md-5 px-5">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img  class="position-absolute w-100 h-100" src='{{ asset('img/b6.PNG') }}' style="object-fit: cover;">
                    {{-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">collection of trend-led hairstyles</h3>
                            <p class="mx-md-5 px-5">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img  class="position-absolute w-100 h-100" src='{{ asset('img/b7.PNG') }}' style="object-fit: cover;">
                    {{-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">collection of trend-led hairstyles</h3>
                            <p class="mx-md-5 px-5">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div> --}}
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img  class="position-absolute w-100 h-100" src='{{ asset('img/b1.PNG') }}' style="object-fit: cover;">
                    {{-- <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">collection of trend-led hairstyles</h3>
                            <p class="mx-md-5 px-5">Ready to head out to the salon for a restyle? Let our wide ranging collection of trend-led hairstyles and colours inspire you.</p>
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
                        </div>
                    </div> --}}
                </div>


            </div>
        </div>
    </div>

     <!-- Carousel End -->
     <!-- prices start -->
   {{-- <div class="btn_book">

<a   style="float: left" id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Make Appointment</a>
      </div> --}}
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

         </tbody>
       </table>
 </div>
       <!-- prices end -->
      @endsection
