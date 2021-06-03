@extends('layout.app')
@section('title','Dashboard')

</section>

@section('content')
<section class="right-panel">
    <div class="dashboard">
        <div class="container">
            <p>Divisional Director / Dashboard</p> <hr>
           
            <div class="row">
                <div class="col-md-3">
                    <div class="row d-card bg-info">
                        <div class="row">
                            <div class="card-head">
                                Available Vaccine
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex justify-content-center  ">
                                <i class="fas fa-syringe"></i>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                {{ $count_vaccine }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-link">
                                <a style="height: 20px;"  href="">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row d-card bg-danger">
                      <div class="row">
                          <div class="card-head">
                              Total Health Inspector
                          </div>
                      </div>
                      <div class="col-md-5">
                          <div class="d-flex justify-content-center  ">
                              <i class="fas fa-user-md"></i>
                          </div>
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                            {{ $count_ha }}
                          </div>
                      </div>
                      <div class="row">
                          <div class="card-link">
                              <a class="" style="height: 20px;"  href="">View Details</a>
                          </div>
                      </div>
                </div>
              </div>
             
            </div>
            <div class="pt-5">
              <p>Available Vaccine</p> <hr>
                <table class="table table-hover">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">Vaccine Name</th>
                            <th scope="col">Desease Name</th>
                            <th scope="col">Number of Dose</th>
                            <th scope="col">Intervel Between Doses</th>
                            <th scope="col">Starting of Doses</th>
                            <th scope="col">Rules Of Administration</th>
                          
                        </tr>
                    </thead>
                    @foreach ($result as $result )
                    <tbody>
                        <tr>
                            <th scope="row">{{ $result->vaccine_name }}</th>
                            <td>{{ $result->desease_name }}</td>
                            <td>{{ $result->no_of_dose }}</td>
                            <td>{{ $result->intervel_between_doses }}</td>
                            <td>{{ $result->starting_time }}</td>
                            <td>{{ $result->rule_of_administration }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

            

        </div>
    </div>
</section>
@endsection