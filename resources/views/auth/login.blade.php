@extends('layouts.app')

@section('content')

<section  style="background-image: url('{{ asset('img/modelpic.jpg')}}');" class="Home" id="Home">
    <div

    background-size: cover;
  class="container">


      <div class="d-flex justify-content-end h-100">
        <div class="cardlogin">
          <div class="card-header">
            <h3>Sign In</h3>

          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-user"></i>
                  </span>
                </div>
                <input

                  type="email"
                  class="form-control"
                  placeholder="username" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key"></i>
                  </span>
                </div>
                <input
                  type="password"
                  class="form-control"
                  placeholder="password"
                  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

              </div>
              <div class="row align-items-center remember">
                <input type="checkbox"
                name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                Remember Me
              </div>
              <div class="form-group">
                <button
                  type="submit"

                  class="btn float-right login_btn">


                {{ __('Login') }}
              </button>
              </div>
            </form>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-center links">

             Don't have an account?<a href="{{ url('/register') }}">Sign up</a>
            </div>


          </div>
        </div>
      </div>
    </div>
     {{-- <div class="Introimage">

                <img src={{ asset('/img/modelpic.jpg') }} alt="my pic" />
            </div> --}}
  </section>
@endsection
