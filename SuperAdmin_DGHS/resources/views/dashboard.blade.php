@extends('layout.app')
@section('title','Dashboard')

</section>

@section('content')
<section class="right-panel">
    <div class="dashboard">
        {{-- ==========Vaccine========== --}}
        <p>Super Admin / Dashboard</p> <hr>
        <div class="row">
            <div class="col-md-5">
                <div class="row d-card bg-info">
                    <div class="row">
                        <div class="card-head">
                            Available Vaccine
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex justify-content-center  ">
                            <i class="fas fa-syringe"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                           {{ $count_vaccine }}
                        </div>
                    </div>
                    <div class="row">
                         <div class="card-link">
                            <a style="height: 20px;"  href="{{ "/admin/vaccine_details" }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row d-card bg-secondary">
                    <div class="row">
                        <div class="card-head">
                            Number Of Child Registered
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex justify-content-center  ">
                            <i class="fas fa-child"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            {{ $count_child }}
                        </div>
                    </div>
                    <div class="row">
                         <div class="card-link">
                            <a class="" style="height: 20px;"  href="">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        {{-- ============================= --}}
        <div class="row">
            <div class="col-md-3">
                <div class="row d-card bg-warning">
                    <div class="row">
                        <div class="card-head">
                             Divisional Director
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex justify-content-center  ">
                            <i class="fas fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                           0
                        </div>
                    </div>
                    <div class="row">
                         <div class="card-link">
                            <a class="" style="height: 20px;"  href="{{ "/admin/divisional_director_list" }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row d-card bg-primary">
                    <div class="row">
                        <div class="card-head">
                            Total Super Intendent
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex justify-content-center  ">
                            <i class="fas fa-user-friends"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                           {{ $count_SI }}
                        </div>
                    </div>
                    <div class="row">
                         <div class="card-link">
                            <a class="" style="height: 20px;"  href="{{ "/admin/health_inspector_list" }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row d-card bg-success">
                    <div class="row">
                        <div class="card-head">
                            Total Health Inspector
                            
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex justify-content-center  ">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                           {{ $count_HI }}
                        </div>
                    </div>
                    <div class="row">
                         <div class="card-link">
                            <a class="" style="height: 20px;"  href="{{ "/admin/super_intendent_list" }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div><div class="col-md-3">
                <div class="row d-card bg-danger">
                    <div class="row">
                        <div class="card-head">
                            Total Health Assistant
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex justify-content-center  ">
                            <i class="fas fa-user-md"></i>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            {{ $count_ha }}
                        </div>
                    </div>
                    <div class="row">
                         <div class="card-link">
                            <a class="" style="height: 20px;"  href="{{ "/admin/health_assistant_list" }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <p>Dashboard /Statistics</p> <hr>

        <h5>Vaccine Wise Statistics Report</h5>
        <div class="statictics">
            <div class="row">
               
            </div>
            <div class="" align="right" style="margin-top:40px;">
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            </div>  
        </div>





    </div>
</section>
@endsection
 
@section('chart')
<script type="text/javascript">
    
window.onload = function vaccinewise() 
{
 
  var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: ""
	},
	subtitles: [{
		text: " "
	}],
	data: [{
	    type:"column", //"column",  type: "pie",
		yValueFormatString: "#,##0.\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
// ====================

// =============
</script>
@endsection