<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <style>

        @media print {
          .page-break {
            page-break-before: always;
          }
        }
      </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Competency Proficiency - Overall</title>
        <link rel="stylesheet" href="{{asset('cssfile/bootstrap2.min.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    </head>

    <body>
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
            <div class="container" style="width: 535px;height: 782px;text-align:center">
                <div class="row" style="margin-top: 100px;">
                    <div class="col" style="text-align: center;"><img src="{{ asset('img/emblem.png') }}" style="width:102px;height:133px"></div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">Digital Government Competency<br> Framework</span></div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">Competency Proficiency -Overall</span></div>
                </div>
                <div class="row" style="margin-top: 300px;">
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govOfficial->full_name }}</span></div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govOfficial->designation }}</span></div>
                </div>
                <div class="row" >
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govOfficial->govorganizationname->gov_org_name }}</span></div>
                </div>
                <div class="row" style="text-align: center;margin-top: 250px;">
                    <div class="col"></div>
                </div>
                <div class="row" style="text-align: center;margin-top: 170px;">
                    <div class="col">
                        <div class="row">
                            <span style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">Initiation under</span>
                        </div>
                        <div class="row">
                            <img src="{{ asset('ICTA.png') }}" style="margin-left:165px;margin-top:10px;width: 160px;height: 64px">
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <span style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">Prepared by</span>
                        </div>
                        <div class="row">
                            <img src="{{ asset('Light2.png') }}" style="margin-left:183px;margin-top:10px;width:126px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-break"></div>
        <div class="container" style="border-style: solid;border-color: #000000; width:700px;height:1450px">
            <div class="container" style="width: 600px; height: 782px; ">
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Competancy Proficiency<br><br></span></div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;">
                        <canvas id="chartId" aria-label="chart" data-aos="fade-down" data-aos-duration="1000" style="margin-top:20%;margin-left: 5%; font-size: 20px;" height="664" width="830"></canvas>
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



                <div class="row" style="text-align: center;margin-top:40%">
                    <div class="col" style="margin-left:300px"><span style="font-family: Poppins, sans-serif;">2</span></div>
                    <div class="col" style="margin-right:-50px"><img src="{{ asset('ICTA.png') }}" style="width: 117px;height: 55px"><img src="{{ asset('Light2.png') }}" style="width:126px;"></div>
                </div>
            </div>
        </div>
        <div class="page-break"></div>
        <div class="container" style="border-style: solid;border-color: #000000; width:700px;height:1450px">
            <div class="container" style="width: 600px; height: 782px; ">
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of ICT&nbsp; Assessment <br><br></span></div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;">
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
                <div class="container">
                <div class="table-responsive" style="margin-top: 30px;width:600px;font-family: Poppins, sans-serif;">
                    <table class="table">
                        <thead style="background: var(--bs-table-border-color);">
                            <tr style="background: var(--bs-table-border-color);">
                                <th style="background: var(--bs-table-border-color);width: 200px;font-size: 12px;">Competency Area</th>
                                <th style="background: var(--bs-table-border-color);font-size: 12px;">Definitions</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px;">
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;">ICT in workplace</td>
                                <td style="font-size: 12px;">Productively perform tasks in the workplace by using ICT skills and knowledge in a digital government setting</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Information Management<br><br></td>
                                <td style="font-size: 12px;"><br>Ensure data and information are secure and adhere to data protection policies and laws in Digital Government service delivery</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Digital Citizenship</td>
                                <td style="font-size: 12px;"><br>Use of digital technology and media in safe responsible and ethical ways</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>

                <div class="row" style="text-align: center;margin-top:40%">
                    <div class="col" style="margin-left:300px"><span style="font-family: Poppins, sans-serif;">2</span></div>
                    <div class="col" style="margin-right:-50px"><img src="{{ asset('ICTA.png') }}" style="width: 117px;height: 55px"><img src="{{ asset('Light2.png') }}" style="width:126px;"></div>
                </div>

            </div>
        </div>
        <div class="page-break"></div>
        <div class="container" style="border-style: solid;border-color: #000000; width:700px;height:1450px">
            <div class="container" style="width: 600px; height: 782px; ">
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;color: #1F2471;"><br>Recommendations</span></div>
                </div>
                <div class="container">
                <div class="table-responsive" style="margin-top: 30px;width:850px;">
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
                    <td style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br>{{ $avgMidIctInWorkplace }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midIctInWorkplace2->ict1==0)
                        <br>Tools techniques and trends that enables digital transformation on public services<br><br>
                        @endif
                        @if($midIctInWorkplace2->ict2==0)
                        <br>Emerging ICT technologies<br><br>
                        @endif
                        @if($midIctInWorkplace2->ict3==0)
                        <br>Line of Business and tools and techniques in digitalization<br><br>
                        @endif
                        @if($midIctInWorkplace2->ict4==0)
                        <br>Digital Government Transformation<br><br>
                        @endif
                        @if($midIctInWorkplace2->ict5_1==0||$midIctInWorkplace2->ict5_2==0)
                        <br>Innovation adoption<br><br>
                        @endif
                        @if($midIctInWorkplace2->ict6_1==0||$midIctInWorkplace2->ict6_2==0)
                        <br>Digital tools and technologies usage<br><br>
                        @endif
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br>Information Management<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgMidInformationManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                        @if($midInformationManagement2->ict7==0)
                        <br>Information security Data protection and privacy<br><br>
                        @endif
                        @if($midInformationManagement2->ict8==0)
                        <br>Tools and techniques available to retrieve data<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br>Digital Citizenship<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgMidDigitalCitizenship }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midDigitalCitizenship2->ict9_1==0||$midDigitalCitizenship2->ict9_2==0||$midDigitalCitizenship2->ict9_3==0)
                        <br>Digital media and technologies<br><br>
                        @endif
                        @if($midDigitalCitizenship2->ict10_1==0||$midDigitalCitizenship2->ict10_2==0||$midDigitalCitizenship2->ict10_3==0)
                        <br>Impact of technology use<br><br>
                        @endif
                        @if($midDigitalCitizenship2->ict11==0)
                        <br>Cyber risks<br><br>
                        @endif
                        @if($midDigitalCitizenship2->ict12==0)
                        <br>Cyber-threats<br><br>
                        @endif
                        @if($midDigitalCitizenship2->ict13==0)
                        <br>Digital Empathy<br><br>
                        @endif
                        @if($midDigitalCitizenship2->ict14==0)
                        <br>Digital footprint<br><br>
                        @endif
                        @if($midDigitalCitizenship2->ict15_1==0||$midDigitalCitizenship2->ict15_2==0||$midDigitalCitizenship2->ict15_3==0)
                        <br>Digital media<br><br>
                        @endif
                        @if($midDigitalCitizenship2->ict16==0)
                        <br>Privacy Management<br><br>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
                </div>
                </div>
                <div class="row" style="text-align: center">
                    <div class="col" style="margin-left:300px"><span style="font-family: Poppins, sans-serif;">3</span></div>
                    <div class="col" style="margin-right:-50px"><img src="{{ asset('ICTA.png') }}" style="width: 117px;height: 55px"><img src="{{ asset('Light2.png') }}" style="width:126px;"></div>
                </div>
            </div>
        </div>
        <div class="page-break"></div>
        <div class="container" style="border-style: solid;border-color: #000000; width:700px;height:1450px">
            <div class="container" style="width: 600px; height: 782px; ">
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of Digital Government&nbsp; Assessment <br><br></span></div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;">
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
                <div class="container">
                <div class="table-responsive" style="margin-top: 30px;width:600px;font-family: Poppins, sans-serif;">
                    <table class="table">
                        <thead style="background: var(--bs-table-border-color);">
                            <tr style="background: var(--bs-table-border-color);">
                                <th style="background: var(--bs-table-border-color);width: 200px;font-size: 12px;">Competency Area</th>
                                <th style="background: var(--bs-table-border-color);font-size: 12px;">Definitions</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px;">
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;">Change Management</td>
                                <td style="font-size: 12px;">Managing change in the Digital Government setting</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Collaboration and Partnership<br><br></td>
                                <td style="font-size: 12px;"><br>Collaborating and partnering in enhancing Digital Government capacity</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Results Orientation</td>
                                <td style="font-size: 12px;"><br>Results orientation to achieve desired outcomes and sustain stakeholder satisfaction in digital government</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Quality Management</td>
                                <td style="font-size: 12px;"><br>Delivering and managing quality in Digital Government Services</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Execute Digital Government Initiatives</td>
                                <td style="font-size: 12px;"><br>Carry out activities in digital government initiatives</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>

                <div class="row" style="text-align: center;margin-top:40%">
                    <div class="col" style="margin-left:300px"><span style="font-family: Poppins, sans-serif;">2</span></div>
                    <div class="col" style="margin-right:-50px"><img src="{{ asset('ICTA.png') }}" style="width: 117px;height: 55px"><img src="{{ asset('Light2.png') }}" style="width:126px;"></div>
                </div>

            </div>
        </div>
        <div class="page-break"></div>
        <div class="container" style="border-style: solid;border-color: #000000; width:700px;height:1450px">
            <div class="container" style="width: 600px; height: 782px; ">
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;color: #1F2471;"><br>Recommendations</span></div>
                </div>
                <div class="table-responsive" style="margin-top: 30px;width:650px;margin-left:20%">
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
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgMidChangeManagement }}%</td>
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
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgMidChangeManagement }}%</td>
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
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgMidCollaboration }}%</td>
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
                    <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;"><br>{{ $avgMidOrientatiion }}%</td>
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
                    <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;"><br>{{ $avgMidQualityManagement }}%</td>
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
                    <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;"><br>{{ $avgMidInitiative }}%</td>
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
                <div class="row" style="text-align: center;margin-top:10%">
                    <div class="col" style="margin-left:300px"><span style="font-family: Poppins, sans-serif;">3</span></div>
                    <div class="col" style="margin-right:-50px"><img src="{{ asset('ICTA.png') }}" style="width: 117px;height: 55px"><img src="{{ asset('Light2.png') }}" style="width:126px;"></div>
                </div>
            </div>
        </div>
        <div class="page-break"></div>
        <div class="container" style="border-style: solid;border-color: #000000; width:700px;height:1450px">
            <div class="container" style="width: 600px; height: 782px; ">
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of Management&nbsp; Assessment <br><br></span></div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;">
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
                        colors: ['#92248D']
                    };

                    var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

                    chart.draw(data, options);
                    }
                    </script>
                    </div>
                </div>
                <div class="container">
                <div class="table-responsive" style="margin-top: 30px;width:600px;font-family: Poppins, sans-serif;">
                    <table class="table">
                        <thead style="background: var(--bs-table-border-color);">
                            <tr style="background: var(--bs-table-border-color);">
                                <th style="background: var(--bs-table-border-color);width: 200px;font-size: 12px;">Competency Area</th>
                                <th style="background: var(--bs-table-border-color);font-size: 12px;">Definitions</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px;">
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;">Communication</td>
                                <td style="font-size: 12px;">Follow effective communication best practices to achieve personal and departmental goals and objectives and champion transparent communication in digital government</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Workplace Management<br><br></td>
                                <td style="font-size: 12px;"><br>Actively engage in a holistic and open environment that promotes collaboration and productivity towards achieving digital government transformation</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Stakeholder Management</td>
                                <td style="font-size: 12px;"><br>Actively promote digital service delivery through a citizen-oriented approach and a collaborative work environment while effectively managing stakeholders for digital government initiatives</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Teamwork<br><br></td>
                                <td style="font-size: 12px;"><br>Ability to work in a team and bring synergies through effective team working</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Personal Development<br><br></td>
                                <td style="font-size: 12px;"><br>Continuously engage in activities to develop oneself, specialized knowledge, and expertise</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>

                <div class="row" style="text-align: center;margin-top:40%">
                    <div class="col" style="margin-left:300px"><span style="font-family: Poppins, sans-serif;">2</span></div>
                    <div class="col" style="margin-right:-50px"><img src="{{ asset('ICTA.png') }}" style="width: 117px;height: 55px"><img src="{{ asset('Light2.png') }}" style="width:126px;"></div>
                </div>

            </div>
        </div>
        <div class="page-break"></div>
        <div class="container" style="border-style: solid;border-color: #000000; width:700px;height:1450px">
            <div class="container" style="width: 600px; height: 782px; ">
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;color: #1F2471;"><br>Recommendations</span></div>
                </div>
                <div class="container">
                <div class="table-responsive" style="margin-top: 30px;width:850px;">
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
                    <td style="font-family: poppins;"><br><br><br>Communication<br><br></td>
                    <td style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidCommunication }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midCommunication2->mgt1==0||$midCommunication2->mgt2_1==0||$midCommunication2->mgt2_2==0 ||$midCommunication2->mgt2_3==0 ||$midCommunication2->mgt2_4==0||$midCommunication2->mgt4==0||$midCommunication2->mgt5==0)
                        <br>Communication<br><br>
                        @endif
                        @if($midCommunication2->mgt3==0)
                        Digital communication<br><br>
                        @endif
                        @if($midCommunication2->mgt4==0)
                        Personal development<br><br>
                        @endif
                        @if($midCommunication2->mgt5==0)
                        Leadership<br><br>
                        @endif
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br><br><br>Workplace Management<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidWorkplaceManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                        @if($midWorkplaceManagement2->mgt6==0)
                        Risk Management<br><br>
                        @endif
                        @if($midWorkplaceManagement2->mgt7==0)
                        Promote benefits to the citizens of digital services<br><br>
                        @endif
                        @if($midWorkplaceManagement2->mgt8==0)
                        Team dynamics <br><br>
                        Collaboration <br><br>
                        @endif
                        @if($midWorkplaceManagement2->mgt9_1==0||$midWorkplaceManagement2->mgt9_2==0||$midWorkplaceManagement2->mgt9_3==0||$midWorkplaceManagement2->mgt9_4==0)
                        Team dynamics Collaboration<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br><br>Decision Making</td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidDecisionMaking }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midDecisionMaking2->mgt10==0||$midDecisionMaking2->mgt11==0||$midDecisionMaking2->mgt12==0)
                        Decision making<br><br>
                        @endif
                        @if($midDecisionMaking2->mgt13==0||$midDecisionMaking2->mgt14==0)
                        Change management<br><br>
                        @endif
                        @if($midDecisionMaking2->mgt15==0)
                        Decision making <br><br>
                        Personal development<br><br>
                        @endif
                        @if($midDecisionMaking2->mgt16==0||$midDecisionMaking2->mgt17==0)
                        Business intelligence <br><br>
                        Data analytics<br><br>
                        @endif
                        @if($midDecisionMaking2->mgt18==0)
                        Risk Management<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br><br>Capacity Building</td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidCapacityBuilding }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midCapacityBuilding2->mgt19_1==0||$midCapacityBuilding2->mgt19_2==0||$midCapacityBuilding2->mgt19_3==0||$midCapacityBuilding2->mgt19_4==0)
                        Human resources <br><br>
                        Talent management<br><br>
                        @endif
                        @if($midCapacityBuilding2->mgt20_1==0||$midCapacityBuilding2->mgt20_2==0||$midCapacityBuilding2->mgt20_3==0||$midCapacityBuilding2->mgt20_4==0)
                        Digital transformation<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br><br>Stakeholder Management</td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidStakeholderManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midStakeholderManagement2->mgt21==0||$midStakeholderManagement2->mgt22==0)
                        Human resources <br><br>
                        Talent management<br><br>
                        @endif
                        @if($midStakeholderManagement2->mgt23_1==0||$midStakeholderManagement2->mgt23_2==0||$midStakeholderManagement2->mgt23_3==0||$midStakeholderManagement2->mgt23_4==0)
                        Promote benefits to the citizens of a digital service amongst employees<br><br>
                        @endif
                        @if($midStakeholderManagement2->mgt24_1==0||$midStakeholderManagement2->mgt24_2==0||$midStakeholderManagement2->mgt24_3==0)
                        Stakeholder management<br><br>
                        @endif
                        @if($midStakeholderManagement2->mgt25_1==0||$midStakeholderManagement2->mgt25_2==0||$midStakeholderManagement2->mgt25_3==0||$midStakeholderManagement2->mgt25_4==0||$midStakeholderManagement2->mgt26==0)
                        Empower employees Communication Learning and development Decision making<br><br>
                        @endif
                        @if($midStakeholderManagement2->mgt27==0)
                        Citizenship orientation <br><br>
                        Customer service<br><br>
                        @endif
                        @if($midStakeholderManagement2->mgt28==0||$midStakeholderManagement2->mgt28==0)
                        Team dynamics <br><br>
                        Collaborative<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br>Performance Management<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidPerformanceManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midStakeholderManagement2->mgt30_1==0||$midStakeholderManagement2->mgt30_2==0||$midStakeholderManagement2->mgt30_3==0||$midStakeholderManagement2->mgt34==0||$midStakeholderManagement2->mgt35==0)
                        Performance management<br><br>
                        @endif
                        @if($midStakeholderManagement2->mgt31==0)
                        Human Resource Development<br><br>
                        @endif
                        @if($midPerformanceManagement2->mgt32_1==0||$midPerformanceManagement2->mgt32_2==0||$midPerformanceManagement2->mgt32_3==0||$midPerformanceManagement2->mgt32_4==0)
                        Team dynamics<br><br>
                        Integration<br><br>
                        @endif
                        @if($midPerformanceManagement2->mgt33_1==0||$midPerformanceManagement2->mgt33_2==0||$midPerformanceManagement2->mgt33_3==0||$midPerformanceManagement2->mgt33_4==0)
                        Learning and development <br><br>
                        Leadership skills <br><br>
                        @endif
                        @if($midPerformanceManagement2->mgt34==0||$midPerformanceManagement2->mgt35==0)
                        Training Need Analysis <br><br>
                        @endif
                        @if($midPerformanceManagement2->mgt13==0)
                        Technical troubleshooting<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br>Teamwork<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidTeamwork }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midTeamwork2->mgt36==0)
                        Team dynamics <br><br>
                        Personal development<br><br>
                        @endif
                        @if($midTeamwork2->mgt37==0)
                        Communication <br><br>
                        Team work<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><br>Personal Development</td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidPersonalDevelopment }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($midPersonalDevelopment2->mgt38==0||$midPersonalDevelopment2->mgt39_1==0||$midPersonalDevelopment2->mgt39_2==0||$midPersonalDevelopment2->mgt39_3==0)
                        Personal development<br><br>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
                </div>
                </div>
                <div class="row" style="text-align: center">
                    <div class="col" style="margin-left:300px"><span style="font-family: Poppins, sans-serif;">3</span></div>
                    <div class="col" style="margin-right:-50px"><img src="{{ asset('ICTA.png') }}" style="width: 117px;height: 55px"><img src="{{ asset('Light2.png') }}" style="width:126px;"></div>
                </div>
            </div>
        </div>
    </body>
</html>
