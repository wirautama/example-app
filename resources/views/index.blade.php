@extends('templates.template')
@section('content')

@section('title', 'Dashboard')

<div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Bar Chart</h3>
      {{-- {{$chart['jurusan']}} --}}

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="chart">
        <canvas id="barChart" style="height:230px"></canvas>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  {{-- {{ $chart['jurusan'] }} --}}

  @push('javascript')
  <script>
    //-------------
   //- BAR CHART -
   //-------------
   var areaChartData = {
     labels  : [`@foreach ($jurusan as $item) {{$item}}`,` @endforeach`],
     datasets: [
       {
         label               : 'Laki-laki',
         fillColor           : 'rgba(235, 52, 52, 1)',
         strokeColor         : 'rgba(235, 52, 52, 1)',
         pointColor          : 'rgba(235, 52, 52, 1)',
         pointStrokeColor    : '#c1c7d1',
         pointHighlightFill  : '#fff',
         pointHighlightStroke: 'rgba(220,220,220,1)',
         data                : [`@foreach ($boys as $item) {{$item}}`,` @endforeach`]
       },
       {
         label               : 'Perempuan',
         fillColor           : 'rgba(60,141,188,0.9)',
         strokeColor         : 'rgba(60,141,188,0.8)',
         pointColor          : '#3b8bba',
         pointStrokeColor    : 'rgba(60,141,188,1)',
         pointHighlightFill  : '#fff',
         pointHighlightStroke: 'rgba(60,141,188,1)',
         data                : [`@foreach ($girls as $item) {{$item}}`,` @endforeach`]
       }
     ]
   }
   
   var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
   var barChart                         = new Chart(barChartCanvas)
   var barChartData                     = areaChartData
   barChartData.datasets[1].fillColor   = '#00a65a'
   barChartData.datasets[1].strokeColor = '#00a65a'
   barChartData.datasets[1].pointColor  = '#00a65a'
   var barChartOptions                  = {
     //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
     scaleBeginAtZero        : true,
     //Boolean - Whether grid lines are shown across the chart
     scaleShowGridLines      : true,
     //String - Colour of the grid lines
     scaleGridLineColor      : 'rgba(0,0,0,.05)',
     //Number - Width of the grid lines
     scaleGridLineWidth      : 1,
     //Boolean - Whether to show horizontal lines (except X axis)
     scaleShowHorizontalLines: true,
     //Boolean - Whether to show vertical lines (except Y axis)
     scaleShowVerticalLines  : true,
     //Boolean - If there is a stroke on each bar
     barShowStroke           : true,
     //Number - Pixel width of the bar stroke
     barStrokeWidth          : 2,
     //Number - Spacing between each of the X value sets
     barValueSpacing         : 5,
     //Number - Spacing between data sets within X values
     barDatasetSpacing       : 1,
     //String - A legend template
     legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
     //Boolean - whether to make the chart responsive
     responsive              : true,
     maintainAspectRatio     : true
   }

   barChartOptions.datasetFill = false
   barChart.Bar(barChartData, barChartOptions)
 </script>
  @endpush


  
@endsection