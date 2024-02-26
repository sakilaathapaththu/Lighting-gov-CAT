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
    <title>Competency Proficiency - Digital Government</title>
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
                        Proficiency -Digital<br> Government</span></div>
            </div>
            <div class="row" style="margin-top: 300px;">
                <div class="col" style="text-align: center;"><span
                        style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govOfficial->full_name }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govOfficial->designation }}</span></div>
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
    <div style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;"><span
                        style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of
                        Digital Government&nbsp; Assessment <br><br></span></div>
            </div>

            <div class="row">
                <div class="col" style="text-align: center;">
                    <div id="chart_div" style="width:850px;height:400px;font-family: Poppins;margin-left:50px;">
                        <div class="col" style="text-align: center;">

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

                    </div>

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


    <div style="text-align: center;margin-top: 50px;">

        <button onclick="window.print()">Print</button> <!-- Print Button -->
    </div>
</body>

</html>
