@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Operation</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Smart Process Management<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Smart Process Management: Automated Generation of. Adaptive Cases based on Intelligent Planning<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">11)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How intelligent process management is being monitored?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o11" id="o11_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o11_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Data based intelligent process management is not available and does it in ad hoc manner</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o11" id="o11_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o11_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Basic data-based intelligent process is available but people are not trained how to sue it</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o11" id="o11_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o11_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Data based intelligent process management is in place and practice. Relevant guidelines and capabilities available.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o11" id="o11_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o11_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Process is evaluated frequently to assure the quality and relevance</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o11" id="o11_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o11_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Processes being refined and enhanced based on the monitoring data. continuous Intelligent process management</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">12)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Are process are automated and what is the mechanism of handing over them?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o12" id="o12_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o12_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) 
                        Processes are predominantly manual, with no recent improvements. Minimal efforts toward process enhancement are individual-driven, lacking systematic improvements.
                    </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o12" id="o12_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o12_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) While processes remain largely manual, digital tools are introduced for certain functions through personal or group initiatives. Desire for automation exists, but constraints like lack of leadership and technology expertise hinder progress.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o12" id="o12_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o12_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Processes and standards are documented and have been practiced for an extended period. Key functions are automated, but there is acknowledgment of the need for improvement, with barriers like leadership and technological constraints.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o12" id="o12_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o12_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Processes are largely automated and practiced, with automation of key functions. There's a desire for further improvement, and processes are monitored and reviewed based on reasoning, with considerations for data analytics in decision-making.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o12" id="o12_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o12_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) 
                            Processes are highly automated and well-practiced. There is a strong desire and leadership for continuous improvement and excellence, with an openness to innovation and feedback-driven enhancements. Decision-making may involve data analytics.</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">13)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is the mechanism of process performance?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o13" id="o13_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o13_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) There is no proper monitoring and reporting of process performance. It happens in an ad-hoc manner.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o13" id="o13_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o13_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Manual process is in place to monitor and report of process performance</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o13" id="o13_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o13_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Automated monitoring and reporting of process performance is available</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o13" id="o13_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o13_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Process in being monitored frequently to assure the smooth running</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o13" id="o13_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o13_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Improvements are being made continuously to improve the efficiency</h5></label>

                </div>

            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
           
            </div>
            <div class="row" style="margin-top:2%;margin-bottom:2%">
                <div class="col-12" style="text-align:right">
                    <a class="btn btn-primary" href="{{ route('deepTechnology') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
                    <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Submit</h4></button>
                </div>
            </div>
</form>
@endsection

            