@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">{{ __('Login') }}</h3>
              
             
              <form method="post"  action="{{ route('login') }}" enctype="multipart/form-data">
              @csrf

              <div class="form-label-group">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                          </span>
                        @enderror 
             <label for="email">{{ __('E-Mail Address') }}</label>
                </div>

                <div class="form-label-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                           </span>
                 @enderror
                 <label for="password">{{ __('Password') }}</label>
                </div>


                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit"> {{ __('Login') }}</button>
               <!-- <div class="text-center">
                  <a class="small" href="#">Forgot password?</a></div>-->
                  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection