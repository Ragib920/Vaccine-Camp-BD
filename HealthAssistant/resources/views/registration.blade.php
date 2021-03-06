@extends('auth_layout.app')
@section('title','HA Registration')


@section('content')
<div class="container ">
    <section class="registration shadow-lg p-3 mb-5 bg-body rounded row">
        
        <div class="col-md-4 img">
            <img  src="../images/reg.png" alt="">
            <h3>Health Assistant Registration</h3>
        </div>
        <div class="col-md-8 px-5 right-panel">
            @if(Session::has('/word/registration'))
                <div class="alert alert-success text-center pt-3" role="alert">
                    {{Session::get('/word/registration')}}
                </div>
            @endif 
            <form>
                <div class="row shadow-sm p-3 mb-5 bg-body rounded ">
                    <div class="col-md-6">
                        <div class="form_body">

                            <input  id="role" value="Health_Asistant" type="hidden" class="form-control" required >

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
                            <label >District </label>
                            {{-- <input type="text" id="district" class="form-control" required> --}}
                            <select id="district" class="form-control" required>
                                <option selected disabled>Select District</option>
                                @foreach ($districtKey as $district )
                                    <option value="{{ $district }}">{{ $district }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group mt-3">
                            <label >Upazilla </label>
                            <input id="upazilla"  type="text" class="form-control" required >
                        </div>


                        <div class="form-group mt-3">
                            <label >Union </label>
                            <input id="union"  type="text" class="form-control" required>
                        </div>


                         <div class="form-group mt-3">
                            <label >Word No</label>
                            {{-- <input type="text" id="word" class="form-control" required> --}}
                            <select id="word" class="form-control" required>
                                <option selected disabled>Select word</option>
                                @foreach ($wordKey as $word )
                                    <option value="{{ $word }}">{{ $word }}</option>
                                @endforeach
                            </select>
                        </div>      
                        
                    </div>
                    <div class="form-group mt-3">
                        <div class="mt-4">
                            <button onclick="SendData()" class=" btn btn-primary " style="width: 100%">Confirm</button>
                            <a class="text-info float-end mt-3" href="{{ '/word/login' }}">Already have an Account ? <strong class="text-danger">Login </strong></a>
                        </div>
                    </div> 
                </div>
            </form>
        </div>
        {{-- <div class="col-md-2"></div> --}}
    </section>      
</div>
@endsection