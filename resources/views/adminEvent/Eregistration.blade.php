@extends('layouts.master')

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



                    <a href="/events" class="btn btn-default">Back</a>
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


