@extends('layouts.cdionavbar')

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
                        <h5 id="h4" style="color: var(--bs-emphasis-color);margin-top:5%">You have successfully completed Management Assessment.<br></h5>
                    </div>
                    <div class="row" style="margin-top:10%">
                        <a class="btn btn-primary" type="button" href="{{route('cdioManagementReport')}}" style="margin-left:20%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);width:60%;border-style: none;"><h4 id="h4">Download</h4></a>
                    </div>
                    <div class="row" style="margin-top:10%;text-allign:center">
                        <a  href="{{ route('cdioAssessments') }}" style="font-family: poppins;font-size: 20px;color: #5F2B84;margin-left:44%"><h5 id="h4">Back</h5></a>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{ asset('img/Achievement-pana 1.png') }}" style="width:100%;height:80%">
                </div>
            </div>  
        </div>
    </div>
    <div class="row" data-aos="fade-down" data-aos-duration="800" style="text-align: center;font-family: poppins;">
        <h2 id="h2" style="color: #1F2471;font-weight: bold;"><br>Results of the Management Assessment<br><br></h2>
    </div>
    <div class="row" style="text-align:center">
        <div id="chart_div" style="font-family: Poppins;width:80%;height:70%;margin-left:8%"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
                    colors: ['#CC1D56']
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
</div>

@endsection 
