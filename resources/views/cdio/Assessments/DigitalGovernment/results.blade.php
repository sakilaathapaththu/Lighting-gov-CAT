@extends('layouts.cdionavbar')

@section('content')

<div class="container" style="font-family: poppins;">
    <div class="row">
        <div class="container" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="50" style="width:90%;height:40%;margin-top:15%;border: 6px solid #5F2B84;border-radius: 10px;">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h3 id="h2" style="color: #1F2471;font-weight: bold;text-align: center;margin-top:20%">Successfully completed Digital Government Assessment<br></h3>
                    </div>
                    <div class="row" style="text-align:center">
                        <h5 id="h4" style="color: var(--bs-emphasis-color);margin-top:5%">You have successfully completed Digital Government Assessment.<br></h5>
                    </div>
                    <div class="row" style="margin-top:10%">
                        <a class="btn btn-primary" type="button" href="{{route('cdioDigitalGovernmentReport')}}" style="margin-left:20%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);width:60%;border-style: none;"><h4 id="h4">Download</h4></a>
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
        <h2 id="h2" style="color: #1F2471;font-weight: bold;"><br>Results of the Digital Government Assessment<br><br></h2>
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
</div>

@endsection 
