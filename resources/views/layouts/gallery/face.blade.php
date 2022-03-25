
@extends('layouts.app')

@section('content')
 <!-- Carousel Start -->
  <div id="slider" class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
                <li data-target="#header-carousel" data-slide-to="3"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img   class="position-absolute w-100 h-100" src='{{ asset('img/service-1.jpg') }}' style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ url('/book') }}">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img   class="position-absolute w-100 h-100" src='{{ asset('img/f2.PNG') }}' style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ url('/book') }}">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img  class="position-absolute w-100 h-100" src='{{ asset('img/f3.PNG') }}' style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ url('/book') }}">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img  class="position-absolute w-100 h-100" src='{{ asset('img/f1.PNG') }}' style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <a  id="slider-btn" class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ url('/book') }}">Make Appointment</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

     <!-- Carousel End -->
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

         </tbody>
       </table>
 </div>
       <!-- prices end -->
      @endsection
