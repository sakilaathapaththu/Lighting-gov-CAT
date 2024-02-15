@extends('layouts.govofficialusernavbar')

@section('content')
<div class="container" style="font-family: poppins;">
    <div class="row">
        <div class="container" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="50" style="width:90%;height:40%;margin-top:15%;border: 6px solid #5F2B84;border-radius: 10px;">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h3 id="h2" style="color: #1F2471;font-weight: bold;text-align: center;margin-top:20%">Successfully completed Management Assessment<br></h3>
                    </div>
                    <div class="row" style="text-align:center">
                        <h5 id="h4" style="color: var(--bs-emphasis-color);margin-top:5%">You have successfully completed Management Self Assessment.<br></h5>
                    </div>
                    <div class="row" style="margin-top:10%">
                        <a class="btn btn-primary" type="button" href="{{ route('operationalManagementReport')}}" style="margin-left:20%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);width:60%;border-style: none;"><h4 id="h4">Download</h4></a>
                    </div>
                    <div class="row" style="margin-top:10%;text-allign:center">
                        <a  href="{{ route('operationallayer') }}" style="font-family: poppins;font-size: 20px;color: #5F2B84;margin-left:44%"><h5 id="h4">Back</h5></a>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/Success factors-pana 1.png') }}" style="width:100%;height:80%">
                </div>
            </div>
        </div>
    </div>
    <div class="row" data-aos="fade-down" data-aos-duration="800" style="text-align: center;font-family: poppins;">
        <h2 id="h2" style="color: #1F2471;font-weight: bold;"><br>Results of the Management Self Assessment<br><br></h2>
    </div>
    <div class="row" style="text-align:center">
        <div id="chart_div" style="font-family: Poppins;width:80%;height:70%;margin-left:8%"></div>
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
                colors: ['#037774']
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

            chart.draw(data, options);
            }
            </script>
    </div>
    <div class="row">
    <div class="table-responsive" style="margin-top: 5%;">
        <table class="table">
            <thead style="background: var(--bs-table-border-color);">
                <tr style="background: var(--bs-table-border-color);">
                    <th style="font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><h4 id="h3">Competency Area</h4></th>
                    <th style="font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;"><h4 id="h3">Proficiency</h4></th>
                    <th style="font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;"><h4 id="h3">Recommended areas of improvement</h4></th>
            <tbody>
                <tr>
                    <td style="font-family: poppins;"><h5 id="h4"><br>Communication<br><br></h5></td>
                    <td style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgOpCommunication }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($opCommunication2->mgt1==0||$opCommunication2->mgt2==0||$opCommunication2->mgt4==0)
                        Communication<br><br>
                        @endif
                        @if($opCommunication2->mgt3==0)
                        Digital communication<br><br>
                        @endif
                        @if($opCommunication2->mgt4==0)
                        Personal development<br><br>
                        @endif</h5>
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><h5 id="h4"><br>Workplace Management<br><br></h5></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgOpWorkplaceManagement }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;"><h5 id="h4">
                        @if($opWorkplaceManagement2->mgt5==0)
                        Risk Management<br><br>
                        @endif
                        @if($opWorkplaceManagement2->mgt6==0)
                        Benefits to the citizens of a digital service amongst peerst<br><br>
                        @endif</h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><h5 id="h4"><br>Stakeholder Management</h5></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgOpStakeholderManagement }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
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
                        @endif</h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><h5 id="h4"><br>Teamwork<br><br></h5></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgOpTeamwork }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
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
                        @endif</h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><h5 id="h4"><br>Personal Development</h5></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgOpPersonalDevelopment }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($opPersonalDevelopment2->mgt15==0||$opPersonalDevelopment2->mgt16==0)
                        Personal development<br><br>
                        @endif</h5>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
<!-- <section data-aos="fade-down" style="height: 2750px;text-align: center;">
    <div class="container" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="50" style="margin-top: 150px;width: 1268px;height: 494px;border: 6px solid #5F2B84;border-radius: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xxl-4"><img src="{{ asset('img/Success factors-pana 1.png') }}" width="490" height="481"></div>
                <div class="col-md-6 col-xxl-7">
                    <div class="row">
                        <div class="col-xxl-12" style="text-align: center;margin-top: 20px;"><span style="color: #1F2471;font-family: poppins;font-size: 32px;font-weight: bold;text-align: center;"><br>Successfully completed Management&nbsp; &nbsp;Assessment<br><br></span></div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12" style="margin-top: -50px;"><span style="color: var(--bs-emphasis-color);font-size: 20px;font-family: poppins;"><br>You have successfully completed Management Self&nbsp; Assessment.<br><br></span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 20px;">
                            <a class="btn btn-primary" href="{{ route('operationalManagementReport') }}" type="button" style="width: 203px;height: 55px;font-size: 20px;font-family: Poppins;background: url(&quot;{{ asset('img/Screenshot (561) 6.png') }}&quot;), var(--bs-body-bg);border-style: none;">Download</a></div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col" style="margin-top: 40px;"><a href="{{ route('operationallayer') }}" style="font-family: poppins;font-size: 20px;color: #5F2B84;">Back</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-down" data-aos-duration="800" style="margin-top: 50px;"><span style="color: #1F2471;font-size: 24px;font-family: poppins;font-weight: bold;text-align: center;"><br>Results of the Management Self Assessment<br><br></span>
        <div class="container" style="width: 920px;height: 535px;text-align: center;margin-top: 50px;border-radius: 10px;box-shadow: 0px 0px 7px 4px #5F2B84;border-style: none;border-color: var(--bs-emphasis-color);">
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
                colors: ['#037774']
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

            chart.draw(data, options);
            }
            </script>
        </div>
    </div>
    <div class="table-responsive" style="margin-top: 100px;margin-left: 50px;">
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
</section> -->

@endsection
