@extends('layouts.cdionavbar')

@section('content')

<div class="container" style="font-family: poppins;">
    <div class="row">
        <div class="container" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="50" style="width:90%;height:40%;margin-top:15%;border: 6px solid #5F2B84;border-radius: 10px;">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h3 id="h2" style="color: #1F2471;font-weight: bold;text-align: center;margin-top:20%">Successfully completed ICT Assessment<br></h3>
                    </div>
                    <div class="row" style="text-align:center">
                        <h5 id="h4" style="color: var(--bs-emphasis-color);margin-top:5%">You have successfully completed ICT Assessment.<br></h5>
                    </div>
                    <div class="row" style="margin-top:10%">
                        <a class="btn btn-primary" type="button" href="{{route('cdioIctReport')}}" style="margin-left:20%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);width:60%;border-style: none;"><h4 id="h4">Download</h4></a>
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
        <h2 id="h2" style="color: #1F2471;font-weight: bold;"><br>Results of the ICT Assessment<br><br></h2>
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
                    <td style="font-family: poppins;"><br><h5 id="h4">ICT in Workplace<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br><h5 id="h4">{{ $avgCdioIctInWorkplace }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioIctInWorkplace2->ict1==0)
                        Trends that enables digital transformation on public services<br><br>
                        @endif
                        @if($cdioIctInWorkplace2->ict2==0)
                        Emerging ICT technologies<br><br>
                        @endif
                        @if($cdioIctInWorkplace2->ict3==0)
                        Developing ICT plans Digital government strategy<br><br>
                        @endif
                        @if($cdioIctInWorkplace2->ict4==0)
                        Digital Government Transformation<br><br>
                        @endif
                        @if($cdioIctInWorkplace2->ict5==0)
                        Innovation adoption<br><br>
                        @endif
                        @if($cdioIctInWorkplace2->ict6==0)
                        Legislations/ acts pertaining to the domain<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br><h5 id="h4">Information Management<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgCdioInformationManagement }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;"><h5 id="h4">
                        @if($cdioInformationManagement2->ict7==0)
                        Information security Data protection and privacy<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Managing Technological Interventions<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgCdioManagingTechnologicalIntervention}}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioManagingTechnologicalIntervention2->ict8==0)
                        System architecture<br><br>
                        @endif
                        @if($cdioManagingTechnologicalIntervention2->ict9==0)
                        Digital government solutions<br><br>
                        @endif
                        @if ($cdioManagingTechnologicalIntervention2->ict10==0)
                        Business process improvement methodologies<br><br>
                        @endif
                        @if ($cdioManagingTechnologicalIntervention2->ict11==0)
                        Emerging ICT technologies<br><br>
                        @endif
                        @if($cdioManagingTechnologicalIntervention2->ict12==0)
                        IT infrastructure and systems<br><br>
                        @endif
                        </h5>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br><h5 id="h4">Digital Citizenship<br><br></h5></td>
                    <td style="font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);"><br><h5 id="h4">{{ $avgCdioDigitalCitizenship }}%</h5></td>
                    <td style="font-family: poppins;text-align: left;"><h5 id="h4">
                        @if($cdioDigitalCitizenship2->ict13==0)
                        Digital media and technologies<br><br>
                        @endif
                        @if($cdioDigitalCitizenship2->ict14==0)
                        Digital media and technologies<br><br>
                        @endif
                        @if ($cdioDigitalCitizenship2->ict15==0)
                        Cyber risks<br><br>
                        @endif
                        @if ($cdioDigitalCitizenship2->ict16==0)
                        Cyber-threats<br><br>
                        @endif
                        @if($cdioDigitalCitizenship2->ict17==0)
                        Positive mindset towards<br><br>
                        @endif
                        @if ($cdioDigitalCitizenship2->ict18==0)
                        Digital footprint<br><br>
                        @endif
                        @if ($cdioDigitalCitizenship2->ict19==0)
                        Digital media<br><br>
                        @endif
                        @if ($cdioDigitalCitizenship2->ict20==0)
                        Privacy<br><br>
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
