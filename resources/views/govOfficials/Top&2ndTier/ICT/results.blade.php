@extends('layouts.govofficialusernavbar')

@section('content')

<section data-aos="fade-down" style="height: 3750px;text-align: center;">
    <div data-aos="zoom-in" data-aos-duration="800" data-aos-delay="50" style="margin-top: 150px;width: 1268px;height: 494px;border: 6px solid #5F2B84;border-radius: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xxl-4"><img src="{{ asset('img/Achievement-pana 1.png') }}" width="490" height="481"></div>
                <div class="col-md-6 col-xxl-7">
                    <div class="row">
                        <div class="col" style="text-align: center;margin-top: 20px;"><span style="color: #1F2471;font-family: poppins;font-size: 32px;font-weight: bold;text-align: center;"><br>Successfully completed ICT Assessment<br><br></span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: -30px;"><span style="color: var(--bs-emphasis-color);font-size: 20px;font-family: poppins;"><br>You have successfully completed ICT Assessment.<br><br></span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 50px;">
                            <a class="btn btn-primary" type="button" href="{{ route('topIctReport') }}" style="width: 203px;height: 55px;font-size: 20px;font-family: Poppins;background: url(&quot;{{ asset('img/Screenshot (561) 6.png') }}&quot;), var(--bs-body-bg);border-style: none;">Download</a></div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col" style="margin-top: 40px;"><a href="{{ route('toplayer') }}" style="font-family: poppins;font-size: 20px;color: #5F2B84;">Back</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-down" data-aos-duration="800" style="margin-top: 50px;"><span style="color: #1F2471;font-size: 24px;font-family: poppins;font-weight: bold;text-align: center;"><br>Results of the ICT Assessment<br><br></span>
        <div class="container"style="width: 920px;height: 535px;text-align: center;margin-top: 50px;border-radius: 10px;box-shadow: 0px 0px 7px 4px #5F2B84;border-style: none;border-color: var(--bs-emphasis-color);">
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
                colors: ['#CC1D56']
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
                    <th style="width: 400px;font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br>Competency Area<br><br></th>
                    <th style="width: 300px;font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);"><br>Proficiency<br><br></th>
                    <th style="font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);"><br>Recommended areas of improvement<br><br></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-family: poppins;"><br>ICT in Workplace<br><br></td>
                    <td style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);"><br>{{ $avgTopIctInWorkplace }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($topIctInWorkplace2->ict1==0)
                        Digital transformation on public services<br><br>
                        @endif
                        @if($topIctInWorkplace2->ict2==0)
                        Emerging ICT technologies<br><br>
                        @endif
                        @if($topIctInWorkplace2->ict3==0)
                        Developing ICT plans<br><br>
                        Digital government strategy <br><br>
                        @endif
                        @if($topIctInWorkplace2->ict4==0)
                        Digital Government Transformation<br><br>
                        @endif
                    </td>
                </tr>
                <tr style="font-family: poppins;">
                    <td style="font-family: poppins;"><br>Information Management<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgTopInformationManagement }}%</td>
                    <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                        @if($topInformationManagement2->ict5==0)
                        Information security<br><br>
                        Data protection and privacy<br><br>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="font-family: poppins;"><br>Digital Citizenship<br><br></td>
                    <td style="font-family: poppins;background: var(--bs-warning-bg-subtle);"><br>{{ $avgTopDigitalCitizenship }}%</td>
                    <td style="font-family: poppins;text-align: left;">
                        @if($topDigitalCitizenship2->ict6_1==0||$topDigitalCitizenship2->ict6_2==0||$topDigitalCitizenship2->ict6_3==0)
                        Digital media and technologies<br><br>
                        @endif
                        @if($topDigitalCitizenship2->ict7_1==0||$topDigitalCitizenship2->ict7_2==0||$topDigitalCitizenship2->ict7_3==0)
                        Impact of technology use use<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict8==0)
                        Cyber risks<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict9==0)
                        Cyber-threats<br><br>
                        @endif
                        @if($topDigitalCitizenship2->ict10==0)
                        Digital Empathy<br><br>
                        @endif
                        @if($topDigitalCitizenship2->ict11==0)
                        Digital footprints<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict12_1==0||$topDigitalCitizenship2->ict12_2==0||$topDigitalCitizenship2->ict12_3==0)
                        Digital media<br><br>
                        @endif
                        @if ($topDigitalCitizenship2->ict13==0)
                        Privacy Management<br><br>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
