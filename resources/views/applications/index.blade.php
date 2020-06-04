@extends('layouts.master')
@section('content')
@if(count($applications)<1)

<div class="index">
                <div clas="u-center-text">
                    <h3 class="heading-tertiary u-margin-bottom-small">No vacancies currently</h3>

                </div>
@else
<div class="card-body">
<div class="table-responsive">
    <table class="table">
      <thead class="text-primary">
        <th>username</th>

        <th>email</th>
        <th>slot</th>
        <th>cv-file</th>

      </thead>
      <tbody id="myTable">
                @foreach($applications as $application)

                <tr>
                    <td>{{$application->username}}</td>

                    <td>{{$application->email }}</td>
                    <td>{{$Vacancies[$application->Vacancy_id]}}</td>
                   <td>{{ $application->CVfile }}</td>


                    {{-- <td><a href="/vacancy/{{$Vacancies->id}}/edit" class="btn btn-info btn-sm">Edit</a></td> --}}

                    <td>{!!Form::open(['action'=>['VacanciesController@destroy',$application->id],'method'=>'POST','class'=>'delete_form'])!!}
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
