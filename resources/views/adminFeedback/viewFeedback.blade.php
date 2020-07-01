@extends('layouts.master')

@section('header')
@section('header')
<div class="container">

<div class="card-body">
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 style="text-align:center; color:papayawhip;">VIEW CITIZENS' COMMENTS</h3>
        
        @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}} </p>
                </div>
                @endif

        <div align="right">

            <table class="table table-bordered">
                <thead style="background-color:peachpuff;">
                    <tr>
                        <th>Citizen Name</th>
                        <th>Email Address</th>
                        <th>Comment</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="myTable" style="color:white;">
                    @foreach($feedback as $row)
                    <tr>
                        <td><b>{{$row['name']}}</b></td>
                        <td><b><i>{{$row['email']}}</i></b></td>
                        <td><b>{{$row['comment']}}</b></td>
                        <td>
                            <form method="post" class="delete_form" action="{{action('FeedbackController@destroy',$row['id'])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('.delete_form').on('submit', function() {
            if (confirm("Are You Sure You Want To Delete It?")) {
                return true;
            } else {
                return false;
            }
        });
    });

    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

@endsection
@endsection