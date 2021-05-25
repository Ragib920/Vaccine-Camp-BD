@extends('layout.app')
@section('title','My Profile')

@section('content')
    

<section class="right-panel ">
        
    <div class="container">
        <div class="my-profile">
            <p>Super Admin / My profile</p> <hr>
            @foreach ($result as $data )
            <div class="row shadow-sm p-3 mb-5 bg-body rounded">
                <div class="col-md-2"></div>
                <div class="col-md-2 img">
                    <i class="fas fa-user-tie" style="font-size:150px;"></i>
                </div>
                <div class="col-md-6 p-4">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="label">Name:</p>
                            <p class="label">Employee ID:</p>
                            <p class="label">Email:</p>
                            <p class="label">Phone:</p>
                        </div>
                        <div class="col-md-7">
                    
                            <p class="label-data">{{ $data->name }}</p>
                            <p class="label-data text-danger">{{ $data->employee_id }}</p>
                            <p class="label-data text-danger">{{ $data->email }}</p>
                            <p class="label-data">{{ $data->phone_number }}</p> 
                        
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
              
                <div class="d-flex justify-content-center">
                     <a class="btn btn-info " style="width: 20%" href="/admin/edit_profile/{{$data->id}}">Edit</a>
                </div>
            </div>               
            @endforeach
        </div>
        <div class="row shadow-sm p-3 bg-body rounded">
            {{-- ============================================= --}}
            <p>My Profile / Change Password</p> <hr>
          <div class=" mt-4 mb-4" id="hide">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 ">
                        @if(Session::has('/admin/my_profile'))
                            <div class="alert alert-success text-center pt-3" role="alert">
                                {{Session::get('/admin/my_profile')}}
                            </div>
                        @endif 
                        <form method="Post" class="form-group" action="{{ '/admin/my_profile' }}">
                            @csrf

                            @foreach ($result as $data )
                            <input type="hidden" name="id" value="{{$data->id}}">
                            @endforeach
                            <div class="form-group  mt-3">
                                <label for="">Old Password </label>
                                <input name="old_password" type="password" class="form-control" required >
                            </div>
                            <div class="form-group  mt-3">
                                <label for="">New Password </label>
                                <input name="password" type="password" class="form-control" required >
                            </div>
                            <div class="form-group d-flex justify-content-center  mt-3">
                                <button type="submit" class="btn btn-success " style="width: 58%">Confirm</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                
            
          </div>
        {{-- ============================================= --}}
        </div>  
    </div>

</section>     



@endsection