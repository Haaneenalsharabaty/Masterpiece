@extends('layouts.app')
@section('content')

<div class="page-header ">
    <div class="book.container">
        <div id="book-container"class="row">
            <div  class="col-12">
                <h2>Book an appointment</h2>
            </div>
            <div id="shourtcut" class="col-12">
                <a href="{{ url('/') }}">Home/</a>
                <a href="#">Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Booking Start -->
<div class="booking">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="booking-content">
                    <div class="section-header">
                        <p>Book an appointment</p>
                        <h2>Book your service for any date or time</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            reserve you appointmevt anytime and from any device. it is easy to use and reservations are instantly confirmed in real-time.
                        </p>
                        <p>

Saturday - Friday </p>
<p>

10 :00  - 18:30 </p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="booking-form">
                    @if (session()->has('success'))
                    <div  style="width: 100%" class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <p class="updated">{!! session()->get('success') !!}</p></div>
                        @endif

                    <form  method="post" action="{{route('book.store') }}"
                        >
                        @csrf



                        <div class="control-group">
                            <div class="input-group">
                                <input type="text" id="mobile_number" class="form-control" placeholder="Mobile"  name="mobile_number"required="required" />
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-mobile-alt"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">

                                <input type="date" min="{{date("Y-m-d")}}" class="form-control datetimepicker-input" placeholder="Date" name="date" data-target="#date" data-toggle="datetimepicker"
                                />

                        </div>
                        <div class="control-group">
                            <select  class="custom-select form-control" id="time" name="time">
                                <option >Select Time</option>
                                <option value="10:00Am-11:30Am">10:00-11:30</option>
                                <option value="11:45-13:00">11:45-13:00</option>
                                <option value="13:15-14:45">13:15-14:45</option>
                                <option value="15:00-16:30">15:00:-16:30</option>
                                <option value="16:45-18:15">16:45-18:15</option>

                   </select>

                        </div>

                        <div class="control-group">
                            <div class="input-group">
                                <select style="
                                background-color: rgb(210 89 161);;" class="custom-select form-control" name="service_name">
                                    <option selected>Service Name</option>
                                    @foreach($services as $oneservice)
                                    <option value="{{ $oneservice->id }}">{{ $oneservice->service_name }} </option>
                                    @endforeach
                                </select>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">

                            <textarea  rows="3" class="form-control" id="message" name="note" placeholder="write you note here if you want it tell us more about the service "  data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <script> function error(){
                                alert("you must login befor booking")
                            }</script>
                            @if(!Auth::check())
                            <button  onclick="error()" class="btn custom-btn" type="submit">Book Now</button>
                            @else
                            <button class="btn custom-btn" type="submit">Book Now</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->


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
