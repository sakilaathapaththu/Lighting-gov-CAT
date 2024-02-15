@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioDigitalTransformation')}}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (CDIO)</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Institutional digital transformation<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Development and adoption of digital transformation strategies to achieve with intended results through operational leadership<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">39)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which approach is aligned with the CDIO's role in the national digital vision?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt39" id="mgt39_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt39_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)  Indifference to national goals</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt39" id="mgt39_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt39_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Proactive engagement and contribution</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt39" id="mgt39_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt39_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Pursuing only internal goals</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt39" id="mgt39_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt39_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Avoiding technological advancements</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">40)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is it important for a CDIO to formulate an institutional digital transformation strategy aligned with the organizational corporate vision?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt40" id="mgt40_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt40_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To increase bureaucratic processes</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt40" id="mgt40_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt40_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To create unnecessary complexity</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt40" id="mgt40_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt40_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c)  To ensure alignment with overall organizational goals </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt40" id="mgt40_4" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt40_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To limit innovation within the institution </h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">41)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">   Importance of digital transformation in government organizations?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt41" id="mgt41_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt41_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)Understand their citizens better and achieve better outcomes</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt41" id="mgt41_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt41_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Provide services more effectively and efficiently</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt41" id="mgt41_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt41_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To keep up with emerging customer demands</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt41" id="mgt41_4" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt41_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above    </h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">42)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">  What is true/ false about government performance indicators?<br>
                        <br>A - Government key performance indicator (KPI) is a quantifiable measure that the public sector uses to evaluate its performance.
                        <br>B - Government KPIs demonstrate the organization's overall performance and its accountability to its stakeholders.</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt42" id="mgt42_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt42_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Only a) is true</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt42" id="mgt42_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt42_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Only b) is true</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt42" id="mgt42_3" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt42_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c)  Both a) and b) are true </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt42" id="mgt42_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt42_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) None of the above is true</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">43)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> Which of the following defines ICT strategic planning in digital government?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt43" id="mgt43_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt43_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Focused on entire organization</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt43" id="mgt43_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt43_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Based on strategic thinking</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt43" id="mgt43_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt43_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Clarifies organization's purpose and priorities</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt43" id="mgt43_4" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt43_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of these </h5></label>

                </div>

            </div>


            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">44)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which management skill involves the ability to anticipate potential issues before they arise?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt44" id="mgt44_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt44_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)  Crisis management</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt44" id="mgt44_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt44_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Proactive problem-solving </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt44" id="mgt44_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt44_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Reactive decision-making</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt44" id="mgt44_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt44_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Avoidance</h5></label>

                </div>

            </div>
            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly> 
            <input class="form-control" type="hidden" id="totCdioCommunication" name="totCdioCommunication" value="{{$totCdioCommunication}}" readonly> 
            <input class="form-control" type="hidden" id="totCdioManagingEffectiveWorkplace" name="totCdioManagingEffectiveWorkplace" value="{{$totCdioManagingEffectiveWorkplace}}" readonly> 
            <input class="form-control" type="hidden" id="totCdioDecisionMaking" name="totCdioDecisionMaking" value="{{$totCdioDecisionMaking}}" readonly> 
            <input class="form-control" type="hidden" id="totCdioBuildingCapacity" name="totCdioBuildingCapacity" value="{{$totCdioBuildingCapacity}}" readonly> 
            <input class="form-control" type="hidden" id="totCdioStakeholder" name="totCdioStakeholder" value="{{$totCdioStakeholder}}" readonly> 
            <input class="form-control" type="hidden" id="totCdioHumanResource" name="totCdioHumanResource" value="{{$totCdioHumanResource}}" readonly> 
            <input class="form-control" type="hidden" id="totCdioTeamwork" name="totCdioTeamwork" value="{{$totCdioTeamwork}}" readonly> 
            <input class="form-control" type="hidden" id="totCdioSelfDevelopment" name="totCdioSelfDevelopment" value="{{$totCdioSelfDevelopment}}" readonly> 
            <div class="row" style="margin-top:2%;margin-bottom:2%">
    <div class="col-12" style="text-align:right">
        <a class="btn btn-primary" href="{{ route('cdioAssessments') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
        <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Submit</h4></button>
    </div>
</div>
</form>
@endsection