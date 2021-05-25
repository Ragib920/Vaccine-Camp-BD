@extends('layout.app')
@section('title','Add New Category')

</section>

@section('content')
<section class="right-panel">

    <div class="container">
        <p>Super Admin / Vaccine Details / Add New Vaccine</p> <hr>
        <form method="Post" class="form-group" action="{{ '/admin/add_category' }}" enctype="multipart/form-data">
            @csrf
            <div class="add-vaccine row ">
                <div class="col-md-3"></div>
                <div class="content col-md-6  "> <hr>
                    <h4 class="text-center pt-2 pb-2">Add New Vaccine</h4>

                    @if(Session::has('/admin/add_category'))
                        <div class="alert alert-success text-center pt-3" role="alert">
                            {{Session::get('/admin/add_category')}}
                        </div>
                    @endif
                    <label>Vaccine Name:</label>
                    <input type="text" name="vaccine_name" class="form-control" required><br>
                    <label>Desease Name:</label>
                    <textarea name="desease_name" style="width: 100%; height:20%; " class="form-control" required></textarea> <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Number of Dose:</label>
                            <input type="text" name="no_of_dose" class="form-control" required><br>
                        </div>
                        <div class="col-md-6">
                            <label>Intervel Between Doses:</label>
                            <input type="text" name="intervel_between_doses" class="form-control" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Starting of Doses:</label>
                            <input type="text" name="starting_time" class="form-control" required><br>
                        </div>
                        <div class="col-md-6">
                            <label>Rules Of Administration:</label>
                            <input type="text" name="rule_of_administration" class="form-control" required><br>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-center pt-2 pb-3 clearfix">
                        <button type="submit" class="btn btn-info"  style="width: 50%">Save</button>
                    </div>
                    <hr>

                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div>

</section>
@endsection
