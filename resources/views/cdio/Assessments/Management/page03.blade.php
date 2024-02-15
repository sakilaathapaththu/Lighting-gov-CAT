@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioDecisionMaking')}}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (CDIO)</h2>
        </div>
        
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #027673;height:10%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Effective decision making for digital government interventions<br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Create an enabling environment for effective decision making for digital government interventions<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">11)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">In your view, which one of the following should be the first step in the ethical decision making process?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt11" id="mgt11_1" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt11_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Recognizing that an ethical issue exists.</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt11" id="mgt11_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt11_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Being socialized into the organization's corporate culture.</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt11" id="mgt11_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt11_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Applying a personal moral philosophy in order to individualize the ethical decision making process. </h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt11" id="mgt11_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt11_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Enforcing the organization's ethical standards with rewards and punishment.</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">12)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">The resistance towards change at an individual level can be due to various reasons: Select the most appropriate.</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt12" id="mgt12_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt12_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) How satisfied they are with the existing state of affairs.</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt12" id="mgt12_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt12_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) How much practical or realistic the change is.</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt12" id="mgt12_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt12_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) What will be the possible cost change on the individual in terms of potential risks involved, pressure to develop new competencies and disruptions.</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt12" id="mgt12_4" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt12_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">13)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What does "accountability in decision-making" entail for a CDIO?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt13" id="mgt13_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt13_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Avoiding responsibility for decisions</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt13" id="mgt13_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt13_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Making decisions without considering consequences</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt13" id="mgt13_3" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt13_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Taking responsibility and ownership for decisions made  </h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt13" id="mgt13_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt13_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Blaming others for decision outcomes</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">14)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is a potential benefit of implementing data-driven decision-making in an organization led by a CDIO?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt14" id="mgt14_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt14_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Increased reliance on intuition</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt14" id="mgt14_2" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt14_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Improved alignment with organizational goals</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt14" id="mgt14_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt14_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Enhanced arbitrary decision-making</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt14" id="mgt14_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt14_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Decreased emphasis on factual analysis</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">15)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which description is appropriate among the following for digital governance?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt15" id="mgt15_1" value="7">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt15_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) To provide fair and unbiased to the citizens</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt15" id="mgt15_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt15_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To provide technology-driven governance</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt15" id="mgt15_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt15_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To ensure people's faith in e-commerce applications</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt15" id="mgt15_4" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt15_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To engage, enable and empower the citizens</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">16)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is transparent decision-making essential for a Chief Digital Information Officer (CDIO)?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt16" id="mgt16_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt16_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) To conceal information from employees</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt16" id="mgt16_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt16_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To create confusion in the organization</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt16" id="mgt16_3" value="2">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt16_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To build trust and credibility</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt16" id="mgt16_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt16_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To maintain an authoritative image</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">17)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is a key benefit of involving employees in the decision-making process under the leadership of a CDIO?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt17" id="mgt17_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt17_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Reduced employee morale</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt17" id="mgt17_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt17_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Increased resistance to change</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt17" id="mgt17_3" value="2">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt17_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Enhanced commitment and ownership </h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt17" id="mgt17_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt17_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Slower response to market trends</h5></label>
                </div>
            </div>
        </div>
    </div>
    <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>   
    <div class="row" style="margin-top:2%;margin-bottom:2%">
        <div class="col-12" style="text-align:right">
            <a class="btn btn-primary" href="{{ route('cdioAssessments') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
            <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
        </div>
</div>
</form>