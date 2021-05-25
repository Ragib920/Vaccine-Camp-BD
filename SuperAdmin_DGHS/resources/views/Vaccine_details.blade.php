@extends('layout.app')
@section('title','Vaccine Details')


@section('content')
    

<section class="right-panel ">   
    <div class="container">
        <p>Super Admin / Vaccine Details</p> <hr>
        <div class="add_category pt-2">
            <a href="{{ '/admin/add_category' }}" class="btn btn-success"><i class="fas fa-folder-plus pe-3"></i>Add New Vaccine</a>
        </div>

        
        <div class="vaccine pt-5 pb-5">
            @if(Session::has('/admin/vaccine_details'))
                <div class="alert alert-success text-center pt-3" role="alert">
                    {{Session::get('/admin/vaccine_details')}}
                </div>
            @endif 
            <table class="table table-hover">
                <thead class="table-success">
                    <tr>
                        <th scope="col">Vaccine Name</th>
                        <th scope="col">Desease Name</th>
                        <th scope="col">Number of Dose</th>
                        <th scope="col">Intervel Between Doses</th>
                        <th scope="col">Starting of Doses</th>
                        <th scope="col">Rules Of Administration</th>
                        <th scope="col">Action</th>
                        <th scope="col"></th>
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
                        <td><a class="btn btn-info" href="/admin/edit_category/{{ $result->vaccine_id }}"><i class="fas fa-pen-square"></i></a></td>
                        <td><a class="btn btn-danger" href="/admin/delete/{{ $result->vaccine_id }}"><i class="fas fa-trash-alt"></i></a></td>                
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>         
    </div>
</section>     



@endsection