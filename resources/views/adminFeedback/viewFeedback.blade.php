@extends('layouts.master')
@section('content')
<center>
<h6 class="h2 text-blue d-inline-block mb-0">CITIZEN'S FEEDBACK</h6></center>
<div class="card-body">

<div class="table-responsive">
    <table class="table">
      <thead class="text-primary">
      <th>Citizen Name</th>
                        <th>Email Address</th>
                        <th>Comment</th>
                        <th>Delete</th>
      </thead>
      <tbody id="myTable">
      @foreach($feedback as $row)

                <tr>
                <td><b>{{$row['name']}}</b></td>
                        <td><b><i>{{$row['email']}}</i></b></td>
                        <td><b>{{$row['comment']}}</b></td>





                        <td>
                        <form method="post" class="delete_form" action="{{action('FeedbackController@destroy',$row['id'])}}">
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



                   </td>
                  
                    <tr>

                @endforeach
            </tbody>
        </table>
      </div>

           
                @endsection











