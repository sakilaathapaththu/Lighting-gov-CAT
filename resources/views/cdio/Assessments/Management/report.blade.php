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
        <title>Competency Proficiency - ICT</title>
        <link rel="stylesheet" href="{{asset('cssfile/bootstrap2.min.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    </head>

    <body>
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px">
            <div class="container" style="width: 535px;height: 782px;text-align:center">
                <div class="row" style="margin-top: 100px;">
                    <div class="col" style="text-align: center;"><img src="{{ asset('img/emblem.png') }}" style="width:102px;height:133px"></div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">Digital Government Competency<br> Framework</span></div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">Competency Proficiency -ICT</span></div>
                </div>
                <div class="row" style="margin-top: 300px;">
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govofficial->full_name }}</span></div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govofficial->designation }}</span></div>
                </div>
                <div class="row" >
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govofficial->govorganizationname->gov_org_name }}</span></div>
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
                                <td style="font-size: 12px;">Communication in Digital Government</td>
                                <td style="font-size: 12px;">Establishing effective communication best practices to achieve organizational goals and objectives and champion transparent communication in digital government</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Managing effective workplace in a Digital Government setting<br><br></td>
                                <td style="font-size: 12px;"><br>Create an enabling environment that promotes collaboration, productivity and build trust among teams</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Effective decision making for digital government interventions</td>
                                <td style="font-size: 12px;"><br>Create an enabling environment for effective decision making for digital government interventions</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Building capacities for Digital Government</td>
                                <td style="font-size: 12px;"><br>Enhance understanding, skills and capability of employees needed to deliver successful digital government services through a combination of training and development</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Effectively managing stakeholders for digital government initiatives</td>
                                <td style="font-size: 12px;"><br>Actively promote digital service delivery through a citizen oriented approach while effectively managing stakeholders for digital government initiatives</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Managing human resources to enhance performance in Digital Government</td>
                                <td style="font-size: 12px;"><br>Human Resource performance management best practices in digital government setting</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Effective teamwork</td>
                                <td style="font-size: 12px;"><br>Ability to work in a team and bring synergies through effective team working</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Specialized knowledge, expertise and self development</td>
                                <td style="font-size: 12px;"><br>Continuously engage in activities to develop oneself, specialized knowledge and expertise</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Institutional digital transformation</td>
                                <td style="font-size: 12px;"><br>Development and adoption of digital transformation strategies to achieve with intended results through operational leadership</td>
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
                    <tr style="background: var(--bs-table-border-color);">
                        <th style="font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><h4 id="h3">Competency Area</h4></th>
                        <th style="font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);"><h4 id="h3">Proficiency</h4></th>
                        <th style="font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);"><h4 id="h3">Recommended areas of improvement</h4></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Communication in Digital Government<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br><h5 id="h4">{{ $avgCommunication }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioCommunication->mgt1==0)
                        stakeholder communication process and action planencourage all relevant stakeholders to understand the purpose and strategic direction towards a digital government through clear and unambiguous communicationDigital communicationFeedbackStrategic direction
                        Digital government transformation<br>
                        CommunicationShare information<br>
                        Guide team membersCommunication<br><br>
                        @endif
                        @if($cdioCommunication->mgt2==0)
                        Capacity building,Succession planning,<br>
                        Sustainability of digital government initiatives,Promote cooperation, teamwork and collaboration across employees job grades to bring synergies for Digital Government activities,Provide insightful inputs for administration's division to develop comprehensive HR plans that supports the organizational digital transformational strategy,Engages in assessing performance levels and recommending required interventions to build capacity ensuring internal teams are capable of implementing digital government initiatives,Actively promote continuous learning through knowledge management best practices to enhance HR performance,Create an enabling environment, actively develop competencies of teams to equip them to deliver expected results of digital government initiatives,<br><br>
                        @endif
                        @if($cdioCommunication->mgt3==0)
                        Digital communication<br><br>
                        @endif
                        @if($cdioCommunication->mgt4==0)
                        Feedback<br><br>
                        @endif
                        @if($cdioCommunication->mgt5==0)
                        encourage all relevant stakeholders to understand the purpose and strategic direction towards a digital government through clear and unambiguous communication<br><br>
                        @endif
                        @if($cdioCommunication->mgt6==0)
                        Share information<br>
                        Guide team members<br><br>
                        @endif
                        @if($cdioCommunication->mgt7==0)
                        Conflict Management,Digital government services to citizens,Stakeholder management,Empower employees<br>
                        Delegate responsibility<br>
                        Enhance accountability<br>
                        Digital government initiatives,Centric service delivery<br>
                        Digital government initiatives<br>
                        Customer experience<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br><h5 id="h4">Managing effective workplace in a Digital Government setting<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgManagingEffectiveWorkplace }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;"><h5 id="h4">
                        @if($cdioManagingEffectiveWorkplace->mgt8==0)
                        General management skills<br>
                        Critical thinking<br>
                        Critical analysis<br>
                        Problem solving<br><br>
                        @endif
                        @if($cdioManagingEffectiveWorkplace->mgt9==0)
                        encourage all relevant stakeholders to understand the purpose and strategic direction towards a digital government through clear and unambiguous communication<br><br>
                        @endif
                        @if($cdioManagingEffectiveWorkplace->mgt10==0)
                        Collaboration<br>
                        Teamwork<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Effective decision making for digital government interventions<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgDecisionMaking}}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioDecisionMaking->mgt11==0)
                        Decision making<br><br>
                        @endif
                        @if($cdioDecisionMaking->mgt12==0)
                        Identifying risks when delivering digital government services<br><br>
                        @endif
                        @if ($cdioDecisionMaking->mgt13==0)
                        Accountability for decision making<br><br>
                        @endif
                        @if ($cdioDecisionMaking->mgt14==0)
                        Business intelligence (BI)<br>
                        Data analytics<br>
                        Effective decision making<br><br>
                        @endif
                        @if($cdioDecisionMaking->mgt15==0)
                        Actively promote 8 principles of good governance<br><br>
                        @endif
                        @if($cdioDecisionMaking->mgt16==0)
                        Decision making<br>
                        Communication<br><br>
                        @endif
                        @if($cdioDecisionMaking->mgt17==0)
                        Feedback<br>
                        Decision making<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Building capacities for Digital Government<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgBuildingCapacity}}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioBuildingCapacity->mgt18==0)
                        Human talent for a digital government<br><br>
                        @endif
                        @if($cdioBuildingCapacity->mgt19==0)
                        Innovation<br>
                        Knowledge driven organization based on digital technologies<br><br>
                        @endif
                        @if ($cdioBuildingCapacity->mgt20==0)
                        Continuous learning culture<br><br>
                        @endif
                        @if ($cdioBuildingCapacity->mgt21==0)
                        Building competencies<br>
                        Digital Government Competency Framework<br><br>
                        @endif
                        @if($cdioBuildingCapacity->mgt22==0)
                        ICTA capacity building efforts
                        Digital Government Competency Framework<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Effectively managing stakeholders for digital government initiatives<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgStakeholder}}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioStakeholder->mgt23==0)
                        Conflict Management,<br><br>
                        @endif
                        @if($cdioStakeholder->mgt24==0)
                        Digital government services to citizens,<br><br>
                        @endif
                        @if ($cdioStakeholder->mgt25==0)
                        Stakeholder management,<br><br>
                        @endif
                        @if ($cdioStakeholder->mgt26==0)
                        Empower employees<br>
                        Delegate responsibility<br>
                        Enhance accountability<br>
                        Digital government initiatives<br><br>
                        @endif
                        @if($cdioStakeholder->mgt27==0)
                        Centric service delivery<br>
                        Digital government initiatives<br>
                        Customer experience<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Managing human resources to enhance performance in Digital Government<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgHumanResource }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioHumanResource->mgt28==0)
                        Capacity building,<br><br>
                        @endif
                        @if($cdioHumanResource->mgt29==0)
                        Succession planning,<br>
                        Sustainability of digital government initiatives<br><br>
                        @endif
                        @if ($cdioHumanResource->mgt30==0)
                        Promote cooperation, teamwork and collaboration across employees job grades to bring synergies for Digital Government activities,<br><br>
                        @endif
                        @if ($cdioHumanResource->mgt31==0)
                        Provide insightful inputs for administration's division to develop comprehensive HR plans that supports the organizational digital transformational strategy,<br><br>
                        @endif
                        @if($cdioHumanResource->mgt32==0)
                        Engages in assessing performance levels and recommending required interventions to build capacity ensuring internal teams are capable of implementing digital government initiatives,<br><br>
                        @endif
                        @if($cdioHumanResource->mgt33==0)
                        Actively promote continuous learning through knowledge management best practices to enhance HR performance,<br><br>
                        @endif
                        @if($cdioHumanResource->mgt34==0)
                        Create an enabling environment, actively develop competencies of teams to equip them to deliver expected results of digital government initiatives,<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Effective teamwork<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgTeamwork }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioTeamwork->mgt35==0)
                        Work collaboratively with multiple teams with mutual understanding and respect,,<br><br>
                        @endif
                        @if($cdioTeamwork->mgt36==0)
                        Succession planning,<br>
                        Widely share information and guide team members to enhance their efficiency,<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Specialized knowledge, expertise and self development<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgSelfDevelopment }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioSelfDevelopment->mgt37==0)
                        Self learning<br>
                        Digital government activities<br><br>
                        @endif
                        @if($cdioSelfDevelopment->mgt38==0)
                        Personal interest to develop oneself<br>
                        Government policy of enhancing services rendered to citizens<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Institutional digital transformation<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgDigitalTransformation }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioDigitalTransformation->mgt39==0)
                        National digital government vision,<br><br>
                        @endif
                        @if($cdioDigitalTransformation->mgt40==0)
                        Digital transformation strategy<br>
                        Organizational corporate vision<br><br>
                        @endif
                        @if($cdioDigitalTransformation->mgt41==0)
                        Stakeholders Management<br>
                        Digital Government<br><br>
                        @endif
                        @if($cdioDigitalTransformation->mgt42==0)
                        Results orientation<br>
                        Desired outcomes in digital government<br><br>
                        @endif
                        @if($cdioDigitalTransformation->mgt43==0)
                        Organizational strategic plans
                        Organizational digital enhancements<br><br>
                        @endif
                        @if($cdioDigitalTransformation->mgt44==0)
                        General management skills<br>
                        Critical thinking<br>
                        Critical analysis<br>
                        Problem solving,<br><br>
                        @endif
                        </h5>
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
