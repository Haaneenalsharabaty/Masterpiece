@extends('admin.layout')
@section('content')


       <!-- Sale & Revenue Start -->
       <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i style=" color: #d259a1!important;" class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today Users</p>
                        {{-- {{ dd($allUsers) }} --}}
                        <h6  style=" color: #d259a1!important;"class="mb-0">{{count($allUsers)}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i   style=" color: #d259a1!important;"class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Services</p>
                        <h6 style=" color: #d259a1!important;" class="mb-0">{{count($allService)}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i  style=" color: #d259a1!important;"class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today Category</p>
                        <h6 class="mb-0">{{count($allCategory)}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i style=" color: #d259a1!important;" class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Contact</p>
                        <h6 class="mb-0">{{count($allcontact)}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->
    <div class="container-fluid pt-4 px-4">

        <div class="bg-light text-center rounded p-4">
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}
                            {{-- <th></th> --}}
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">service Name</th>
                            <th scope="col">Mobile Number</th>

                            <th scope="col">Date</th>
                            <th scope="col">time</th>
                            <th scope="col">status</th>
                            <th scope="col">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            @foreach ($user->services as $oneservice )
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                                    </td>
                                    {{-- <td>{{$oneservice->pivot->oneservice_id}}</td> --}}

                                    <td>
                                    @foreach ($allService as $service )
                                        @if ($service->id===$oneservice->pivot->service_id)
{{ $service->service_name }}
                                        @endif
                                    @endforeach







                                    </td>

                                    <td>{{$oneservice->pivot->mobile_number}}</td>

                                    <td>{{$oneservice->pivot->date}}</td>
                                    <td>{{$oneservice->pivot->time}}</td>
                                    <td>

                                        <form action="{{URL::to('/admin/dashboard/' . $oneservice->pivot->user_id . '/update/' . $oneservice->pivot->id)}}" method="post">
                                            @csrf
                                            @method('put')
                                            <select class="form-select" name="status" onchange="this.form.submit()">
                                                <option value="{{$oneservice->pivot->status}}">{{$oneservice->pivot->status}}</option>

                                                @foreach ($allStatus as $status)
                                                    @if ($status == $oneservice->pivot->status )
                                                        @php
                                                            continue
                                                        @endphp
                                                    @endif
                                                <option value="{{$status}}">{{$status}}</option>
                                                @endforeach

                                            </select>

                                            <input type="hidden" name="user_id" value="{{$oneservice->pivot->user_id}}">
                                            <input type="hidden" name="service_id" value="{{$oneservice->pivot->service_id}}">
                                            <input type="hidden" name="mobile_number" value="{{$oneservice->pivot->mobile_number}}">

                                            <input type="hidden" name="date" value="{{$oneservice->pivot->date}}">
                                            <input type="hidden" name="time" value="{{$oneservice->pivot->time}}">
                                            <input type="hidden" name="note" value="{{$oneservice->pivot->note}}">

                                        </form>
                                    </td>
                                    <td>
                                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3" readonly>{{$oneservice->pivot->note}}</textarea>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Footer Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded-top p-4">
            <div class="row">
                <div style=" color: #d259a1!important;" class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#">BS Salon</a>, All Right Reserved.
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com">Haneen Alsharabaty</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</div>
<!-- Content End -->
@endsection
