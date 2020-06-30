@extends('layouts.master')

@section('header')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Post Registration:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">

            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

        </div>

        <div class="form-group">

            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}



      </div>
    </div>
  </div>


              <div class="col-lg-6 col-5 text-right">
                <button type="button" class="btn btn-primary btn-white" data-toggle="modal" data-target="#exampleModal" >Add Post</button>

              </div>

                    @endsection


                    <div class="card-body">

                    @section('content')

                    @if(count($posts) > 0)
                    <div class="table-responsive">
                        <table class="table">
                              {{-- <table class="table table-striped"> --}}
                            <thead class="text-primary">
                              <th>ID</th>
                            {{-- <tr> --}}
                             <th>Title</th>
                            <th>CREATED AT</th>
                            <th>UPDATED AT</th>
                            <th>Image</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                              </thead>
                            {{-- </tr> --}}
                            @foreach($posts as $post)
                                <tr>
                                <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>{{$post->updated_at}}</td>
                                <td>{{$post->cover_image}}</td>
                               {{-- <td> <img   style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}"></td> --}}

                                    <td><a href="/resourceViews/{{$post->id}}/edit" class="btn btn-info btn-sm">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-xs btn-danger btn-sm btn-flat show_confirm'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                    @endsection
