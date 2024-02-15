@extends('layouts.govofficialusernavbar')

@section('content')

<div class="container" style="font-family: poppins;">
    <div class="row">
        <div class="container" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="50" style="width:90%;height:40%;margin-top:15%;border: 6px solid #5F2B84;border-radius: 10px;">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h3 id="h2" style="color: #1F2471;font-weight: bold;text-align: center;margin-top:20%">Successfully completed ICT Assessment<br></h3>
                    </div>
                    <div class="row" style="text-align:center">
                        <h5 id="h4" style="color: var(--bs-emphasis-color);margin-top:5%">You have successfully completed ICT Assessment.<br></h5>
                    </div>
                    <div class="row" style="margin-top:10%">
                        <a class="btn btn-primary" type="button" href="{{ route('operationalIctReport')}}" style="margin-left:20%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);width:60%;border-style: none;"><h4 id="h4">Download</h4></a>
                    </div>
                    <div class="row" style="margin-top:10%;text-allign:center">
                        <a  href="{{ route('operationallayer') }}" style="font-family: poppins;font-size: 20px;color: #5F2B84;margin-left:44%"><h5 id="h4">Back</h5></a>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/Achievement-pana 1.png') }}" style="width:100%;height:80%">
                </div>
            </div>  
        </div>
    </div>
    <div class="row" data-aos="fade-down" data-aos-duration="800" style="text-align: center;font-family: poppins;">
        <h2 id="h2" style="color: #1F2471;font-weight: bold;"><br>Results of the ICT Assessment<br><br></h2>
    </div>
    <div class="row" style="text-align:center">
        <div id="chart_div" style="font-family: Poppins;width:80%;height:70%;margin-left:8%"></div>
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
                    colors: ['#CC1D56']
                };

                var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

                chart.draw(data, options);
                }
                </script>
        </div>
        <div class="row">
        <div class="table-responsive" style="margin-top: 5%;">
        <table class="table">
            <thead style="background: var(--bs-table-border-color);">
                <tr style="background: var(--bs-table-border-color);">
                    <th style="font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><h4 id="h3">Competency Area</h4></th>
                    <th style="font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);"><h4 id="h3">Proficiency</h4></th>
                    <th style="font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);"><h4 id="h3">Recommended areas of improvement</h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">ICT in Workplace<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br><h5 id="h4">{{ $avgOpIctInWorkplace }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($opIctInWorkplace2->ict1_1==0||$opIctInWorkplace2->ict1_2==0||$opIctInWorkplace2->ict1_3==0)
                        Tools techniques and trends that enables digital transformation on public services<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict2==0)
                        Emerging ICT technologies<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict3_1==0||$opIctInWorkplace2->ict3_2==0)
                        Perform tasks according to the ICT plans of the organization<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict3_3==0)
                        ICT Plans<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict4==0)
                        Digital Government Transformation<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict5==0)
                        Internet Application programs<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict6==0)
                        Digital tools and technologies usage<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict7==0)
                        Incident Management<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict8==0)
                        Digital transformation and service innovation<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict9==0)
                        IT configuration management<br><br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br><h5 id="h4">Information Management<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgOpInformationManagement }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;"><h5 id="h4">
                        @if($opInformationManagement2->ict10_1==0||$opInformationManagement2->ict10_2==0||$opInformationManagement2->ict10_3==0||$opInformationManagement2->ict11==0)
                        Information security Data protection and privacy<br><br>
                        @endif
                        @if($opInformationManagement2->ict12==0)
                        Tools and techniques available to retrieve data<br><br>
                        @endif
                        @if($opInformationManagement2->ict13_1==0||$opInformationManagement2->ict13_2==0||$opInformationManagement2->ict13_3==0||$opInformationManagement2->ict14==0)
                        Storage and maintenance<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Digital Citizenship<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgOpDigitalCitizenship }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($opDigitalCitizenship2->ict15==0)
                        Digital media and technologies<br><br>
                        @endif
                        @if($opDigitalCitizenship2->ict16==0)
                        Impact of technology use<br><br>
                        @endif
                        @if ($opDigitalCitizenship2->ict17==0)
                        Cyber risks<br><br>
                        @endif
                        @if ($opDigitalCitizenship2->ict18==0)
                        Cyber-threats<br><br>
                        @endif
                        @if($opDigitalCitizenship2->ict19==0)
                        Digital Empathy<br><br>
                        @endif
                        @if ($opDigitalCitizenship2->ict20_1==0||$opDigitalCitizenship2->ict20_2==0||$opDigitalCitizenship2->ict20_3==0)
                        Digital footprint<br><br>
                        @endif
                        @if ($opDigitalCitizenship2->ict21==0)
                        Digital media<br><br>
                        @endif
                        @if ($opDigitalCitizenship2->ict22==0)
                        Privacy Management<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
        </div>
