@extends('admin.layout')
@section('content')
@if (session()->has('success'))
<div  style="width: 50%" class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        {{-- <span aria-hidden="true">×</span> --}}
    </button>
    <p class="updated">{!! session()->get('success') !!}</p></div>
    @endif

<div class="container mt-4">
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" method="post"
                        action='{{url('editCategory/'.$category->id)}}'>

                            @csrf
                            @method('PUT')
                            <div class="controls ">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name"> Name *</label>
                                    <input id="form_name" type="text" name="category_name"   value="{{$category->category_name}}" class="form-control" placeholder="Please enter your  Category Name *"  data-error="category name is required.">
                                 </div>
                                        @error('category_name')
                                        <span class="badge" style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-md-12 mt-3"> <input style="width: 10em" type="submit" class="btn btn-success btn-send pt-2 mt-2 btn-block " value="submit"> </div>

                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
@endsection
