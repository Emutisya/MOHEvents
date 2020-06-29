@extends('layouts.master')

@section('header')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Vacancy Registration:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {!! Form::open(['action'=>'VacanciesController@store','method'=>'POST']) !!}

        <div class="form-group">

            {{form::label('title', 'Job-Title')}}

            {{form::Text('title','',['class' =>'form-control','placeholder'=>'Title'])}}

        </div>

        <div class="form-group">

                {{form::label('description', 'Job-Description')}}

                {{form::Textarea('description','',['class' =>'form-control','placeholder'=>'Description'])}}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary  " data-dismiss="modal">Close</button>
    {{Form::submit('Post Vacancy',['class'=>'btn btn-primary'])}}


</div>

    {!! Form::close() !!}



      </div>
    </div>
  </div>


              <div class="col-lg-6 col-5 text-right">
                <button type="button" class="btn btn-primary btn-white" data-toggle="modal" data-target="#exampleModal" >New Vacancy</button>

              </div>

@endsection



@section('content')
@if(count($vacancies)<1)

<div class="index">
                <div clas="u-center-text">
                    <h3 class="heading-tertiary u-margin-bottom-small">No vacancies currently</h3>

                </div>
@else
<div class="card-body">
<div class="table-responsive">
    <table class="table">
      <thead class="text-primary">
        <th>Title</th>
         <th>Description</th>
        <th>Created on</th>
        <th>Edit</th>
        <th>Delete</th>
      </thead>
      <tbody id="myTable">
                @foreach($vacancies as $vacancy)

                <tr>
                    <td>{{$vacancy->title}}</td>

                    <td>{{$vacancy->description }}</td>
                   <td>{{ $vacancy->created_at }}</td>


                    <td><a href="/vacancy/{{$vacancy->id}}/edit" class="btn btn-info btn-sm">Edit</a></td>


                    <td>{!!Form::open(['action'=>['VacanciesController@destroy',$vacancy->id],'method'=>'POST','class'=>'delete_form'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::Submit('Delete',['class'=>"btn btn-xs btn-danger btn-sm btn-flat show_confirm", 'data-toggle'=>"tooltip"])}}
                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                        <script type="text/javascript">
                            $('.show_confirm').click(function(e) {
                                if(!confirm('Are you sure you want to delete this?')) {
                                    e.preventDefault();
                                }
                            });
                        </script>
                        {!!Form::close()!!}</td>




                   </td>
                    <tr>

                @endforeach
            </tbody>
        </table>
      </div>

                @endif
                @endsection



