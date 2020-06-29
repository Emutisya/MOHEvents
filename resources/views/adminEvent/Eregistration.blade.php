@extends('layouts.master')

<<<<<<< HEAD
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
=======
@section('header')
@section('header')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Event Event:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/save-events" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}


            <div class="modal-body">


                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Description:</label>
                  <textarea class="form-control" name="description" id="recipient-name"></textarea>
>>>>>>> 24ad39afb7df2f14029f886c0cfb6179e2ddf016
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Location:</label>
                  <input type="text"name="location" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Time:</label>
                  <input type="time" name="time" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Date:</label>
                  <input type="date"name="date" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Organization:</label>
                  <input type="text"name="organization" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Image:</label>
                  <input type="file"name="image" class="form-control" id="recipient-name">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>


<<<<<<< HEAD
      <div class="modal-body">
      
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description:</label>
            <textarea class="form-control" name="description" id="recipient-name"></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Location:</label>
            <input type="text"name="location" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Time:</label>
            <input type="time" name="time" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Date:</label>
            <input type="date"name="date" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Organization:</label>
            <input type="text"name="organization" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="file"name="image" class="form-control" id="recipient-name">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
=======

                    <a href="/events" class="btn btn-default">Back</a>
>>>>>>> 24ad39afb7df2f14029f886c0cfb6179e2ddf016
      </div>
    </div>
  </div>

              <div class="col-lg-6 col-5 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >New Event</button>

              </div>

@endsection
@endsection

@section('content')
    <!-- Page content -->
    <!-- Light table -->

    <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="text-primary">
              <th>ID</th>
        <!--      <th>Poster ID</th> -->
              <th>description</th>
              <th>location</th>
              <th>Time</th>
              <th>Date</th>
            <th>Organization</th>
            <th>Image</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </thead>
            <tbody id="myTable">

              @foreach ($events as $data)


              <tr>
                <td>{{$data->id}}</td>
              <!-- <td> 0000</td> -->
                <td>{{$data->description }}</td>
                <td>{{$data->location }}</td>
                <td>{{$data->time }}</td>
                <td>{{$data->date }}</td>
                <td>{{$data->organization}}</td>
<<<<<<< HEAD
                <td>{{$data->image}}</td>
=======
                <td><img style="width:100%" src="/public/uploads/{{$data->image}}"></td>
>>>>>>> 24ad39afb7df2f14029f886c0cfb6179e2ddf016
                <td>
                <a href ="/role-editd/{{$data->id}}" class="btn btn-info btn-sm">EDIT</a>
                </td>
                <td>
                  <form action="/role-deletee/{{$data->id}}" method="post" class="delete_form">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}



          

                    <button type="submit" class="btn btn-xs btn-danger btn-sm btn-flat show_confirm">DELETE</button>
                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
                      $(document).ready(function() {
                        $('.delete_form').on('submit', function() {
                          if (confirm("Are You Sure You Want To Delete It?")) {
                            return true;
                          } else {
                            return false;
                          }
                        });
                      });
                    </script>
                  </form>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection


