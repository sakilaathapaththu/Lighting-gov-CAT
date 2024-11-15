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
    <link rel="stylesheet" href="{{ asset('cssfile/bootstrap2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <!-- Include jsPDF library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
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
                <div class="col" style="text-align: center;"><span
                        style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">Digital
                        Government Competency<br> Framework</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col" style="text-align: center;"><span
                        style="font-size: 24px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">Competency
                        Proficiency -ICT</span></div>
            </div>
            <!-- Content section -->
            <!-- Adjust margin and padding as needed -->
            <div class="row" style="margin-top: 20%;">
                <div class="col" style="text-align: center;"><span
                        style="font-size: 24px;color: #000000;font-family: Poppins, sans-serif;font-weight: bold;">{{ $govOfficial->full_name }}</span>
                </div>
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
                <div class="col" style="text-align: center;"><span
                        style="font-family: poppins;font-weight: bold;text-align: center;"><br> Overall Results of
                        ICT&nbsp; Assessment <br><br></span></div>
            </div>

            <div class="row">
                <div class="col" style="text-align: center;">
                    <div id="chart_div" style="width:900px;height:500px;font-family: Poppins;">
                        <div class="col" style="text-align: center;">

                            <script>
                                google.charts.load('current', {
                                    packages: ['corechart', 'bar']
                                });
                                google.charts.setOnLoadCallback(drawBasic);

                                function drawBasic() {

                                    var data = google.visualization.arrayToDataTable({{ Js::from($result) }});
                                    var options = {
                                        chartArea: {
                                            width: '50%'
                                        },
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
                                };
                            </script>
                        </div>

                    </div>

                </div>
            </div>
            <div class="table-responsive" style="margin-top: 30px;font-family: Poppins, sans-serif;">
                <table class="table">
                    <thead style="background: var(--bs-table-border-color);">
                        <tr style="background: var(--bs-table-border-color);">
                            <th style="background: var(--bs-table-border-color);width: 200px;font-size: 12px;">
                                Competency Area</th>
                            <th style="background: var(--bs-table-border-color);font-size: 12px;">Definitions
                            </th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 12px;">
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;">ICT in workplace</td>
                            <td style="font-size: 12px;">Productively perform tasks in the workplace by using ICT
                                skills and knowledge in a digital government setting</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Information Management<br><br></td>
                            <td style="font-size: 12px;"><br>Ensure data and information are secure and adhere to
                                data protection policies and laws in Digital Government service delivery</td>
                        </tr>
                        <tr style="font-size: 12px;">
                            <td style="font-size: 12px;"><br>Digital Citizenship</td>
                            <td style="font-size: 12px;"><br>Use of digital technology and media in safe
                                responsible and ethical ways</td>
                        </tr>
                    </tbody>
                </table>
            </div>

           



        </div>
    </div>

    <div class="page-break"></div>
    <div style="border-style: solid; border-color: #000000;margin-left: 5%;margin-right: 5%;height: 1450px;">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;"><span
                        style="font-family: poppins;font-weight: bold;text-align: center;color: #1F2471;"><br>Recommendations</span>
                </div>
            </div>

            <div class="table-responsive" style="margin-top: 30px;width:100%;">
                <table class="table">
                    <thead style="background: var(--bs-table-border-color);">
                        <tr style="background: var(--bs-table-border-color);height: 60px;">
                            <th
                                style="width: 400px;font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-striped-color);">
                                <br>Competency Area<br><br>
                            </th>
                            <th
                                style="width: 300px;font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);">
                                <br>Proficiency<br><br>
                            </th>
                            <th
                                style="font-size: 20px;font-family: poppins;background: var(--bs-tertiary-bg);border-left-style: solid;border-left-color: var(--bs-table-color);">
                                <br>Recommended areas of improvement<br><br>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-family: poppins;"><br>ICT in Workplace<br><br></td>
                            <td
                                style="width: 300px;font-family: poppins;text-align: center;background: var(--bs-warning-bg-subtle);border-left-style: solid;border-left-color: var(--bs-table-striped-color);">
                                <br>{{ $avgTopIctInWorkplace }}%
                            </td>
                            <td style="font-family: poppins;text-align: left;">
                                @if ($topIctInWorkplace2->ict1 == 0)
                                    Digital transformation on public services<br><br>
                                @endif
                                @if ($topIctInWorkplace2->ict2 == 0)
                                    Emerging ICT technologies<br><br>
                                @endif
                                @if ($topIctInWorkplace2->ict3 == 0)
                                    Developing ICT plans<br><br>
                                    Digital government strategy <br><br>
                                @endif
                                @if ($topIctInWorkplace2->ict4 == 0)
                                    Digital Government Transformation<br><br>
                                @endif
                            </td>
                        </tr>
                        <tr style="font-family: poppins;">
                            <td style="font-family: poppins;"><br>Information Management<br><br></td>
                            <td
                                style="font-family: poppins;background: var(--bs-warning-bg-subtle);text-align: center;">
                                <br>{{ $avgTopInformationManagement }}%
                            </td>
                            <td style="font-family: poppins;text-align: left;box-shadow: 0px 0px;">
                                @if ($topInformationManagement2->ict5 == 0)
                                    Information security<br><br>
                                    Data protection and privacy<br><br>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: poppins;"><br>Digital Citizenship<br><br></td>
                            <td
                                style="font-family: poppins;background: var(--bs-warning-bg-subtle);text-align: center;">
                                <br>{{ $avgTopDigitalCitizenship }}%
                            </td>
                            <td style="font-family: poppins;text-align: left;">
                                @if (
                                    $topDigitalCitizenship2->ict6_1 == 0 ||
                                        $topDigitalCitizenship2->ict6_2 == 0 ||
                                        $topDigitalCitizenship2->ict6_3 == 0)
                                    Digital media and technologies<br><br>
                                @endif
                                @if (
                                    $topDigitalCitizenship2->ict7_1 == 0 ||
                                        $topDigitalCitizenship2->ict7_2 == 0 ||
                                        $topDigitalCitizenship2->ict7_3 == 0)
                                    Impact of technology use use<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict8 == 0)
                                    Cyber risks<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict9 == 0)
                                    Cyber-threats<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict10 == 0)
                                    Digital Empathy<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict11 == 0)
                                    Digital footprints<br><br>
                                @endif
                                @if (
                                    $topDigitalCitizenship2->ict12_1 == 0 ||
                                        $topDigitalCitizenship2->ict12_2 == 0 ||
                                        $topDigitalCitizenship2->ict12_3 == 0)
                                    Digital media<br><br>
                                @endif
                                @if ($topDigitalCitizenship2->ict13 == 0)
                                    Privacy Management<br><br>
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


    {{-- <script>
        function generatePDF() {
            const pdf = new jsPDF();

            // Generate content for page 1
            const content1 = document.querySelector('#pdf01').innerHTML;
            pdf.fromHTML(content1, 15, 15);

            // Add a page break
            pdf.addPage();

            // Generate content for page 2
            const content2 = document.querySelector('#pdf02').innerHTML;
            pdf.fromHTML(content2, 15, 15);

            // Save the PDF
            pdf.save('competency_proficiency_report.pdf');
        }
    </script> --}}
</body>

</html>
