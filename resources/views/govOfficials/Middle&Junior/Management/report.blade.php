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
      
        <div id="pdf01"
        style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <!-- Header section -->
            <!-- Adjust margin and padding as needed -->
            <div class="row" style="margin-top: 100px;">
                <div class="col" style="text-align: center;"><img src="{{ asset('img/emblem.png') }}"
                        style="width:102px;height:133px"></div>
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
            <!-- Additional rows and content -->
            <div class="row" style="text-align: center;margin-top: 3%">

                <div class="col" ><img src="{{ asset('ICTA.png') }}"
                        style="width: 117px;height: 55px"><img src="{{ asset('Light2.png') }}" style="width:126px;">
                </div>
            </div>
            <div class="row" style="text-align: center;margin-top:55%">
                <div class="col" style="margin-left:300px"><span
                        style="font-family: Poppins, sans-serif;"></span></div>
                <div class="col" style="margin-right:-50px;width: 117px;height: 55px">
                    
                </div>
            </div>
        </div>
       
    </div>
    <div class="page-break"></div>
    <div style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of Management&nbsp; Assessment <br><br></span></div>

            </div>

            <div class="row">
                <div class="col" style="text-align: center;">
                    {{-- <div id="chart_div" style="width:900px;height:500px;font-family: Poppins;"> --}}
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

                    {{-- </div> --}}

                </div>
            </div>
            <div class="table-responsive" style="margin-top: 30px;font-family: Poppins, sans-serif;">
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
    </div>

    <div class="page-break"></div>
    <div style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;color: #1F2471;"><br>Recommendations</span></div>

            </div>

            <div class="table-responsive" style="margin-top: 30px;width:100%;">
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
                            <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidWorkplaceManagement }}%</td>
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
                            <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidDecisionMaking }}%</td>
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
                            <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidCapacityBuilding }}%</td>
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
                            <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidStakeholderManagement }}%</td>
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
                            <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidPerformanceManagement }}%</td>
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
                            <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidTeamwork }}%</td>
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
                            <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidPersonalDevelopment }}%</td>
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
    </div>
    <div style="text-align: center;margin-top: 50px;">
        
        <button  onclick="window.print()">Print</button> <!-- Print Button -->
    </div>


    </body>
</html>
