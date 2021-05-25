@extends('layout.app')
@section('title','Edit Child Profile')

@section('content')
<section class="right-panel mb-4">
    <p>Health Assistant  / Edit Child Profile</p> <hr>

    <!-- ===================================================== -->
    <div class="registration-form">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @if(Session::has('/word/edit_child_profile'))
                    <div class="alert alert-success text-center pt-3" role="alert">
                        {{Session::get('/word/edit_child_profile')}}
                    </div>
                 @endif
            </div>
            <div class="col-md-2"></div>
        </div>
         
       <div class="row mt-3">
            <div class="col-md-2 "></div>
            <div class="col-md-8 ">
                <form class="form shadow p-5 rounded">
                  
                    @foreach ($result as $result)
                     <div class="row">
                        <div class="col-md-3  d-flex justify-content-center">
                            <img src="../images/BDlogo.png" alt="" style="width: 125px; ">
                        </div>
                        <div class="col-md-6  d-flex justify-content-center">
                            <h4 class="form-header pb-5 pt-5">Edit Child Information</h4>
                        </div>
                        <div class="col-md-3  d-flex justify-content-center">
                            <img src="../images/aaa.png" alt="" style="width: 125px">
                        </div>
                    </div>
                    {{-- <h4 class="pt-2 text-center">Edit Child Information</h4> --}}
                    <input type="text" hidden id="birth_registration_number" value="{{ session()->get('birth_registration_number') }}" >
                    <div class="form-group pt-5">
                        <label  class="form-label">Child Name</label>
                        <input id="child_name" value=" {{ $result->child_name }}" type="text" class="form-control"  required>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label  class="form-label">Birth Registration Number</label>
                                <input disabled selected value="{{ $result->birth_registration_number }}" type="text" class="form-control"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label  class="form-label">Gender</label>
                                <select id="gender" required class="form-control">
                                    <option disabled selected value="{{ $result->gender }}">{{ $result->gender }}</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  class="form-label">Father's Name</label>
                                <input id="father_name" value="{{ $result->father_name }}" type="text" class="form-control"   required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  class="form-label">Mother's Name</label>
                                <input id="mother_name" value="{{ $result->mother_name }}" type="text" class="form-control"  required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label  class="form-label">Phone Number</label>
                        <input id="parents_phone_number" value="{{ $result->parents_phone_number }}" type="text" class="form-control"  placeholder="Parent's Phone number" required>
                    </div>
                    <div class="form-group d-flex justify-content-center pt-5 pb-3">
                        <button onclick="UpdateChildData()" class="btn btn-info" style="width: 30%"  href="">Update</button>
                    </div>
                    @endforeach              
                </form>    
            </div>
            <div class="col-md-2"></div>
       </div>
    </div>
    <!-- ===================================================== -->
</section>
@endsection