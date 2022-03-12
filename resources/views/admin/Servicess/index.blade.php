@extends('admin.layout')
@section('content')
@if (session()->has('success'))
<div  style="width: 50%; margin:2em;" class="alert alert-success alert-dismissible fade show">

    <p class="updated">{!! session()->get('success') !!}</p></div>
    @endif
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">

        <div class="table-responsive">
            <table class="table">
                <thead>  <a  href="{{url('/admin/services/add')}}">  <button type="button" class="btn btn-primary mb-3">Add new service</button></a>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">  service Name</th>

                        <th scope="col">Price</th>

                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                @php
                    $i=1
                @endphp

                    @foreach ( $services as $service )


                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $service->service_name }}</td>
                        <td>{{ $service->price}}</td>



                        <td>
                            <a  href="{{url('editService/'.$service->id)}}">
                                <button type="button" class="btn btn-success"> Edit</button>
                            </a>

                                <a  href="{{url('deleteService/'.$service->id)}}">
                                    <button type="button" class="btn btn-danger"  >Delete</button>
                                </a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
