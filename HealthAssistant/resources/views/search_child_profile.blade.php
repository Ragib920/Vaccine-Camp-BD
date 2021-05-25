@extends('layout.app')
@section('title','Search Child Profile')


@section('content')
<section class="right-panel">
    <p>Health Assistant / Search Child Profile</p> <hr>

    <!-- ===================================================== -->
    <div class="container">
        <div class=" Search-panel d-flex justify-content-center ">
            <form metheod="GET" action="{{ '/word/search_child_profile' }}" class="mt-4 mb-4">
                <div class="input-group mb-3">
                    <input name="birth_registration_number" type="text" class="form-control" placeholder="Birth Registration Number" style="width: 300px" required>
                    <button class="btn btn-outline-secondary " type="submit">Search</button>
                </div>
            </form>
        </div>

        @if($result->isNotEmpty())
        <div class="show_result row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                {{-- ====================EPI vaccination Card========================= --}}
                @foreach ($result as $result)
                    <div class="bg-warning mt-3 p-3">
                        <div class=" d-flex justify-content-center pt-3">
                            <img src="../images/BDlogo.png" alt="" style="width: 80px">
                        </div>
                        <h4 class="text-center">EPI Vaccination Card (Child)</h4>

                        <div class="row pt-5">
                            <div class="col-md-2"></div>   
                            <div class="col-md-4">
                                <p>Name:</p>
                                <p>Birth Registration Number:</p>
                                <p>Father's name:</p>
                                <p>Mother's name:</p>
                                <p>Gender:</p>
                                <p>Parent's Phone Number:</p>
                            </div>
                            <div class="col-md-4">          
                                <p>: {{ $result->child_name }}</p>
                                <p>{{ $result->birth_registration_number }}</p>
                                <p>{{ $result->father_name }}</p>
                                <p>{{ $result->mother_name }}</p>
                                <p>{{ $result->gender }}</p>
                                <p>{{ $result->parents_phone_number }}</p>
                            </div>
                            <div class="col-md-2"></div>   
                        </div>
                    
                        <div class="d-flex justify-content-center pt-5 ">
                            <a href="{{ '/word/edit_child_profile' }}" class="btn btn-danger" style="width: 200px" >Edit</a>
                        </div>
                    </div>
                @endforeach
                 
            </div>
            <div class="col-md-2"></div>
        </div>
        <hr>
           {{-- ====================Vaccination Status========================= --}}

        <div class="row">
            <div class="add_status col-md-4 pt-4 pb-4">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus pe-2"></i>Add Vaccine Status
                </button> 
            </div>
            @if(Session::has('/word/search_child_profile'))
            <div class="alert alert-success text-center col-md-4" role="alert">
                {{Session::get('/word/search_child_profile')}}
            </div>
            @endif  
        </div>

        <div class="row">
            <div class="bg-warning p-3">
                <h4 class="text-center pt-4 pb-5"> Vaccination Status</h4>
                <div class="row vaccine-card">
                    {{-- ==============BCG============= --}}                
                    <div class="col-md-4 p-1">
                        <div class="shadow ">
                            <div class="card-body">
                                <h5 class="text-center">BCG</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Dose No</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>                                
                                    <tbody>     
                                        @foreach ($bcg_vaccine as $bcg_vaccine )
                                        <tr>   
                                            <td>{{ $bcg_vaccine->dose_no }}</td>
                                            <td>{{ $bcg_vaccine->created_at }}</td>
                                        </tr>  
                                        @endforeach                            
                                        
                                                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>               
                    </div>    
                     {{-- ==============Pentavalent============= --}}                
                     <div class="col-md-4 p-1">
                        <div class="shadow ">
                            <div class="card-body">
                                <h5 class="text-center">Pentavalent</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Dose No</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>                                
                                    <tbody>   
                                        @foreach ($Pentavalent_vaccine as $Pentavalent_vaccine )
                                        <tr> 
                                            <td>{{ $Pentavalent_vaccine->dose_no }}</td>
                                            <td>{{ $Pentavalent_vaccine->created_at }}</td>
                                        </tr>
                                        @endforeach      

                                    </tbody>
                                </table>
                            </div>
                        </div>               
                    </div>
                    {{-- ==============PVC============= --}}                
                    <div class="col-md-4 p-1">
                        <div class="shadow ">
                            <div class="card-body">
                                <h5 class="text-center">PVC</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Dose No</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>                                
                                    <tbody>   
                                        @foreach ($pvc_vaccine as $pvc_vaccine )
                                        <tr> 
                                            <td>{{ $pvc_vaccine->dose_no }}</td>
                                            <td>{{ $pvc_vaccine->created_at }}</td>
                                        </tr>
                                        @endforeach      

                                    </tbody>
                                </table>
                            </div>
                        </div>               
                    </div>    
                    {{-- ==============BOPV============= --}}                
                    <div class="col-md-4 p-1">
                        <div class="shadow ">
                            <div class="card-body">
                                <h5 class="text-center">BOPV</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Dose No</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>                                
                                    <tbody>   
                                        @foreach ($bopv_vaccine as $bopv_vaccine )
                                        <tr> 
                                            <td>{{ $bopv_vaccine->dose_no }}</td>
                                            <td>{{ $bopv_vaccine->created_at }}</td>
                                        </tr>
                                        @endforeach      

                                    </tbody>
                                </table>
                            </div>
                        </div>               
                    </div> 
                     {{-- ==============IPV============= --}}                
                     <div class="col-md-4 p-1">
                        <div class="shadow ">
                            <div class="card-body">
                                <h5 class="text-center">IPV</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Dose No</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>                                
                                    <tbody>   
                                        @foreach ($ipv_vaccine as $ipv_vaccine )
                                        <tr> 
                                            <td>{{ $ipv_vaccine->dose_no }}</td>
                                            <td>{{ $ipv_vaccine->created_at }}</td>
                                        </tr>
                                        @endforeach      

                                    </tbody>
                                </table>
                            </div>
                        </div>               
                    </div>  
                    {{-- ==============MR============= --}}                
                    <div class="col-md-4 p-1">
                        <div class="shadow ">
                            <div class="card-body">
                                <h5 class="text-center">MR</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Dose No</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>                                
                                    <tbody>   
                                        @foreach ($mr_vaccine as $mr_vaccine )
                                        <tr> 
                                            <td>{{ $mr_vaccine->dose_no }}</td>
                                            <td>{{ $mr_vaccine->created_at }}</td>
                                        </tr>
                                        @endforeach      

                                    </tbody>
                                </table>
                            </div>
                        </div>               
                    </div>  
                </div>
                    
               
               
                   {{-- ++++++++++++++++++++++++++++++++++++++ --}}   
                    <!-- Modal -->
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Add Vaccine Status</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="Post" class="form-group" action="{{ '/word/search_child_profile' }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row p-5">
                                            <div class="col-md-6">
                                                <label for="">Vaccine Name:</label> <br>
                                                <select name="vaccine_name" class="form-control">
                                                    <option value="">Select One</option> 
                                                    @foreach ( $vaccine_name as $vaccine_name)
                                                    <option value="{{ $vaccine_name }}"> {{ $vaccine_name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Dose:</label> <br>
                                                <select name="dose_no" class="form-control">
                                                    <option value="">Select One</option> 
                                                    <option value="1">1st</option>
                                                    <option value="2">2nd</option>
                                                    <option value="3">3rd</option>
                                                    <option value="4">4th</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>                          
                            </div>
                        </div>
                    </div>
                   {{-- ++++++++++++++++++++++++++++++++++++++ --}}
            </div>
        </div>
        @else 
        <div class="alert alert-danger" role="alert">
          <h6 class="text-center">No Result Found!</h6>
        </div>
        @endif
    </div>
    <!-- ===================================================== -->
</section>
@endsection