@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="card bg-info">
          <div class="card-body">
            <div class="inner">
              <h3>{{count($applications) }}</h3>

              <p>New Applications</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="/application" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="card bg-success">
            <div class="card-body">
            <div class="inner">
                <h3>{{count($vacancies) }}</h3>

              <p>Vacancies</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/vacancy" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="card bg-warning">
            <div class="card-body">
            <div class="inner">
                <h3>{{count($posts) }}</h3>

              <p>Resources</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/adminPostViews" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="card bg-danger">
            <div class="card-body">
            <div class="inner">
                <h3>{{count($events) }}</h3>

              <p>Events</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="/events" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <h3 style="text-align: center; color:cornflowerblue;">KENYA COVID-19 STATISTICS</h3>

<div>
<input type="text" id="myInput"
  style=" 
  background-image: url('/images/search.png');
  background-size: 30px 30px;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;"
  onkeyup="myFunction()" placeholder="Search for A Specific Date.." title="Type in a Date">
</div>

<div class="card-body">
        <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th>Date</th>
                 <th>Status</th>
                <th>Cases</th>

              </thead>
              <tbody id="myTable">
                        @foreach($body as $bodies)
                        <tr>
                            <td>{{ date('d-m-Y', strtotime($bodies['Date'])) }}</td>

                            <td>{{$bodies['Status'] }}</td>
                           <td>{{ $bodies['Cases'] }}</td>
                        </tr>
                        @endforeach
              </tbody>
            </table>
        </div>
      </div>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    </div>
@endsection
