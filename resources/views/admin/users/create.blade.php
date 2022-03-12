@extends('admin.layout')
@section('content')
<div class="container mt-4">
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" method="post"
                        action="{{route('admin.users.store')}}">

                            @csrf
                            @method('Post')
                            <div class="controls ">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name"> Name *</label> <input id="form_name" type="text" name="name"    class="form-control" placeholder="Please enter your Name *" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    @error('name')
                                    <span class="badge" style="color: red">{{$message}}</span>
                                    @enderror

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">

                                     <div class="form-group"> <label for="form_email"> Email*</label> <input id="form_email" type="text" name="email"  class="form-control" placeholder="Please enter your email *"  required="required" data-error="Valid email is required."> </div>
                                     @error('email')
                                     <span class="badge" style="color: red">{{$message}}</span>
                                     @enderror
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_password"> Password*</label> <input id="form_email" type="text" name="password"   class="form-control" placeholder="Please enter your new password *"  data-error="Valid password is required."> </div>
                                        @error('password')
                                        <span class="badge" style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Mobile number *</label> <input id="form_name" type="text" name="mobile_number"    class="form-control" placeholder="Please enter your mobile number *" required="required" data-error="Firstname is required."> </div>
                                        @error('mobile_number')
                                        <span class="badge" style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
<label for="form_name">Role *</label><br>
                                <div class="dropdown">

                                    <select class="btn btn-dark dropdown-toggle"   type="button" name="role" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                      >


                                        <option style="color: white" class="dropdown-item mt-1" value="user">User</option>
                                        <option style="color: white" class="dropdown-item" value="admin">Admin</option>

                                      </select>

                                  </div>
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
