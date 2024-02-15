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
                    <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of Digital Government&nbsp; Assessment <br><br></span></div>
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
                                <td style="font-size: 12px;">Project and Program Management in Digital Government Initiatives</td>
                                <td style="font-size: 12px;">Undertaking Project management initiatives in Digital Government capacity </td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Change Management<br><br></td>
                                <td style="font-size: 12px;"><br>Managing change in Digital Government setting</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Collaboration and Partnership</td>
                                <td style="font-size: 12px;"><br>Collaborating and Partnering in enhancing Digital Government capacity</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Results orientation</td>
                                <td style="font-size: 12px;"><br>Results orientation to achieve desired outcomes and sustain stakeholder satisfaction in digital government</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Managing quality in digital government services</td>
                                <td style="font-size: 12px;"><br>Delivering and managing quality in Digital Government Services</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Drive the adoption of the digital  transformation strategy of the organization</td>
                                <td style="font-size: 12px;"><br>Drive the adoption of the digital  transformation strategy of the organization and ensure the organization is digitally transformed through management of resources and infrastructure, digital governance and business continuity</td>
                            </tr>
                            <tr style="font-size: 12px;">
                                <td style="font-size: 12px;"><br>Carryout Digital Government initiatives in organizations</td>
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
                    <td style="font-family: poppins;"><br><h5 id="h4">Project and Program Management in Digital Government Initiatives<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br><h5 id="h4">{{ $avgCdioProjectAndProgrammeManagement }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioProjectAndProgrammeManagement2->dg1==0)
                        Project Management,Program Management,Digitalization<br><br>
                        @endif
                        @if($cdioProjectAndProgrammeManagement2->dg2==0)
                        Organizational change management,Thorough understanding of best practices to promote benefits to the citizens of a digital service amongst employees,Organizational change management Digital government,Change management,<br><br>
                        @endif
                        @if($cdioProjectAndProgrammeManagement2->dg3==0)
                        Project Management, Program Management,Digitalization<br><br>
                        @endif
                        @if($cdioProjectAndProgrammeManagement2->dg4==0)
                        Organizational change management,Thorough understanding of best practices to promote benefits to the citizens of a digital service amongst employees, Organizational change management. Digital Government,Change Management<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br><h5 id="h4">Change Management<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgCdioChangeManagement }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;"><h5 id="h4">
                        @if($cdioChangeManagement2->dg5==0)
                        Capacity building,Succession planning,
                        Sustainability of digital government initiatives,Promote cooperation, teamwork and collaboration across employees job grades to bring synergies for Digital Government activities,Provide insightful inputs for administration's division to develop comprehensive HR plans that supports the organizational digital transformational strategy,Engages in assessing performance levels and recommending required interventions to build capacity ensuring internal teams are capable of implementing digital government initiatives,Actively promote continuous learning through knowledge management best practices to enhance HR performance,Create an enabling environment, actively develop competencies of teams to equip them to deliver expected results of digital government initiatives,<br><br>
                        @endif
                        @if($cdioChangeManagement2->dg6==0)
                        Create an enabling environment, actively develop competencies of teams to equip them to deliver expected results of digital government initiatives,<br><br>
                        @endif
                        @if($cdioChangeManagement2->dg7==0 || $cdioChangeManagement2->dg8==0)
                        Organizational change management,Thorough understanding of best practices to promote benefits to the citizens of a digital service amongst employees,Organizational change management<br>
                        Digital government,Change management<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Collaboration and Partnership<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgCdioCollaboration}}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioCollaboration2->dg9==0)
                        Collaboration,Service integrations,<br><br>
                        @endif
                        @if($cdioCollaboration2->dg10==0)
                        Secure data sharing<br><br>
                        @endif
                        @if ($cdioCollaboration2->dg11==0)
                        Service integrations<br><br>
                        @endif
                        @if ($cdioCollaboration2->dg12==0)
                        Business environmental analysis,Stakeholder expectations and satisfaction<br>
                        Quality management,Quality management<br>
                        Digital means for service delivery,Service delivery<br>
                        Quality management<br><br>
                        @endif
                        @if($cdioCollaboration2->dg13==0)
                        Evaluate outcomes<br><br>
                        @endif
                        @if($cdioCollaboration2->dg14==0)
                        Continuous innovation<br>
                        Sustain stakeholder satisfaction<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Managing quality in digital government services<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgCdioManagingQuality }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioManagingQuality2->dg15==0)
                        Business environmental analysis<br><br>
                        @endif
                        @if($cdioManagingQuality2->dg16==0)
                        Stakeholder expectations and satisfaction<br>
                        Quality management<br><br>
                        @endif
                        @if ($cdioManagingQuality2->dg17==0)
                        Digital government services to citizens<br><br>
                        @endif
                        @if($cdioManagingQuality2->dg18==0)
                        Empower employees<br>
                        Delegate responsibility<br>
                        Enhance accountability<br>
                        Digital government initiatives<br><br>
                        @endif
                        @if ($cdioManagingQuality2->dg19==0)
                        Centric service delivery<br>
                        Digital government initiatives<br>
                        Customer experience<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Drive the adoption of the digital  transformation strategy of the organization<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgCdioDriveTheAdoption }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioDriveTheAdoption2->dg20==0)
                        Centric service delivery<br>
                        Digital government initiatives<br>
                        Customer experience<br><br>
                        @endif
                        @if($cdioDriveTheAdoption2->dg21==0)
                        Digital transformation strategies for governments<br><br>
                        @endif
                        @if ($cdioDriveTheAdoption2->dg22==0)
                        Risk management<br>
                        Disaster recovery<br>
                        Business continuity planning<br><br>
                        @endif
                        @if($cdioDriveTheAdoption2->dg23==0)
                        Digital Maturity Model of GoSL<br>
                        Digital government<br><br>
                        @endif
                        @if ($cdioDriveTheAdoption2->dg24==0)
                        Digital governance<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Carryout Digital Government initiatives in organizations<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgCdioDigitalInitiative }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioDigitalInitiative2->dg26==0)
                        Procurement Management<br>
                        Inventory management<br>
                        Procedure for government procurementSupply chain management<br>
                        Procedure for government procurementVendor management<br>
                        Procurement ManagementService delivery channel<br><br>
                        @endif
                        @if($cdioDigitalInitiative2->dg27==0)
                        Supply chain management<br>
                        Procedure for government procurement<br><br>
                        @endif
                        @if ($cdioDigitalInitiative2->dg28==0)
                        Supply chain management<br>
                        Procedure for government procurementVendor management<br>
                        Procurement Management<br><br>
                        @endif
                        @if($cdioDigitalInitiative2->dg29==0)
                        Service delivery channel<br><br>
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
