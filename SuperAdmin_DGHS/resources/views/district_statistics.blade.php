@extends('layout.app')
@section('title','District Wise Statistics')


@section('content')
<section class="right-panel">
    <div class="container">
        <p>Super Admin / Statistics / District Wise Statistics</p> <hr>
        <div class="" align="right" style="margin-top:40px;">
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
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
            type:"bar", //"column",  type: "pie",
            yValueFormatString: "#,##0.\"\"",
            indexLabel: "{label} ({y})",
            dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
    }
    </script>
@endsection
