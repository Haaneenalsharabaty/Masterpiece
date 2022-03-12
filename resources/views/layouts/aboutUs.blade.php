@extends('layouts.app')

@section('content')<div  id="shourtcut" class="col-12">
            <a href="{{ url('/') }}">Home/</a>
            <a href="#">About</a>
        </div>
<div class="aboutUs-continer">
    <div class="row">


    </div>
    <div class="aboutUs-title">
       <h2> About us</h2>
    </div>
    <div class="aboutUs-content">
    <div class="aboutUs-image">
        <img src={{asset ('img/133870803_747015482880431_1008598404181133074_n.jpg') }} alt="about_us_image"/>
    </div>
    <div class="aboutUs-text">
        <p>Since we opened our doors, the concept was clear, a salon strictly for ladies needs, offering the best services as possible for a reasonable price.


            We opened our doors for ladies who desire to look their best all the time, whether for business or more pleasurable pursuits. Whether you need a haircut,makeup, or hair color, we’re conveniently located in khalda , offering a wide range of services and products tailored to our esteemed clientele.

            At BS Salon, chances are you’ll get the best services you’ve ever had, at a price that’s a bit more than any salon..</p>
    </div>
    </div>
</div>
@endsection
