@extends('layouts.app')

@section('content')

{{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> --}}
<div class="page-header">
    <div class="container_profile">

            <div class="col-12" id="shourtcut">
                <a href="{{ url('/') }}">Home/</a>
                <a href="#">Profile</a>

        </div>
    </div>
</div>
<br>
<br><h1 class="profile-heading">User Profile</h1>
<div class="container_profile emp-profile">

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <p class="updated">{!! session()->get('success') !!}</p></div>
        @endif

    <form  class="profile-form" method="post" action="{{ route('users.edit') }}">
        @csrf

        <div class="row">
            <div class="col-md-2">
                <div class="profile-img">
                    <img src={{asset ("img/bd702201a2b6d8960734f60f34a22754.jpg") }} alt="profile logo"/>

                </div>
            </div>
            <div class="col-md-4">
                <div class="profile-head">
                            <h5>
                             Hello {{Auth::user()->name}}
                            </h5>



                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Resrvations</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"

                 />
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-md-6">

                                        <input  type="text" id="name" name="name"   value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="email" type="text" name="email"
                                        value=" {{$user->email}} "
                                       disabled >

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="mobile_number">Phone</label>
                                    </div>
                                    <div class="col-md-6">

                                       <input id="mobile_number" type="text"  name="mobile_number"
                                         value=" {{$user->mobile_number}}"/>
                                         @error('mobile_number')
                                         <span class="badge" style="color: red">{{$message}}</span>
                                         @enderror




                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="password"> New password</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="password" type="text" name="password"
                                        {{-- value="{{$user()->password}}
                                        " --}}
                                         >
                                    </div>
                                </div>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table id="table"   class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>

                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Service name</th>
                                <th scope="col">status</th>


                                <th scope="col">Note</th>

                                <th scope="col">Action</th>


                              </tr>
                            </thead>
                            <tbody>


@php
$i=0;

@endphp

@foreach($user->services as $service)
                              <tr>

                                 <th scope="row">{{ ++$i }}</th>

                                <td> {{$service->pivot->date}}</td>
                                <td> {{$service->pivot->time}}</td>
                               
                                <td>  {{ $service->service_name }}</td>


                                <td> {{$service->pivot->status}}</td>
                                <td> {{$service->pivot->note}}</td>

                                <td> </form>
                                    <form action="{{ url('/user-profile-delete/'.$service->pivot->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit";
                                       class="btn btn-danger">Cancel reservation</button>
                                    </form>
                                </td>

                                      </tr>@endforeach

                            </tbody>
                          </table>

                    </div>
                </div>
            </div>
        </div>


</div>
@endsection