</div>
<!-- <section data-aos="fade-down" style="height: 3750px;text-align: center;">
    <div data-aos="zoom-in" data-aos-duration="800" data-aos-delay="50" style="margin-top: 150px;width: 1268px;height: 494px;border: 6px solid #5F2B84;border-radius: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xxl-4"><img src="{{ asset('img/Achievement-pana 1.png') }}" width="490" height="481"></div>
                <div class="col-md-6 col-xxl-7">
                    <div class="row">
                        <div class="col" style="text-align: center;margin-top: 20px;"><span style="color: #1F2471;font-family: poppins;font-size: 32px;font-weight: bold;text-align: center;"><br>Successfully completed ICT Assessment<br><br></span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: -30px;"><span style="color: var(--bs-emphasis-color);font-size: 20px;font-family: poppins;"><br>You have successfully completed ICT Assessment.<br><br></span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 50px;">
                            <a class="btn btn-primary" type="button" href="{{ route('operationalIctReport') }}" style="width: 203px;height: 55px;font-size: 20px;font-family: Poppins;background: url(&quot;{{ asset('img/Screenshot (561) 6.png') }}&quot;), var(--bs-body-bg);border-style: none;">Download</a></div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col" style="margin-top: 40px;"><a href="{{ route('operationallayer') }}" style="font-family: poppins;font-size: 20px;color: #5F2B84;">Back</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-down" data-aos-duration="800" style="margin-top: 50px;"><span style="color: #1F2471;font-size: 24px;font-family: poppins;font-weight: bold;text-align: center;"><br>Results of the ICT Assessment<br><br></span>
        <div class="container"style="width: 920px;height: 535px;text-align: center;margin-top: 50px;border-radius: 10px;box-shadow: 0px 0px 7px 4px #5F2B84;border-style: none;border-color: var(--bs-emphasis-color);">
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
                colors: ['#CC1D56']
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
                    <th style="width: 400px;font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br>Competency Area<br><br></th>
                    <th style="width: 300px;font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);"><br>Proficiency<br><br></th>
                    <th style="font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);"><br>Recommended areas of improvement<br><br></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-family: poppins;"><br>ICT in Workplace<br><br></td>
                    <td style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br>{{ $avgOpIctInWorkplace }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($opIctInWorkplace2->ict1_1==0||$opIctInWorkplace2->ict1_2==0||$opIctInWorkplace2->ict1_3==0)
                        Tools techniques and trends that enables digital transformation on public services<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict2==0)
                        Emerging ICT technologies<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict3_1==0||$opIctInWorkplace2->ict3_2==0)
                        Perform tasks according to the ICT plans of the organization<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict3_3==0)
                        ICT Plans<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict4==0)
                        Digital Government Transformation<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict5==0)
                        Internet Application programs<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict6==0)
                        Digital tools and technologies usage<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict7==0)
                        Incident Management<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict8==0)
                        Digital transformation and service innovation<br><br>
                        @endif
                        @if($opIctInWorkplace2->ict9==0)
                        IT configuration management<br><br><br>
                        @endif
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br>Information Management<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgOpInformationManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                        @if($opInformationManagement2->ict10_1==0||$opInformationManagement2->ict10_2==0||$opInformationManagement2->ict10_3==0||$opInformationManagement2->ict11==0)
                        Information security Data protection and privacy<br><br>
                        @endif
                        @if($opInformationManagement2->ict12==0)
                        Tools and techniques available to retrieve data<br><br>
                        @endif
                        @if($opInformationManagement2->ict13_1==0||$opInformationManagement2->ict13_2==0||$opInformationManagement2->ict13_3==0||$opInformationManagement2->ict14==0)
                        Storage and maintenance<br><br>
                        @endif

                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br>Digital Citizenship<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgOpDigitalCitizenship }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($opDigitalCitizenship2->ict15==0)
                        Digital media and technologies<br><br>
                        @endif
                        @if($opDigitalCitizenship2->ict16==0)
                        Impact of technology use<br><br>
                        @endif
                        @if ($opDigitalCitizenship2->ict17==0)
                        Cyber risks<br><br>
                        @endif
                        @if ($opDigitalCitizenship2->ict18==0)
                        Cyber-threats<br><br>
                        @endif
                        @if($opDigitalCitizenship2->ict19==0)
                        Digital Empathy<br><br>
                        @endif
                        @if ($opDigitalCitizenship2->ict20_1==0||$opDigitalCitizenship2->ict20_2==0||$opDigitalCitizenship2->ict20_3==0)
                        Digital footprint<br><br>
                        @endif
                        @if ($opDigitalCitizenship2->ict21==0)
                        Digital media<br><br>
                        @endif
                        @if ($opDigitalCitizenship2->ict22==0)
                        Privacy Management<br><br>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>-->
@endsection 
