@extends('auth_layout.app')
@section('title','Divisional Director Registration')


@section('content')
<div class="container ">
    <section class="registration shadow-lg p-3 mb-5 bg-body rounded row">
        
        <div class="col-md-4 img">
            <img  src="../images/reg.png" alt="">
            <h3>Divisional Director Registration</h3>
        </div>
        <div class="col-md-8 px-5 right-panel">
            @if(Session::has('/division/registration'))
                <div class="alert alert-success text-center pt-3" role="alert">
                    {{Session::get('/division/registration')}}
                </div>
            @endif 
            <form>
                <div class="row shadow-sm p-3 mb-5 bg-body rounded ">
                    <div class="col-md-6">
                        <div class="form_body">

                            <input  id="role" value="Divisional_Director" type="hidden" class="form-control" required >

                            <div class="form-group mt-3">
                                <label >Name</label>
                                <input id="name" type="text" class="form-control" required >
                            </div>


                            <div class="form-group  mt-3">
                                <label for="">Employee ID</label>
                                <input id="employee_id"  type="text" class="form-control" required >
                            </div>


                            <div class="form-group  mt-3">
                                <label >Phone Number</label>
                                <input id="phone_number"  type="text" class="form-control" required>
                            </div>


                            <div class="form-group  mt-3">
                                <label for="exampleInputEmail1">Email</label>
                                <input id="email"  type="email" class="form-control" required >
                            </div>


                            <div class="form-group  mt-3">
                                <label for=""> Password </label>
                                <input id="password" type="password" class="form-control" required >
                            </div>


                        </div>
                    </div>


                    <div class="col-md-6">   

                        <div class="form-group  mt-3">
                            <label >Division </label>
                            {{-- <input type="text" id="division" class="form-control" required> --}}
                            <select id="division" class="form-control" required>
                                <option selected disabled>Select Division</option>
                                @foreach ($divisionKey as $division )
                                    <option value="{{ $division }}">{{ $division }}</option>
                                @endforeach
                            </select>
                        </div>
                        

                      
                        <div class="form-group mt-3">
                            
                            <input id="district"  type="hidden" value="null" class="form-control" required >
                        </div>


                        <div class="form-group mt-3">
                            
                            <input id="upazilla"  type="hidden" value="null" class="form-control" required >
                        </div>


                        <div class="form-group mt-3">
                          
                            <input id="union"   type="hidden" class="form-control" value="null" required>
                        </div>


                         <div class="form-group mt-3">
                           
                            <input type="hidden" id="word" class="form-control" value="null">
                           
                        </div>   
                           
                        
                    </div>
                    <div class="form-group mt-3">
                        <div class="mt-4">
                            <button onclick="SendData()" class=" btn btn-primary " style="width: 100%">Confirm</button>
                            <a class="text-info float-end mt-3" href="{{ '/division/login' }}">Already have an Account ? <strong class="text-danger">Login </strong></a>
                        </div>
                    </div> 
                </div>
            </form>
        </div>
        {{-- <div class="col-md-2"></div> --}}
    </section>      
</div>
@endsection