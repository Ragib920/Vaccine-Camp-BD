@extends('layout.app')
@section('title','Child Registration')

@section('content')
<section class="right-panel">
    <p>Health Assistant / Child Registration</p> <hr>
    <!-- ===================================================== -->
    <div class="registration-form">
       <div class="row">
            <div class="col-md-2 "></div>
            <div class="col-md-8 ">
                @if(Session::has('/word/child_registration'))
                    <div class="alert alert-success text-center pt-3" role="alert">
                        {{Session::get('/word/child_registration')}}
                    </div>
                @endif 
                <form class="form shadow p-5 rounded">
                    <div class="row">
                        <div class="col-md-3  d-flex justify-content-center">
                            <img src="../images/BDlogo.png" alt="" style="width: 120px; ">
                        </div>
                        <div class="col-md-6  d-flex justify-content-center">
                            <h4 class="form-header pb-5 pt-5">Child Registration Form</h4>
                        </div>
                        <div class="col-md-3  d-flex justify-content-center">
                            <img src="../images/aaa.png" alt="" style="width: 120px">
                        </div>
                    </div>
                    <div class="form-group pt-5">
                        <label  class="form-label">Child Name</label>
                        <input id="child_name" type="text" class="form-control"  required>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label  class="form-label">Birth Registration Number</label>
                                <input id="birth_registration_number" type="text" class="form-control"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label  class="form-label">Gender</label>
                                <select id="gender" required class="form-control">
                                    <option disabled selected>Select Gender</option>
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
                                <input id="father_name" type="text" class="form-control"   required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label  class="form-label">Mother's Name</label>
                                <input id="mother_name" type="text" class="form-control"  required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label  class="form-label">Phone Number</label>
                        <input id="parents_phone_number" type="text" class="form-control"  placeholder="Parent's Phone number" required>
                    </div>
                    <div class="form-group d-flex justify-content-center pt-5 pb-3">
                        <button onclick="ChildSendData()" class="btn btn-primary" style="width: 30%"  href="">Submit</button>
                    </div>
                </form>    
            </div>
            <div class="col-md-2"></div>
       </div>
    </div>
    <!-- ===================================================== -->
</section>
@endsection