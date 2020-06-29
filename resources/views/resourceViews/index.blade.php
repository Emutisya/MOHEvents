@extends('layouts.app')

@section('content')
    <h1 class='text-center'>RESOURCES</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="col-sm-4">
                <div class="column">
                    <div class="col-md-8 col-sm-8">
                        <img style="width:250px;height:250px;" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3 class="text-center"><a href="/resourceViews/{{$post->id}}">{{$post->title}}</a></h3>
                        <small class= "text-center">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection