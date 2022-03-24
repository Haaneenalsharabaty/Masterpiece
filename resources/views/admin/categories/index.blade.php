@extends('admin.layout')
@section('content')
@if (session()->has('success'))
<div  style="width: 50%;margin:2em;" class="alert alert-success alert-dismissible fade show">

    <p class="updated">{!! session()->get('success') !!}</p></div>
    @endif
<div class="col-12">
    <div class="bg-light rounded h-100 p-4">

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <a  href="{{url('/admin/catergories/add')}}">  <button type="button" class="btn btn-primary mb-3">Add new Gategory</button></a>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>




                    </tr>
                </thead>
                <tbody>
                @php
                    $i=1
                @endphp

                    @foreach ( $categories as $category )


                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $category->category_name }}</td>


                        <td>
                            <a  href="{{url('editCategory/'.$category->id)}}">
                                <button type="button" class="btn btn-success"> Edit</button>
                            </a>

                                <a  href="{{url('deleteCategory/'.$category->id)}}">
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
