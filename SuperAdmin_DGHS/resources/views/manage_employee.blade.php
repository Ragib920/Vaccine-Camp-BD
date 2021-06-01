@extends('layout.app')
@section('title',' Manage Employee')


@section('content')
<section class="right-panel">
    <p>Srper Admin / Manage Employee</p> <hr>

    <!-- ===================================================== -->
    <div class="container">
        <div class=" Search-panel d-flex justify-content-center ">
            <form metheod="get" action="{{ '/admin/manage_employee' }}" class="mt-4 mb-4">
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
                <i class="fas fa-users text-secondary pt-4" style="font-size:110px;"></i>
                <a class="btn btn-danger mt-4" href="/admin/deleteEmployee/{{ $result->id }}" ><i class="fas fa-trash pe-2"></i>Delete Profile</a>
            </div>
            @if(Session::has('/admin/manage_employee'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('/admin/manage_employee')}}
                </div>
            @endif

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
            </div>
        </div> 
        @endforeach
        @else 
            <div class="alert alert-danger" role="alert">
                <h6 class="text-center">No Result Found!</h6>
            </div>
            <div style="height: 250px">

            </div>
        @endif
      
    </div>
    <!-- ===================================================== -->
</section>
@endsection