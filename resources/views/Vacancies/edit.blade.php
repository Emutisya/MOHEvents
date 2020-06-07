@extends('layouts.master')
@section('content')


        
{!! Form::open(['action'=>['VacanciesController@update',$vacancy->id],'method'=>'POST']) !!}
    

  

<div class="modal-body">

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
