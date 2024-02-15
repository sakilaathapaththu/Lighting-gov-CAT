@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioManagingQuality')}}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (CDIO)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Managing quality in digital government services<br><br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Delivering and managing quality in Digital Government Services<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">15)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">As a responsible government official, which one of the following could be a good practices to be Resilient when responding to situations that are not going well in a public sector organization?</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg15" id="dg15_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg15_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Be open to feedback.</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg15" id="dg15_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg15_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Build positive, trusting relationships, which builds strong teams.</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg15" id="dg15_3" value="6">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg15_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Be decisive, willing to make decisions and to move forward.</h5></label>
                </div>      
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg15" id="dg15_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg15_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All are true</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">16)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is it essential for a Chief Digital Information Officer (CDIO) to ensure that digital government solutions meet changing stakeholder expectations, customer satisfaction, and technological enhancements?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg16" id="dg16_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg16_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) To limit technological advancements in government solutions</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg16" id="dg16_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg16_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) To disregard customer feedback and satisfaction</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg16" id="dg16_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg16_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) To enhance collaboration with stakeholders</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg16" id="dg16_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg16_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) To isolate government solutions from evolving technologies</h5>
                    </label>
                </div>
                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">17)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">A digital government organization provides its employees with training on how to comply with equality. How will this affect customers?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg17" id="dg17_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg17_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Range of services will be decreased.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg17" id="dg17_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg17_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Fair service will be provided.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg17" id="dg17_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg17_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Offering services will be limited.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg17" id="dg17_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg17_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) More services will be offered.</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">18)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">As a CDIO, which of the following you recommend to train employees to provide quality service in a digital government?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg18" id="dg18_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg18_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Empower employees to solve problems on their own.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg18" id="dg18_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg18_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Discourage active listening.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg18" id="dg18_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg18_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Need not to encourage diversified knowledge in related areas.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg18" id="dg18_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg18_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Encourage employees not to practice patience and empathy.</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">19)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is it important to deliver high quality digital government services consistently to customers? </h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg19" id="dg19_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg19_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) It helps to maintain an organisation’s positive reputation.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg19" id="dg19_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg19_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) It reduces the need to act on customer feedback. </h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg19" id="dg19_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg19_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) It builds strong customer relationships.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg19" id="dg19_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg19_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) It improves customer loyalty.</h5>
                    </label>
                </div>
            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
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
