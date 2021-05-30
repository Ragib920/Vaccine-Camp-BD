@extends('layout.app')
@section('title','Search Health Assistant')


@section('content')
<section class="right-panel">

    <div class="container">
        <p>Health Inspector / Search Health Assistant</p> <hr>
        <div class="container">
            <div class=" Search-panel d-flex justify-content-center ">
                <form metheod="get" action="{{ '/upazilla/search_health_assistant' }}" class="mt-4 mb-4">
                    <div class="input-group mb-3">
                        <input name="employee_id" type="text" class="form-control" placeholder="Employee ID" style="width: 300px" required>
                        <button class="btn btn-outline-secondary " type="submit">Search</button>
                    </div>
                </form>
            </div>
            @if($result->isNotEmpty())
            @foreach ($result as $result)
            <div class="row shadow-sm p-3 mb-5 bg-body rounded">
                <div class="col-md-2 img">
                    <i class="fas fa-users text-secondary pt-5" style="font-size:110px;"></i>
                   
                </div>
               
    
                <div class="col-md-10 p-4">
                    <div class="row">
                        <div class="col-md-2">                 
                            <p class="label">Employee ID</p>
                            <p class="label">Name</p>
                            <p class="label">Email</p>
                            <p class="label">Phone</p>
                            <p class="label">Role</p>
                        </div>
                        <div class="col-md-4">   
                            <p class="label">: {{ $result->employee_id }}</p>
                            <p class="label">: {{ $result->name }}</p>
                            <p class="label">: {{ $result->email }}</p>
                            <p class="label">: {{ $result->phone_number }}</p>
                            <p class="label">: {{ $result->role }}</p>
                        </div>
                        <div class="col-md-3">
                            <p class="label">Division</p>
                            <p class="label">District</p>
                            <p class="label">Upazilla</p>
                            <p class="label">Union</p>
                            <p class="label">Word</p>
                        </div>
                        <div class="col-md-3">                    
                            <p class="label">: {{ $result->division }}</p>
                            <p class="label">: {{ $result->district }}</p>
                            <p class="label">: {{ $result->upazilla }}</p>
                            <p class="label">: {{ $result->union }}</p>
                            <p class="label">: {{ $result->word }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">                 
                            Assigned Total <span class="text-danger" style="font-weight:600;">{{ $count_registerd_child }}</span> Child
                        </div>
                       
                        <div class="col-md-6">
                            Assigned Total <span class="text-danger" style="font-weight:600;" >{{ $count_vaccination }}</span>  Vaccination Status
                        </div>
                        
                    </div>
                </div> 
            @endforeach
            @else 
                <div class="alert alert-danger" role="alert">
                    <h6 class="text-center">No Result Found!</h6>
                </div>
                <div class="" style="height: 250px">

                </div>
            @endif
          
        </div>
        
    </div>

</section>
@endsection
