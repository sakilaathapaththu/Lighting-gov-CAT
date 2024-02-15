@extends('layouts.govofficialusernavbar')

@section('content')
<section data-aos="fade-down" style="height: 3750px;text-align: center;">
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
                            <a class="btn btn-primary" href="{{ route('topManagementReport') }}" type="button" style="width: 203px;height: 55px;font-size: 20px;font-family: Poppins;background: url(&quot;{{ asset('img/Screenshot (561) 6.png') }}&quot;), var(--bs-body-bg);border-style: none;">Download</a></div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col" style="margin-top: 40px;"><a href="{{ route('toplayer') }}" style="font-family: poppins;font-size: 20px;color: #5F2B84;">Back</a></div>
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
        {{--  <table class="table">
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
        </table>  --}}
    </div>
</section>

@endsection
