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
    <link rel="stylesheet" href="{{ asset('cssfile/bootstrap2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
</head>

<body>




    <div id="pdf01"
        style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <div class="row" style="margin-top: 100px;">
                <div class="col" style="text-align: center;"><img src="{{ asset('img/emblem.png') }}"
                        style="width:102px;height:133px"></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col" style="text-align: center;"><span
                        style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">Digital
                        Government Competency<br> Framework</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col" style="text-align: center;"><span
                        style="font-size: 24px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">Competency
                        Proficiency -Overall</span></div>
            </div>
            <div class="row" style="margin-top: 300px;">
                <div class="col" style="text-align: center;"><span
                        style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govOfficial->full_name }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col" style="text-align: center;"><span
                        style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govOfficial->designation }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col" style="text-align: center;"><span
                        style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govOfficial->govorganizationname->gov_org_name }}</span>
                </div>
            </div>
            <!-- Additional rows and content -->
            <div class="row" style="text-align: center;margin-top: 3%">

                <div class="col"><img src="{{ asset('ICTA.png') }}" style="width: 117px;height: 55px"><img
                        src="{{ asset('Light2.png') }}" style="width:126px;">
                </div>
            </div>
            <div class="row" style="text-align: center;margin-top:55%">
                <div class="col" style="margin-left:300px"><span style="font-family: Poppins, sans-serif;"></span>
                </div>
                <div class="col" style="margin-right:-50px;width: 117px;height: 55px">

                </div>
            </div>
        </div>

    </div>
    <div class="page-break"></div>

    {{-- Overall Competancy Proficiency --}}

    <div style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;"><span
                        style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Competancy
                        Proficiency<br><br></span></div>
            </div>

            <div class="row">
                <div class="col" style="text-align: center;">
                    {{-- <div id="chart_div" style="width:900px;height:500px;font-family: Poppins;"> --}}
                    <div class="col" style="text-align: center;">

                        <canvas id="chartId" aria-label="chart" data-aos="fade-down" data-aos-duration="1000"
                            style="margin-top:5%;margin-left: 5%; font-size: 20px;" height="664"
                            width="830"></canvas>
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

                    {{-- </div> --}}

                </div>
            </div>
            {{-- <div class="table-responsive" style="margin-top: 30px;font-family: Poppins, sans-serif;">
                <table class="table">
                    <thead style="background: var(--bs-table-border-color);">
                        <tr style="background: var(--bs-table-border-color);">
                            <th style="background: var(--bs-table-border-color);width: 200px;font-size: 12px;">
                                Competency Area</th>
                            <th style="background: var(--bs-table-border-color);font-size: 12px;">Definitions
                            </th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 12px;">
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;">ICT in workplace</td>
                            <td style="font-size: 12px;">Productively perform tasks in the workplace by using ICT
                                skills and knowledge in a digital government setting</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Information Management<br><br></td>
                            <td style="font-size: 12px;"><br>Ensure data and information are secure and adhere to
                                data protection policies and laws in Digital Government service delivery</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Digital Citizenship</td>
                            <td style="font-size: 12px;"><br>Use of digital technology and media in safe
                                responsible and ethical ways</td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}

        </div>
    </div>


    <div class="page-break"></div>

    {{-- Overall Results of ICT Assessment  --}}

    <div style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;"><span
                        style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of
                        ICT&nbsp; Assessment <br><br></span></div>
            </div>

            <div class="row">
                <div class="col" style="text-align: center;">
                    {{-- <div id="chart_div" style="width:900px;height:500px;font-family: Poppins;"> --}}
                    <div class="col" style="text-align: center;">
                        <div id="chart_div" style="width:850px;height:400px;font-family: Poppins;margin-left:50px;">
                        </div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', {
                                packages: ['corechart', 'bar']
                            });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
                                var data = google.visualization.arrayToDataTable({{ Js::from($result) }});

                                var options = {

                                    chartArea: {
                                        width: '50%'
                                    },
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

                    {{-- </div> --}}

                </div>
            </div>





            <div class="table-responsive" style="margin-top: 30px;font-family: Poppins, sans-serif;">
                <table class="table">
                    <thead style="background: var(--bs-table-border-color);">
                        <tr style="background: var(--bs-table-border-color);">
                            <th style="background: var(--bs-table-border-color);width: 200px;font-size: 12px;">
                                Competency Area</th>
                            <th style="background: var(--bs-table-border-color);font-size: 12px;">Definitions</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 12px;">
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;">ICT in workplace</td>
                            <td style="font-size: 12px;">Productively perform tasks in the workplace by using ICT
                                skills and knowledge in a digital government setting</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Information Management<br><br></td>
                            <td style="font-size: 12px;"><br>Ensure data and information are secure and adhere to data
                                protection policies and laws in Digital Government service delivery</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Digital Citizenship</td>
                            <td style="font-size: 12px;"><br>Use of digital technology and media in safe responsible
                                and ethical ways</td>
                        </tr>
                    </tbody>
                </table>
            </div>





        </div>
    </div>

    <div class="page-break"></div>

    {{-- Recommendations --}}

    <div style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;"><span
                        style="font-family: poppins;font-weight: bold;text-align: center;color: #1F2471;"><br>Recommendations</span>
                </div>
            </div>

            <div class="table-responsive" style="margin-top: 30px;width:100%;">
                <table class="table">
                    <thead style="background: var(--bs-table-border-color);">
                        <tr style="background: var(--bs-table-border-color);height: 60px;">
                            <th
                                style="width: 400px;font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-striped-color);">
                                <br>Competency Area<br><br>
                            </th>
                            <th
                                style="width: 300px;font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);">
                                <br>Proficiency<br><br>
                            </th>
                            <th
                                style="font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);">
                                <br>Recommended areas of improvement<br><br>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-family: poppins;"><br>ICT in Workplace<br><br></td>
                            <td
                                style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);">
                                <br>{{ $avgTopIctInWorkplace }}%
                            </td>
                            <td style="font-family: poppins;text-align: left;">
                                @if ($topIctInWorkplace2->ict1 == 0)
                                    Digital transformation on public services<br><br>
                                @endif
                                @if ($topIctInWorkplace2->ict2 == 0)
                                    Emerging ICT technologies<br><br>
                                @endif
                                @if ($topIctInWorkplace2->ict3 == 0)
                                    Developing ICT plans<br><br>
                                    Digital government strategy <br><br>
                                @endif
                                @if ($topIctInWorkplace2->ict4 == 0)
                                    Digital Government Transformation<br><br>
                                @endif
                            </td>
                        </tr>
                        <tr style="font-family: poppins;">
                            <td style="font-family: poppins;"><br>Information Management<br><br></td>
                            <td
                                style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);">
                                <br>{{ $avgTopInformationManagement }}%
                            </td>
                            <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                                @if ($topInformationManagement2->ict5 == 0)
                                    Information security<br><br>
                                    Data protection and privacy<br><br>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: poppins;"><br>Digital Citizenship<br><br></td>
                            <td
                                style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);">
                                <br>{{ $avgTopDigitalCitizenship }}%
                            </td>
                            <td style="font-family: poppins;text-align: left;">
                                @if (
                                    $topDigitalCitizenship2->ict6_1 == 0 ||
                                        $topDigitalCitizenship2->ict6_2 == 0 ||
                                        $topDigitalCitizenship2->ict6_3 == 0)
                                    Digital media and technologies<br><br>
                                @endif
                                @if (
                                    $topDigitalCitizenship2->ict7_1 == 0 ||
                                        $topDigitalCitizenship2->ict7_2 == 0 ||
                                        $topDigitalCitizenship2->ict7_3 == 0)
                                    Impact of technology use use<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict8 == 0)
                                    Cyber risks<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict9 == 0)
                                    Cyber-threats<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict10 == 0)
                                    Digital Empathy<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict11 == 0)
                                    Digital footprints<br><br>
                                @endif
                                @if (
                                    $topDigitalCitizenship2->ict12_1 == 0 ||
                                        $topDigitalCitizenship2->ict12_2 == 0 ||
                                        $topDigitalCitizenship2->ict12_3 == 0)
                                    Digital media<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict13 == 0)
                                    Privacy Management<br><br>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="page-break"></div>

    {{-- Overall Results of Digital Government Assessment --}}


    <div style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;"><span
                        style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of
                        Digital Government&nbsp; Assessment <br><br></span></div>
            </div>

            <div class="row">
                <div class="col" style="text-align: center;">
                    {{-- <div id="chart_div" style="width:900px;height:500px;font-family: Poppins;"> --}}
                    <div class="col" style="text-align: center;">
                        <div id="chart_div2" style="width:850px;height:400px;font-family: Poppins;margin-left:50px;">
                        </div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', {
                                packages: ['corechart', 'bar']
                            });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
                                var data = google.visualization.arrayToDataTable({{ Js::from($result2) }});

                                var options = {

                                    chartArea: {
                                        width: '50%'
                                    },
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

                    {{-- </div> --}}

                </div>
            </div>
            <div class="table-responsive" style="margin-top: 30px;font-family: Poppins, sans-serif;">
                <table class="table">
                    <thead style="background: var(--bs-table-border-color);">
                        <tr style="background: var(--bs-table-border-color);">
                            <th style="background: var(--bs-table-border-color);width: 200px;font-size: 12px;">
                                Competency Area</th>
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
                            <td style="font-size: 12px;"><br>Collaborating and partnering in enhancing Digital
                                Government capacity</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Results Orientation</td>
                            <td style="font-size: 12px;"><br>Results orientation to achieve desired outcomes and
                                sustain stakeholder satisfaction in digital government</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Quality Management</td>
                            <td style="font-size: 12px;"><br>Delivering and managing quality in Digital Government
                                Services</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Execute Digital Government Initiatives</td>
                            <td style="font-size: 12px;"><br>Carry out activities in digital government initiatives
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="page-break"></div>

    {{-- Overall Results of Management Assessment --}}

    <div style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;"><span
                        style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of
                        Management&nbsp; Assessment <br><br></span></div>
            </div>

            <div class="row">
                <div class="col" style="text-align: center;">
                    {{-- <div id="chart_div" style="width:900px;height:500px;font-family: Poppins;"> --}}
                    <div class="col" style="text-align: center;">
                        <div id="chart_div3" style="width:850px;height:400px;font-family: Poppins;margin-left:50px;">
                        </div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', {
                                packages: ['corechart', 'bar']
                            });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
                                var data = google.visualization.arrayToDataTable({{ Js::from($result3) }});

                                var options = {

                                    chartArea: {
                                        width: '50%'
                                    },
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

                    {{-- </div> --}}

                </div>
            </div>
            <div class="table-responsive" style="margin-top: 30px;font-family: Poppins, sans-serif;">
                <table class="table">
                    <thead style="background: var(--bs-table-border-color);">
                        <tr style="background: var(--bs-table-border-color);">
                            <th style="background: var(--bs-table-border-color);width: 200px;font-size: 12px;">
                                Competency Area</th>
                            <th style="background: var(--bs-table-border-color);font-size: 12px;">Definitions</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 12px;">
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;">Communication</td>
                            <td style="font-size: 12px;">Follow effective communication best practices to achieve
                                personal and departmental goals and objectives and champion transparent
                                communication in digital government</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Workplace Management<br><br></td>
                            <td style="font-size: 12px;"><br>Actively engage in a holistic and open environment that
                                promotes collaboration and productivity towards achieving digital government
                                transformation</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Stakeholder Management</td>
                            <td style="font-size: 12px;"><br>Actively promote digital service delivery through a
                                citizen-oriented approach and a collaborative work environment while effectively
                                managing stakeholders for digital government initiatives</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Teamwork<br><br></td>
                            <td style="font-size: 12px;"><br>Ability to work in a team and bring synergies through
                                effective team working</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Personal Development<br><br></td>
                            <td style="font-size: 12px;"><br>Continuously engage in activities to develop oneself,
                                specialized knowledge, and expertise</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="page-break"></div>

    {{-- Recommendations --}}

    <div style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;"><span
                        style="font-family: poppins;font-weight: bold;text-align: center;color: #1F2471;"><br>Recommendations</span>
                </div>
            </div>

            <div class="table-responsive" style="margin-top: 30px;width:100%;">
                <table class="table">
                    <thead style="background: var(--bs-table-border-color);">
                        <tr style="background: var(--bs-table-border-color);height: 60px;">
                            <th
                                style="width: 400px;font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-striped-color);">
                                <br>Competency Area<br><br>
                            </th>
                            <th
                                style="width: 300px;font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);">
                                <br>Proficiency<br><br>
                            </th>
                            <th
                                style="font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);">
                                <br>Recommended areas of improvement<br><br>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-family: poppins;"><br>ICT in Workplace<br><br></td>
                            <td
                                style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);">
                                <br>{{ $avgTopIctInWorkplace }}%
                            </td>
                            <td style="font-family: poppins;text-align: left;">
                                @if ($topIctInWorkplace2->ict1 == 0)
                                    Digital transformation on public services<br><br>
                                @endif
                                @if ($topIctInWorkplace2->ict2 == 0)
                                    Emerging ICT technologies<br><br>
                                @endif
                                @if ($topIctInWorkplace2->ict3 == 0)
                                    Developing ICT plans<br><br>
                                    Digital government strategy <br><br>
                                @endif
                                @if ($topIctInWorkplace2->ict4 == 0)
                                    Digital Government Transformation<br><br>
                                @endif
                            </td>
                        </tr>
                        <tr style="font-family: poppins;">
                            <td style="font-family: poppins;"><br>Information Management<br><br></td>
                            <td
                                style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);">
                                <br>{{ $avgTopInformationManagement }}%
                            </td>
                            <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                                @if ($topInformationManagement2->ict5 == 0)
                                    Information security<br><br>
                                    Data protection and privacy<br><br>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: poppins;"><br>Digital Citizenship<br><br></td>
                            <td
                                style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);">
                                <br>{{ $avgTopDigitalCitizenship }}%
                            </td>
                            <td style="font-family: poppins;text-align: left;">
                                @if (
                                    $topDigitalCitizenship2->ict6_1 == 0 ||
                                        $topDigitalCitizenship2->ict6_2 == 0 ||
                                        $topDigitalCitizenship2->ict6_3 == 0)
                                    Digital media and technologies<br><br>
                                @endif
                                @if (
                                    $topDigitalCitizenship2->ict7_1 == 0 ||
                                        $topDigitalCitizenship2->ict7_2 == 0 ||
                                        $topDigitalCitizenship2->ict7_3 == 0)
                                    Impact of technology use use<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict8 == 0)
                                    Cyber risks<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict9 == 0)
                                    Cyber-threats<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict10 == 0)
                                    Digital Empathy<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict11 == 0)
                                    Digital footprints<br><br>
                                @endif
                                @if (
                                    $topDigitalCitizenship2->ict12_1 == 0 ||
                                        $topDigitalCitizenship2->ict12_2 == 0 ||
                                        $topDigitalCitizenship2->ict12_3 == 0)
                                    Digital media<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict13 == 0)
                                    Privacy Management<br><br>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>



    <div style="text-align: center;margin-top: 50px;">

        <button onclick="window.print()">Print</button> <!-- Print Button -->
    </div>




</body>

</html>
