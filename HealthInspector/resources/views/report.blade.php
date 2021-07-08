@extends('layout.app')
@section('title','Report')

</section>

@section('content')
<section class="right-panel">
    <div class="report">
        <div class="container">
            <p>Health Inspector / Report</p> <hr>
           
            <div class="row">
                <div class="col-md-4">
                    <div class=" Search-panel">
                        <form metheod="get" action="{{ '/upazilla/report' }}"  class=" mb-4">
                            <div class="input-group mb-3">
                                <select class="form-control" name="cars" id="cars">
                                    <option value="volvo">2020</option>
                                  </select>
                                <button class="btn btn-outline-secondary " type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

         
            <table class="table table-success table-striped">
                <thead>
                  <tr>
                    <th scope="col">Vaccine Name</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($report as $report)
                    <tr> 
                        <td>{{ $report->vaccine_name }}</td>
                        <td>{{ $report->total }}</td> 
                    </tr>
                    @endforeach
                </tbody>
            </table>
          
            
        </div>
    </div>
</section>
@endsection