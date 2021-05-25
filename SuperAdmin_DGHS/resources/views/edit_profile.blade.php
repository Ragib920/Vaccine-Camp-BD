@extends('layout.app')
@section('title','Edit Profile')

@section('content')
<section class="right-panel ">

    <div class="container ">
    <p class="pt-3">Super Admin / Edit profile</p> <hr>

        <section class="edit-profile row">            
            <div class="col-md-3 img"> </div>
        <div class="col-md-6 px-5 right-panel">
            <form action="{{'/admin/edit_profile'}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$result->id}}">
                <div class="row shadow-sm p-3 mb-5 bg-body rounded ">
                    <h3 class="text-center">Update Your Profile</h3>
                    @if(Session::has('/admin/edit_profile'))
                        <div class="alert alert-success text-center pt-3" role="alert">
                            {{Session::get('/admin/edit_profile')}}
                        </div>
                    @endif
                    <div class="col-md-12>
                        <div class="form_body">

                            <div class="form-group mt-3">
                                <label >Name</label>
                                <input name="name" type="text" value="{{$result->name}}" class="form-control" required >
                            </div>


                            <div class="form-group  mt-3">
                                <label for="">Employee ID</label>
                                <input name="employee_id" value="{{$result->employee_id}}"  type="text" class="form-control"  disabled>
                            </div>


                            <div class="form-group  mt-3">
                                <label >Phone Number</label>
                                <input name="phone_number" value="{{$result->phone_number}}"  type="text" class="form-control" required>
                            </div>


                            <div class="form-group  mt-3">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email"  type="email" value="{{$result->email}}" class="form-control" disabled >
                            </div>
                           
                            <div class="form-group mt-3">
                                <div class="mt-4 mb-3">
                                    <button type="submit" class=" btn btn-info " style="width: 100%">Update</button>
                                    
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
</section>
@endsection