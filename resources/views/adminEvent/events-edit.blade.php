@extends('layouts.master')




@section('content')

        <form action="/role-eregister-update/{{ $events->id}}" method="POST">
        {{ csrf_field() }}
{{method_field('PUT') }}


            <div class="modal-body">


            <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Description:</label>
                  <input type="text"name="description" value="{{$events->description}}" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Location:</label>
                  <input type="text"name="location" value="{{$events->location}}" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Time:</label>
                  <input type="time" name="time" value="{{$events->time}}" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Date:</label>
                  <input type="date"name="date" value="{{$events->date}}" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Organization:</label>
                  <input type="text"name="organization" value="{{$events->organization}}" class="form-control" id="recipient-name">
                </div>

            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-success">Update</button>
  <a href="/events" class="btn btn-danger">Cancel</a>
            </div>
            </form>




            @endsection







