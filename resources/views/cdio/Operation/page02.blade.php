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

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Integrated Service Management<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Integrated service management was created to give organizations a standardized method for implementing ITIL concepts quickly and easily.  New : Integrated Service Management provides
                    an ITIL aligned Service Management framework with the simplicity of one touch point. Using digitisation and automation, organizations can seamlessly integrate tools and processes across multiple technology
                    domains, environments and agreed third party providers.<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">4)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the improvement of digital and automate performances?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o4" id="o4_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o4_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Manual work in place. The guidelines and processes are not in place. Responsibilities are not mapped. Resources are not used efficiently.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o4" id="o4_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o4_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Guidelines and processes are available but not formalized. Responsibilities are defined but not mapped systematically. Performance and efficiency is not evaluated</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o4" id="o4_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o4_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) The guidelines and processes are defined and practiced at all levels in the organization. All resources are used efficiently.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o4" id="o4_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o4_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Digital performance is automated and continuously monitor for improvements</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o4" id="o4_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o4_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) The guidelines and processes are in place and M&E can be done to increase quality of service.</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">5)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How is the real time digital interface support to legal,regulatory and compliance needs in real-time?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o5" id="o5_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o5_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) 
                        No digital interface to support legal, regulatory and compliance needs in real-time. Resources are not used efficiently.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o5" id="o5_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o5_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b)Legal, regulatory and compliance use basic technology but not connected through a digital interface. Efficiency is at low since processes are time consuming</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o5" id="o5_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o5_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Digital interface is in place to support legal, regulatory and compliance needs in real-time and users are aware of it. All resources are used efficiently.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o5" id="o5_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o5_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Digital interface is connected with other systems and processes to optimise the overall efficiency . Alignments with other systems are needed</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o5" id="o5_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o5_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) 
                            Digital interface is constantly being monitors for further improvements</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">6)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is the improvement of automation align with business technology?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o6" id="o6_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o6_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Manual work done or technology is available but not being used. Resources are not used efficiently.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o6" id="o6_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o6_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Internal systems are available but not automated</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o6" id="o6_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o6_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Processes are automated and used by everyone. All resources are used efficiently.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o6" id="o6_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o6_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Processes are automated and used by everyone. Ability to use reports to analyse and make decisions.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o6" id="o6_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o6_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Processes are systems are continually evaluating and improving</h5></label>

                </div>

            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
           
            </div>
            <div class="row" style="margin-top:2%;margin-bottom:2%">
                <div class="col-12" style="text-align:right">
                    <a class="btn btn-primary" href="{{ route('deepTechnology') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
                    <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
                </div>
            </div>
</form>
@endsection

            