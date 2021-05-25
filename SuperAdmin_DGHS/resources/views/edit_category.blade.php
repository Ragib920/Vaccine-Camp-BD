@extends('layout.app')
@section('title','Edit Vaccine')

</section>

@section('content')
<section class="right-panel">

    <div class="container">
        <p>Super Admin / Vaccine Details / Edit Vaccine</p> <hr>
        <form method="POST" action="{{ '/admin/edit_category' }}" class="form-group"  >
            @csrf
            <input type="hidden" name="vaccine_id" value="{{$result->vaccine_id}}">
            <div class="add-vaccine row ">
                <div class="col-md-3"></div>
                <div class="content col-md-6  "> <hr>
                    <h4 class="text-center pt-2 pb-3">Edit Vaccine</h4>

                    @if(Session::has('/admin/edit_category'))
                        <div class="alert alert-success text-center pt-3" role="alert">
                            {{Session::get('/admin/edit_category')}}
                        </div>
                    @endif
                    <label>Vaccine Name:</label>
                    <input type="text" name="vaccine_name" class="form-control" value="{{ $result->vaccine_name }}" required><br>
                    <label>Desease Name:</label>
                    <textarea name="desease_name"  style="width: 100%; height:20%; " class="form-control" required>{{ $result->desease_name }}</textarea> <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Number of Dose:</label>
                            <input type="text" name="no_of_dose" value=" {{ $result->no_of_dose }} " class="form-control" required><br>
                        </div>
                        <div class="col-md-6">
                            <label>Intervel Between Doses:</label>
                            <input type="text" name="intervel_between_doses"class="form-control"   value="{{ $result->intervel_between_doses }} " required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Starting of Doses:</label>
                            <input type="text" name="starting_time" value="{{ $result->starting_time }}" class="form-control" required><br>
                        </div>
                        <div class="col-md-6">
                            <label>Rules Of Administration:</label>
                            <input type="text" name="rule_of_administration" value="{{ $result->rule_of_administration }}" class="form-control" required><br>
                        </div>
                    </div>
                    <div class=" d-flex justify-content-center pt-2 pb-3 clearfix">
                        <button type="submit" class="btn btn-info"  style="width: 50%">Update</button>
                    </div>
                    <hr>

                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div>

</section>
@endsection
