@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioProjectAndProgrammeManagement')}}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (CDIO)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Project and Program Management<br><br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Undertaking Project management initiatives in Digital Government capacity<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">1)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">which of the following is true about resource planning in digital government?</h5>
                </div>
            </div>
            <div class="col-11" style="text-align:left;margin-left:5%">
                <label style="color: var(--bs-emphasis-color);"><h5 id="h4">A) Resource planning is looking at all the physical resources necessary for executing the project.</h5></label>
            </div>
            <div class="col-11" style="text-align:left;margin-left:5%">
                <label style="color: var(--bs-emphasis-color);"><h5 id="h4">B) Creating a workflow structure (work breakdown structure) will not aid in the identification of components of the project that would require certain resources.</h5></label>
            </div>
            <div class="col-11" style="text-align:left;margin-left:5%">
                <label style="color: var(--bs-emphasis-color);"><h5 id="h4">C) Ensuring that all activities and requirements are not in-line with the organization’s policies and procedures required in resource planning.</h5></label>
            </div>
            <div class="col-11" style="text-align:left;margin-left:5%">
                <label style="color: var(--bs-emphasis-color);"><h5 id="h4">D) Referring to data from past projects, consult the SOW document is a best practice in resource planning. </h5></label>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg1" id="dg1_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg1_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) A & B</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg1" id="dg1_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg1_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) B & C</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg1" id="dg1_3" value="6">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg1_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) C & D</h5></label>
                </div>      
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg1" id="dg1_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg1_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) A & D</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">2)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is it important for a Chief Digital Information Officer (CDIO) to recognize service provisions in line with the institutional and national Digital Government strategy?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg2" id="dg2_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg2_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) To ignore strategic alignment for service delivery</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg2" id="dg2_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg2_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) To complicate service provisions unnecessarily</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg2" id="dg2_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg2_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) To ensure services are not in line with organizational goals</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg2" id="dg2_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg2_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) To align service provisions with the institutional and national Digital Government strategy </h5>
                    </label>
                </div>
                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">3)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the main responsibility of a CDIO regarding digital government projects?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg3" id="dg3_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg3_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Introducing unnecessary complexities to project tasks</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg3" id="dg3_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg3_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Ignoring project deadlines</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg3" id="dg3_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg3_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Facilitating and ensuring the successful completion and delivery of projects </h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg3" id="dg3_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg3_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Minimizing collaboration with project stakeholders</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">4)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the role of leadership in digital transformation?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg4" id="dg4_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg4_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Driving fast decision-making process</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg4" id="dg4_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg4_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Propelling the change</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg4" id="dg4_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg4_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Is a combination of leadership style of transformation leadership and the uses of digital technology</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg4" id="dg4_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg4_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above</h5>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:2%;margin-bottom:2%">
        <div class="col-12" style="text-align:right">
            <a class="btn btn-primary" href="{{ route('cdioAssessments') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
            <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
        </div>
    </div>
</form>
@endsection
