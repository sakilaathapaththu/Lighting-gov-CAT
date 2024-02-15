@extends('layouts.govofficialusernavbar')

@section('content')
<section data-aos="fade-down" style="height: 7750px;text-align: center;">
    <div class="container" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="50" style="margin-top: 150px;width: 1268px;height: 494px;border: 6px solid #5F2B84;border-radius: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xxl-4"><img src="{{ asset('img/Achievement-pana 1.png ')}}" width="490" height="481"></div>
                <div class="col-md-6 col-xxl-7" style="margin-left: 50px;">
                    <div class="row">
                        <div class="col" style="text-align: center;margin-top: 20px;"><span style="color: #1F2471;font-family: poppins;font-size: 32px;font-weight: bold;text-align: center;"><br>Successfully completed Assessment</span></div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12" style="margin-top: -30px;"><span style="color: var(--bs-emphasis-color);font-size: 20px;font-family: poppins;"><br><br>You have successfully completed Three Assessment.(ICT assessment, Digital Government Assessment, Management Assessment)<br><br></span></div>
                    </div>
                    <div class="row" style="margin: 0px;margin-top: 10px;">
                        <div class="col" style="margin-top: 30px;">
                            <a class="btn btn-primary" href="{{ route('topOverallReport') }}" type="button" style="width: 203px;height: 55px;font-size: 20px;font-family: Poppins;background: url(&quot;{{ asset('img/Screenshot (561) 6.png') }}&quot;), var(--bs-body-bg);border-style: none;">Download</a></div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col" style="margin-top: 40px;"><a href="{{ route('toplayer') }}" style="font-family: poppins;font-size: 20px;color: #5F2B84;">Back</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 60px;">
        <div class="col" style="height: 100px;"><span style="color: #1F2471;font-size: 32px;font-family: poppins;font-weight: bold;text-align: center;margin-top: -10px;"><br>Overall Results<br><br></span>
            <canvas id="chartId" aria-label="chart" data-aos="fade-down" data-aos-duration="1000" style="margin-left: 200px; font-size: 20px;" height="664" width="830"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
            <script>
                var ctx = document.getElementById("chartId").getContext("2d");
                var radarData = {
                    labels: {!! json_encode($labels) !!},
                    datasets: [{
                        label: "Marks for each assessment",
                        data: {!! json_encode($data) !!},
                        backgroundColor: "rgba(255, 99, 132, 0.2)",
                        borderColor: "rgba(229, 89, 52, 1)",
                        borderWidth: 2,
                        pointBackgroundColor: "pink",
                        pointRadius: 6,
                    }]

                };


                var radarOptions = {
                    responsive: false,
                    elements: {
                        line: {
                            borderWidth: 6,
                        }
                    },

                    scale: {
                        r: {
                            angleLines: {
                                display: false
                            },
                            suggestedMin: 0,
                            suggestedMax: 100
                        }

                    }
                };

                var radarChart = new Chart(ctx, {
                    type: 'radar',
                    data: radarData,
                    options: radarOptions,
                });
            </script>
        </div>
    </div>
    <div data-aos="fade-down" data-aos-duration="800" style="margin-top: 800px;"><span style="color: #1F2471;font-size: 24px;font-family: poppins;font-weight: bold;text-align: center;"><br>Results of the ICT Assessment<br><br></span>
        <div class="container" style="margin-left:15%">
        <div style="width: 920px;height: 535px;text-align: center;margin-top: 50px;border-radius: 10px;box-shadow: 0px 0px 7px 4px #5F2B84;border-style: none;border-color: var(--bs-emphasis-color);">
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
                    <td style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br>{{ $avgTopIctInWorkplace }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($topIctInWorkplace2->ict1==0)
                        Digital transformation on public services<br><br>
                        @endif
                        @if($topIctInWorkplace2->ict2==0)
                        Emerging ICT technologies<br><br>
                        @endif
                        @if($topIctInWorkplace2->ict3==0)
                        Developing ICT plans<br><br>
                        Digital government strategy <br><br>
                        @endif
                        @if($topIctInWorkplace2->ict4==0)
                        Digital Government Transformation<br><br>
                        @endif
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br>Information Management<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgTopInformationManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                        @if($topInformationManagement2->ict5==0)
                        Information security<br><br>
                        Data protection and privacy<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br>Digital Citizenship<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgTopDigitalCitizenship }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($topDigitalCitizenship2->ict6_1==0||$topDigitalCitizenship2->ict6_2==0||$topDigitalCitizenship2->ict6_3==0)
                        Digital media and technologies<br><br>
                        @endif
                        @if($topDigitalCitizenship2->ict7_1==0||$topDigitalCitizenship2->ict7_2==0||$topDigitalCitizenship2->ict7_3==0)
                        Impact of technology use use<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict8==0)
                        Cyber risks<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict9==0)
                        Cyber-threats<br><br>
                        @endif
                        @if($topDigitalCitizenship2->ict10==0)
                        Digital Empathy<br><br>
                        @endif
                        @if($topDigitalCitizenship2->ict11==0)
                        Digital footprints<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict12_1==0||$topDigitalCitizenship2->ict12_2==0||$topDigitalCitizenship2->ict12_3==0)
                        Digital media<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict13==0)
                        Privacy Management<br><br>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div data-aos="fade-down" data-aos-duration="800" style="margin-top: 50px;"><span style="color: #1F2471;font-size: 24px;font-family: poppins;font-weight: bold;text-align: center;"><br>Results of the Digital Government Self Assessment<br><br></span>
        <div style="width: 920px;height: 535px;text-align: center;margin-left:15%;margin-top: 50px;border-radius: 10px;box-shadow: 0px 0px 7px 4px #5F2B84;border-style: none;border-color: var(--bs-emphasis-color);">
            <div id="chart_div2" style="width:850px;height:400px;font-family: Poppins;margin-left:50px;"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script>
                google.charts.load('current', {packages: ['corechart', 'bar']});
                google.charts.setOnLoadCallback(drawBasic);

            function drawBasic() {
                {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
            var data = google.visualization.arrayToDataTable({{ Js::from($result2) }});

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

            var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));

            chart.draw(data, options);
            }
            </script>
        </div>
    </div>
    {{--  <div class="table-responsive" style="margin-top: 100px;margin-left: 50px;">
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
                    <td style="font-family: poppins;"><br>Change Management<br><br></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgOpChangeManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($opChangeManagement2->dg1==0)
                        <br>Change management in digital transformation<br><br>
                        @endif
                        @if($opChangeManagement2->dg2==0)
                        <br>Digital services<br><br>
                        @endif
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br>Collaboration and Partnership</td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgOpCollaboration }}%</td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                        @if($opCollaboration2->dg3==0)
                        <br>Collaboration<br><br>
                        @endif
                        @if($opCollaboration2->dg4==0)
                        <br>Team dynamics<br><br>
                        <br>Integration<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br>Results Orientation<br><br></td>
                    <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;"><br>{{ $avgOpOrientatiion }}%</td>
                    <td style="text-align: left;font-family: poppins;">
                        @if($opOrientation2->dg5==0)
                            <br>Results orientation in public service delivery<br><br>
                        @endif
                        @if($opOrientation2->dg6==0)
                            <br>KPIs of digital government services<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br><br>Quality Management<br><br></td>
                    <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;"><br>{{ $avgOpQualityManagement }}%</td>
                    <td style="text-align: left;font-family: poppins;">
                        @if($opQualityManagement2->dg7==0)
                            <br>Customer Service<br><br>
                        @endif
                        @if($opQualityManagement2->dg8==0)
                            <br>Delivery chain and its elements<br><br>
                        @endif
                        @if($opQualityManagement2->dg9==0)
                            <br>Service delivery<br><br>
                            <br>Quality management<br><br>
                        @endif

                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br><br><br>Execute Digital Government Initiatives<br><br></td>
                    <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;"><br>{{ $avgOpInitiative }}%</td>
                    <td style="text-align: left;font-family: poppins;">
                        @if($opInitiative2->dg10==0)
                            <br>Legal framework for digital Government in Sri Lanka<br><br>
                        @endif
                        @if($opInitiative2->dg11==0)
                            <br>Public service delivery<br><br>
                        @endif
                        @if($opInitiative2->dg12==0)
                            <br>CDIO<br><br>
                        @endif
                        @if($opInitiative2->dg13==0)
                            <br>Service delivery channels<br><br>
                        @endif
                        @if($opInitiative2->dg14_1==0)
                            <br>National Digital Transformation Plan<br><br>
                        @endif
                        @if($opInitiative2->dg14_2==0)
                            <br>National Digital Transformation Plan<br><br>
                        @endif
                        @if($opInitiative2->dg15==0)
                            <br>Code of ethics<br><br>
                            <br>Public service values<br><br>
                            <br>Personal development<br><br>
                            <br>Public service delivery<br><br>
                        @endif
                        @if($opInitiative2->dg16==0)
                            <br>Citizenship orientation<br><br>
                            <br>Public service delivery<br><br>
                        @endif
                        @if($opInitiative2->dg17==0)
                            <br>Personal development<br><br>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>  --}}
    <div data-aos="fade-down" data-aos-duration="800" style="margin-top: 50px;"><span style="color: #1F2471;font-size: 24px;font-family: poppins;font-weight: bold;text-align: center;"><br>Results of the Management Self Assessment<br><br></span>
        <div style="width: 920px;height: 535px;text-align: center;margin-left:15%;margin-top: 50px;border-radius: 10px;box-shadow: 0px 0px 7px 4px #5F2B84;border-style: none;border-color: var(--bs-emphasis-color);">
            <div id="chart_div3" style="width:850px;height:400px;font-family: Poppins;margin-left:50px;"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script>
                google.charts.load('current', {packages: ['corechart', 'bar']});
                google.charts.setOnLoadCallback(drawBasic);

            function drawBasic() {
                {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
            var data = google.visualization.arrayToDataTable({{ Js::from($result3) }});

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
                colors: ['#037774']
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

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
                    <td style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br>{{ $avgTopIctInWorkplace }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($topIctInWorkplace2->ict1==0)
                        Digital transformation on public services<br><br>
                        @endif
                        @if($topIctInWorkplace2->ict2==0)
                        Emerging ICT technologies<br><br>
                        @endif
                        @if($topIctInWorkplace2->ict3==0)
                        Developing ICT plans<br><br>
                        Digital government strategy <br><br>
                        @endif
                        @if($topIctInWorkplace2->ict4==0)
                        Digital Government Transformation<br><br>
                        @endif
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br>Information Management<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgTopInformationManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                        @if($topInformationManagement2->ict5==0)
                        Information security<br><br>
                        Data protection and privacy<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br>Digital Citizenship<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgTopDigitalCitizenship }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($topDigitalCitizenship2->ict6_1==0||$topDigitalCitizenship2->ict6_2==0||$topDigitalCitizenship2->ict6_3==0)
                        Digital media and technologies<br><br>
                        @endif
                        @if($topDigitalCitizenship2->ict7_1==0||$topDigitalCitizenship2->ict7_2==0||$topDigitalCitizenship2->ict7_3==0)
                        Impact of technology use use<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict8==0)
                        Cyber risks<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict9==0)
                        Cyber-threats<br><br>
                        @endif
                        @if($topDigitalCitizenship2->ict10==0)
                        Digital Empathy<br><br>
                        @endif
                        @if($topDigitalCitizenship2->ict11==0)
                        Digital footprints<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict12_1==0||$topDigitalCitizenship2->ict12_2==0||$topDigitalCitizenship2->ict12_3==0)
                        Digital media<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict13==0)
                        Privacy Management<br><br>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<div class="row" style="margin-top: -20px;">
    <div class="col" style="text-align: center;margin-top: -80px;">

    </div>
</div>
@endsection
