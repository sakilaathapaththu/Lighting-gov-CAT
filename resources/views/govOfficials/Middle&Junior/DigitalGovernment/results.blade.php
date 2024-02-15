@extends('layouts.govofficialusernavbar')

@section('content')

<section data-aos="fade-down" style="height: 4550px;text-align: center;">
    <div data-aos="zoom-in" data-aos-duration="800" data-aos-delay="50" style="margin-top: 150px;width: 1268px;height: 494px;border: 6px solid #5F2B84;border-radius: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xxl-4"><img src="{{ asset('img/Stand out-amico 1.png') }}" width="490" height="481"></div>
                <div class="col-md-6 col-xxl-7">
                    <div class="row">
                        <div class="col-xxl-12" style="text-align: center;margin-top: 20px;"><span style="color: #1F2471;font-family: poppins;font-size: 32px;font-weight: bold;text-align: center;"><br>Successfully completed Digital Government Assessment<br><br></span></div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12" style="margin-top: -50px;"><span style="color: var(--bs-emphasis-color);font-size: 20px;font-family: poppins;"><br>You have successfully completed Digital Government Self&nbsp; Assessment.<br><br></span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 20px;"><a class="btn btn-primary" href="{{route('middleDgReport')}}" type="button" style="width: 203px;height: 55px;font-size: 20px;font-family: Poppins;background: url(&quot;{{ asset('img/Screenshot (561) 6.png') }}&quot;), var(--bs-body-bg);border-style: none;">Download</a></div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col" style="margin-top: 40px;"><a href="{{ route('middlelayer') }}" style="font-family: poppins;font-size: 20px;color: #5F2B84;">Back</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-down" data-aos-duration="800" style="margin-top: 50px;"><span style="color: #1F2471;font-size: 24px;font-family: poppins;font-weight: bold;text-align: center;"><br>Results of the Digital Government Self Assessment<br><br></span>
        <div class="container" style="width: 920px;height: 535px;text-align: center;margin-top: 0px;border-radius: 10px;box-shadow: 0px 0px 7px 4px #5F2B84;border-style: none;border-color: var(--bs-emphasis-color);">
            {{--  <img src="{{ asset('img/Group 2d83.png') }}" style="margin-top: 70px;width: 600px;height: 400px;">  --}}
            <div id="chart_div" style="width:850px;height:400px;font-family: Poppins;margin-left:50px;"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {
        {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
      var data = google.visualization.arrayToDataTable({{ Js::from($result) }});

      var options = {

        chartArea: {width: '50%'},
        hAxis: {
          title: 'Proficiency',
          minValue: 0,
          maxValue: 100
        },
        vAxis: {
          title: 'Competency Area',

        },
        colors: ['#92248D']
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
        </div>
    </div>
    <div class="table-responsive" style="margin-top: 100px;margin-left: 50px;">
        <table class="table">
            <thead style="background: var(--bs-table-border-color);">
                <tr style="background: var(--bs-table-border-color);height: 60px;">
                    <th style="width: 400px;font-size: 20px;font-family: poppins;background: var(--bs-table-border-color);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br>Competency Area<br><br></th>
                    <th style="width: 300px;font-size: 20px;font-family: poppins;background: var(--bs-table-border-color);border-left-color: var(--bs-table-striped-color);"><br>Proficiency<br><br></th>
                    <th style="font-size: 20px;font-family: poppins;background: var(--bs-table-border-color);border-left-style: solid;border-left-color: var(--bs-table-color);"><br>Recommended areas of improvement<br><br></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-family: poppins;"><br>Project Management<br><br></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidChangeManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midProjectManagement2->dg1_1==0 || $midProjectManagement2->dg1_2==0 || $midProjectManagement2->dg1_3==0 || $midProjectManagement2->dg1_4==0 || $midProjectManagement2->dg1_5==0 || $midProjectManagement2->dg2_1==0 || $midProjectManagement2->dg2_2==0 || $midProjectManagement2->dg2_3==0 || $midProjectManagement2->dg2_4==0 )
                        <br>Project Management<br><br>
                        <br>Program Management<br><br>
                        @endif
                        @if($midProjectManagement2->dg3_1==0 || $midProjectManagement2->dg3_2==0 || $midProjectManagement2->dg3_3==0)
                        <br>Digitalization<br><br>
                        <br>LoB<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br>Change Management<br><br></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidChangeManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midChangeManagement2->dg4==0 || $midChangeManagement2->dg5==0)
                        <br>Change Management<br><br>
                        @endif
                        @if($midChangeManagement2->dg6==0 || $midChangeManagement2->dg7==0 || $midChangeManagement2->dg8==0 || $midChangeManagement2->dg9_1==0 || $midChangeManagement2->dg9_2==0 || $midChangeManagement2->dg9_3==0)
                        <br>Digital services<br><br>
                        @endif
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br>Collaboration and Partnership</td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidCollaboration }}%</td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                        @if($midCollaboration2->dg10==0)
                        <br>Collaboration<br><br>
                        @endif
                        @if($midCollaboration2->dg11_1==0 || $midCollaboration2->dg11_2==0 || $midCollaboration2->dg11_3==0 || $midCollaboration2->dg11_4==0 || $midCollaboration2->dg12==0)
                        <br>Diversity<br><br>
                        <br>Inclusiveness<br><br>
                        <br>Bridge the digital divide<br><br>
                        @endif
                        @if($midCollaboration2->dg13==0 || $midCollaboration2->dg14==0)
                        <br>Data sharing<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br>Results Orientation<br><br></td>
                    <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;"><br>{{ $avgmidOrientatiion }}%</td>
                    <td style="text-align: left;font-family: poppins;">
                        @if($midOrientation2->dg15==0 || $midOrientation2->dg16_1==0 || $midOrientation2->dg16_2==0 || $midOrientation2->dg16_3==0 || $midOrientation2->dg16_4==0)
                            <br>Evaluate outcomes<br><br>
                        @endif
                        @if($midOrientation2->dg17==0 || $midOrientation2->dg18==0)
                            <br>Continuous innovation<br><br>
                            <br>Stakeholder satisfaction<br><br>
                        @endif
                        @if($midOrientation2->dg19_1==0 || $midOrientation2->dg19_2==0 || $midOrientation2->dg19_3==0 || $midOrientation2->dg19_4==0)
                            <br>Performance Management<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br><br>Quality Management<br><br></td>
                    <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;"><br>{{ $avgmidQualityManagement }}%</td>
                    <td style="text-align: left;font-family: poppins;">
                        @if($midQualityManagement2->dg20==0 || $midQualityManagement2->dg21==0)
                            <br>Business Environmental Analysis<br><br>
                        @endif
                        @if($midQualityManagement2->dg22_1==0 || $midQualityManagement2->dg22_2==0 || $midQualityManagement2->dg22_3==0 || $midQualityManagement2->dg22_4==0)
                            <br>Stakeholder expectations and satisfaction<br><br>
                            <br>Quality management<br><br>
                        @endif
                        @if($midQualityManagement2->dg23==0 || $midQualityManagement2->dg24==0)
                            <br>Quality management<br><br>
                            <br>Digital means available<br><br>
                            <br>Service delivery<br><br>
                        @endif
                        @if($midQualityManagement2->dg25==0)
                            <br>Service delivery<br><br>
                            <br>Quality management<br><br>
                        @endif

                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br><br><br>Execute Digital Government Initiatives<br><br></td>
                    <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;"><br>{{ $avgmidInitiative }}%</td>
                    <td style="text-align: left;font-family: poppins;">
                        @if($midInitiative2->dg26_1==0 || $midInitiative2->dg26_2==0 || $midInitiative2->dg26_3==0 || $midInitiative2->dg27_1==0)
                            <br>National Digital Transformation Plan<br><br>
                        @endif
                        @if($midInitiative2->dg27_2==0 || $midInitiative2->dg27_3==0)
                            <br>Digital service offerings of the organization<br><br>
                        @endif
                        @if($midInitiative2->dg28==0)
                            <br>CDIO<br><br>
                        @endif
                        @if($midInitiative2->dg29==0 || $midInitiative2->dg30==0 || $midInitiative2->dg31==0)
                            <br>Service delivery channels<br><br>
                        @endif
                        @if($midInitiative2->dg32==0)
                            <br>Digital Maturity Model of GoSL<br><br>
                            <br>Digital government<br><br>
                        @endif
                        @if($midInitiative2->dg33==0 || $midInitiative2->dg34==0)
                            <br>Procurement management<br><br>
                            <br>Government ICT related procurement<br><br>
                        @endif
                        @if($midInitiative2->dg35_1==0 || $midInitiative2->dg35_2==0 || $midInitiative2->dg35_3==0 || $midInitiative2->dg35_4==0)
                            <br>Policy and procedure formulation<br><br>
                        @endif
                        @if($midInitiative2->dg36_1==0 || $midInitiative2->dg36_2==0 || $midInitiative2->dg36_3==0 || $midInitiative2->dg36_4==0)
                            <br>Strategic plans<br><br>
                        @endif
                        @if($midInitiative2->dg37==0)
                            <br>Leadership<br><br>
                            <br>Organization digital strategy and vision<br><br>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

@endsection
