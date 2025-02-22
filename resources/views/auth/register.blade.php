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
              <h3 class="login-heading mb-4">{{ __('Register') }}</h3>
              
            
              <form method="post"  action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

              <div class="form-label-group">
                  <!--<input type="text" name="name" id="inputPassword" class="form-control" placeholder="Full Name" required>
                  <label for="inputPassword">Full Name</label>-->
                  <input id="hospital" type="text" class="form-control @error('hospital') is-invalid @enderror" name="hospital" value="{{ old('hospital') }}" required autocomplete="hospital" autofocus>
                   @error('hospital')
                           <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                           </span>
                    @enderror
                 <!-- <label for="Hospital" >{{ __('Hospital') }} </label>-->
                  <label for="Hospital" >Full Name </label>
                </div>

                <div class="form-label-group">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                             <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                             </span>
                  @enderror
                  <label for="email" >{{ __('E-Mail Address') }} </label>
                </div>

                <div class="form-label-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                @enderror
                <label for="password" >{{ __('Password') }} </label>
                </div>

                <div class="form-label-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                <label for="password-confirm">{{ __('Confirm Password') }} </label>
                </div>


                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit"> {{ __('Register') }}</button>
               <!-- <div class="text-center">
                  <a class="small" href="#">Forgot password?</a></div>-->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
