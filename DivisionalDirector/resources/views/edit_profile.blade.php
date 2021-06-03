@extends('layout.app')
@section('title','Edit Profile')

@section('content')
<section class="right-panel ">

    <div class="container ">
        <p>Divisional Director / Edit My Profile</p> <hr> 
        <section class="edit-profile row">            
            <div class="col-md-2"></div>
            <div class="col-md-8 px-5 right-panel">
                @if(Session::has('/division/edit_profile'))
                    <div class="alert alert-success text-center pt-3" role="alert">
                        {{Session::get('/division/edit_profile')}}
                    </div>
                 @endif 
                <form>
                    @foreach ($dataKey as $data)
                    <div class="row shadow-lg p-3 mb-5 bg-body rounded ">
                        <div class="col-md-6">
                            <div class="form_body">
                                <input type="text" hidden id="employee_id" value="{{ session()->get('employee_id') }}" >
                                <div class="form-group mt-3">
                                    <label >Name</label>
                                    <input id="name" type="text" class="form-control" value="{{ $data->name }}" required >
                                </div>

                                <div class="form-group  mt-3">
                                    <label for="">Employee ID</label>
                                    <input   type="text" class="form-control" value=" {{ $data->employee_id }} " disabled>
                                </div>
    
    
                                <div class="form-group  mt-3">
                                    <label >Phone Number</label>
                                    <input id="phone_number"  type="text" class="form-control" value="{{ $data->phone_number }}" required>
                                </div>
    
    
                                <div class="form-group  mt-3">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input  type="email" class="form-control" value="{{ $data->email }}" disabled >
                                </div>
    
                            </div>
                        </div>
    
    
                        <div class="col-md-6">   
    
                            <div class="form-group  mt-3">
                                <label >Division </label>
                                {{-- <input type="text" id="division" class="form-control" required> --}}
                                <select id="division" class="form-control" required>
                                    <option selected disabled>{{ $data->division }}</option>
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
                                <button onclick="UpdateData()"  class=" btn btn-primary " style="width: 100%">Update</button>
                            </div>
                        </div> 
                    </div>
                    @endforeach
                </form>
            </div>
            <div class="col-md-2"></div>
        </section>      
    </div>
</section>
@endsection