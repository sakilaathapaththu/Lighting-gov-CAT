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
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">Competency Proficiency -Government</span></div>
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
                    <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of Management&nbsp; Assessment <br><br></span></div>
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
                                <td style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgOpCommunication }}%</td>
                                <td style="font-family: poppins;text-align: left;">
                                    @if($opCommunication2->mgt1==0||$opCommunication2->mgt2==0||$opCommunication2->mgt4==0)
                                    Communication<br><br>
                                    @endif
                                    @if($opCommunication2->mgt3==0)
                                    Digital communication<br><br>
                                    @endif
                                    @if($opCommunication2->mgt4==0)
                                    Personal development<br><br>
                                    @endif
                                </td>
                            </tr>
                            <tr style="font-family: poppins;">
                                <td style="font-family: poppins;"><br><br><br>Workplace Management<br><br></td>
                                <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgOpWorkplaceManagement }}%</td>
                                <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                                    @if($opWorkplaceManagement2->mgt5==0)
                                    Risk Management<br><br>
                                    @endif
                                    @if($opWorkplaceManagement2->mgt6==0)
                                    Benefits to the citizens of a digital service amongst peerst<br><br>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: poppins;"><br><br><br>Stakeholder Management</td>
                                <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgOpStakeholderManagement }}%</td>
                                <td style="font-family: poppins;text-align: left;">
                                    @if($opStakeholderManagement2->mgt7==0)
                                    Conflict management<br><br>
                                    @endif
                                    @if($opStakeholderManagement2->mgt8==0)
                                    Stakeholder management<br><br>
                                    @endif
                                    @if($opStakeholderManagement2->mgt9==0)
                                    Conflict Team dynamics<br><br>
                                    Collaborative tools & techniques<br><br>
                                    @endif
                                    @if($opStakeholderManagement2->mgt10==0)
                                    Citizenship orientation<br><br>
                                    Customer service<br><br>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: poppins;"><br><br>Teamwork<br><br></td>
                                <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgOpTeamwork }}%</td>
                                <td style="font-family: poppins;text-align: left;">
                                    @if($opTeamwork2->mgt11==0)
                                    Team dynamics<br><br>
                                    @endif
                                    @if($opTeamwork2->mgt11==0||$opTeamwork2->mgt13==0||$opTeamwork2->mgt14==0)
                                    Personal development<br><br>
                                    @endif
                                    @if($opTeamwork2->mgt12==0)
                                    Communication<br><br>
                                    Team work<br><br>
                                    @endif
                                    @if($opTeamwork2->mgt13==0)
                                    Technical troubleshooting<br><br>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: poppins;"><br><br>Personal Development</td>
                                <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgOpPersonalDevelopment }}%</td>
                                <td style="font-family: poppins;text-align: left;">
                                    @if($opPersonalDevelopment2->mgt15==0||$opPersonalDevelopment2->mgt16==0)
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
