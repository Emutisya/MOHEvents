{{-- @extends('layouts.app2')

@section('content') --}}
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Event Registration</title>
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/logo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/admin">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">DashBoard</span>
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link active" href="/events">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Event Registration</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="/resources">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Resources</span>
              </a>
            </li>
                 
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          
            <div class="dropdown-divider"></div>
                <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">    
                              <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">       {{ Auth::user()->name }} </span>
                                </div>
                                </div>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <span>Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          </ul>
        </div>
      </div>
    </nav>
      <h1 class='text-center'>RESOURCES</h1>
    @if(count($posts) > 0)
    <div class="row">
        @foreach($posts as $post)
        
          <div class="col-md-4">
            <div class="thumbnail">
                        <img  class="img-responsive" style="width:250px;height:250px;" src="/storage/cover_images/{{$post->cover_image}}">
                        <div class="caption">
                        <h3 class=""><a href="/resourceViews/{{$post->id}}">{{$post->title}}</a></h3>
                        <small class= "text-center">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                      </div>
                    </div>
                  </div>
    
        @endforeach
        {{$posts->links()}}
    </div>
    @else
        <p>No posts found</p>
    @endif
     
{{-- @endsection --}}
 <!-- Core -->
 <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
 <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
 <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
 <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
 <!-- Argon JS -->
 <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>