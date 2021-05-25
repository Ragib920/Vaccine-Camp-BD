@extends('auth_layout.app')
@section('title','Super Admin Registration')


@section('content')
<div class="container ">
    
    <section class="registration  row">
        <div class="col-md-3 img"> </div>
        <div class="col-md-6 px-5 right-panel">
            <form action="{{'/admin/registration'}}" method="POST">
                @csrf
                <div class="row shadow-sm p-3 mb-5 bg-body rounded ">
                    <h3>Super Admin Registration</h3>
                    @if(Session::has('/admin/registration'))
                        <div class="alert alert-success text-center pt-3" role="alert">
                            {{Session::get('/admin/registration')}}
                        </div>
                    @endif
                    <div class="col-md-12>
                        <div class="form_body">

                            <div class="form-group mt-3">
                                <label >Name</label>
                                <input name="name" type="text" class="form-control" required >
                            </div>


                            <div class="form-group  mt-3">
                                <label for="">Employee ID</label>
                                <input name="employee_id"  type="text" class="form-control" required >
                            </div>


                            <div class="form-group  mt-3">
                                <label >Phone Number</label>
                                <input name="phone_number"  type="text" class="form-control" required>
                            </div>


                            <div class="form-group  mt-3">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email"  type="email" class="form-control" required >
                            </div>
                            <div class="form-group  mt-3">
                                <label for=""> Password </label>
                                <input name="password" type="password" class="form-control" required >
                            </div>
                            <div class="form-group mt-3">
                                <div class="mt-4">
                                    <button type="submit" class=" btn btn-primary " style="width: 100%">Confirm</button>
                                    <a class="text-info float-end mt-3" href="{{ '/admin/login' }}">Already have an Account ? <strong class="text-danger">Login </strong></a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </section>      
</div>
@endsection