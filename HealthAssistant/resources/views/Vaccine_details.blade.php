@extends('layout.app')
@section('title','Vaccine Details')



@section('content')
<section class="right-panel mb-4">
    <p>Health Assistant / Vaccine Details</p> <hr>
  

    <div class="vaccine pt-3 pb-3">
        
        <table class="table table-hover">
            <thead class="table-success">
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
</section>
@endsection