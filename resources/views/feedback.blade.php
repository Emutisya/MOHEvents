@extends('includes.navBar')

@section('content')
        
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Please Leave a Respectful Comment Below:</h3>
              
              @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{\Session::get('success')}}</p>
            </div>
            @endif


              <form method="post"  action="{{url('feedback')}}" enctype="multipart/form-data">
                {{csrf_field()}}

              <div class="form-label-group">
                  <input type="text" name="name" id="inputPassword" class="form-control" placeholder="Full Name" required>
                  <label for="inputPassword">Full Name</label>
                </div>

                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email Address</label>
                </div>

               

                <div class="form-label-group">
                <textarea id="inputComment" name="comment" rows="5" cols="30" class="form-control" placeholder="Comment" required></textarea>
               <!-- <label for="inputComment">Email Address</label>-->
                </div>
            

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember Me.</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">SEND</button>
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
