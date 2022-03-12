@extends('admin.layout')
@section('content')
@if (session()->has('success'))
<div  style="width: 50% ; margin:2em;" class="alert alert-success alert-dismissible fade show">

    <p class="updated">{!! session()->get('success') !!}</p></div>
    @endif
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <a  href="{{url('/admin/users/add')}}">  <button type="button" class="btn btn-primary mb-3">Add new user</button></a>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name</th>

                        <th scope="col">Email</th>

                        <th scope="col">Mobile Number</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                @php
                    $i=1
                @endphp

                    @foreach ( $users as $user )


                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>{{ $user->password }}</td> --}}
                        <td>{{ $user->mobile_number }}</td>
                        <td>{{ $user->role }}</td>

                        @if($user->role !='admin')

                        <td><a  href="{{url('editUser/'.$user->id)}}"><button type="button" class="btn btn-success"> Edit</button></a>

                                <a  href="{{url('deleteUser/'.$user->id)}}"><button type="button" class="btn btn-danger"  >Delete</button></a>
                            </td>

                    </tr>   @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
