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
    <title>Competency Proficiency - Management</title>
    <link rel="stylesheet" href="{{ asset('cssfile/bootstrap2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
</head>
<body>
    <div style="border-style: solid; border-color: #000000; width: 700px; height: 1450px" class="container">
        <div class="row" style="margin-top: 100px;">
            <div class="col" style="text-align: center;"><img src="{{ asset('img/emblem.png') }}" style="width: 102px; height: 133px"></div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col" style="text-align: center;"><span style="font-size: 24px; color: #000000; font-family: Poppins, sans-serif; font-weight: bold;">Digital Government Competency<br> Framework</span></div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col" style="text-align: center;"><span style="font-size: 24px; color: #1c2c84; font-family: Poppins, sans-serif; font-weight: bold;">Competency Proficiency - Government</span></div>
        </div>
        <div class="row" style="margin-top: 300px;">
            <div class="col" style="text-align: center;"><span style="font-size: 24px; color: #000000; font-family: Poppins, sans-serif; font-weight: bold;">{{ $govOfficial->full_name }}</span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-size: 24px; color: #000000; font-family: Poppins, sans-serif; font-weight: bold;">{{ $govOfficial->designation }}</span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-size: 24px; color: #000000; font-family: Poppins, sans-serif; font-weight: bold;">{{ $govOfficial->govorganizationname->gov_org_name }}</span></div>
        </div>
        <div class="row" style="text-align: center; margin-top: 250px;">
            <div class="col"></div>
        </div>
        <div class="row" style="text-align: center; margin-top: 170px;">
            <div class="col">
                <div class="row">
                    <span style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">Initiation under</span>
                </div>
                <div class="row">
                    <img src="{{ asset('ICTA.png') }}" style="margin-left:165px;margin-top:10px;width: 160px;height: 64px">
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <span style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">Prepared by</span>
                </div>
                <div class="row">
                    <img src="{{ asset('Light2.png') }}" style="margin-left:183px;margin-top:10px;width:126px;">
                </div>
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
                    <div id="chart_div" style="width:850px;height:400px;font-family: Poppins;margin-left:50px;"></div>
                <script>
                    google.charts.load('current', {packages: ['corechart', 'bar']});
                    google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {
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

            <div class="row" style="text-align: center; margin-top: 40%">
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
                <!-- Add any additional content for recommendations -->
            </div>
            <div class="row" style="text-align: center">
                <div class="col" style="margin-left:300px"><span style="font-family: Poppins, sans-serif;">3</span></div>
                <div class="col" style="margin-right:-50px"><img src="{{ asset('ICTA.png') }}" style="width: 117px;height: 55px"><img src="{{ asset('Light2.png') }}" style="width:126px;"></div>
            </div>
        </div>
    </div>
</body>
</html>
