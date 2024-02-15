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
                    <div class="col" style="text-align: center;"><span style="font-size: 24px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">Competency Proficiency -Digital<br> Government</span></div>
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
                <div class="table-responsive" style="margin-top: 30px;width:750px;margin-left:10%">
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
                                <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidChangeManagement }}%</td>
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
                                <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidChangeManagement }}%</td>
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
                                <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br>{{ $avgmidCollaboration }}%</td>
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
                                <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;text-align: center;"><br>{{ $avgmidOrientatiion }}%</td>
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
                                <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;text-align: center;"><br>{{ $avgmidQualityManagement }}%</td>
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
                                <td style="background: var(--bs-warning-bg-subtle);font-family: poppins;text-align: center;"><br>{{ $avgmidInitiative }}%</td>
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
    </body>
</html>
