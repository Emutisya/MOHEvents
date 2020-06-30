
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Vacancy Registration:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
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



@endsection
