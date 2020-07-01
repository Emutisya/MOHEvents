@extends('layouts.app')




@section('content')


{!! Form::open(['action'=>['VacanciesController@update',$vacancy->id],'method'=>'POST']) !!}






    <div class="form-group">

        {{form::label('title', 'Title')}}

        {{form::Text('title',$vacancy->title,['class' =>'form-control','placeholder'=>'Title'])}}

    </div>

 <div class="form-group">

            {{form::label('description', 'Description')}}

            {{form::Textarea('description',$vacancy->description,['class' =>'form-control','placeholder'=>'Description'])}}

        </div>




            {{Form::hidden('_method','PUT')}}

            {{Form::submit('Update Vacancy',['class'=>'btn btn-primary'])}}



    {!! Form::close() !!}



@endsection
