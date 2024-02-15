@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioCollaboration')}}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (CDIO)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Collaboration and Partnership<br><br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Collaborating and Partnering in enhancing Digital Government capacity<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">9)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Validate the given statements about the cross-functional team in a digital government initiative.</h5>
                </div>
            </div>
            <div class="col-11" style="text-align:left;margin-left:5%">
                <label style="color: var(--bs-emphasis-color);"><h5 id="h4">A - Cross-functional teams are a small group of people from different departments who are mutually accountable to a common set of performance goals.</h5></label>
            </div>
            <div class="col-11" style="text-align:left;margin-left:5%">
                <label style="color: var(--bs-emphasis-color);"><h5 id="h4">B - A cross-functional team is a group of people with different functional expertise working toward a common goal.</h5></label>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg9" id="dg9_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg9_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Only A is correct</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg9" id="dg9_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg9_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Only B is correct</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg9" id="dg9_3" value="6">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg9_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Both A & B are correct </h5></label>
                </div>      
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg9" id="dg9_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg9_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) None of the above is correct</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">10)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">As a CDIO, what do you understand as the challenges to effective data sharing, both internal and external?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg10" id="dg10_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg10_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Insufficient Tools and Technology.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg10" id="dg10_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg10_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Perceived Regulatory Prohibitions.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg10" id="dg10_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg10_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Risk Assessment of Security.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg10" id="dg10_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg10_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above</h5>
                    </label>
                </div>
                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">11)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which of the following best characterizes the process of continuous integration (CI)?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg11" id="dg11_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg11_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Integrating data or functions from one application with data of functions from another application.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg11" id="dg11_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg11_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) The practice of integrating daily, or several times a day, in order to reduce risks, data errors and repetitive manual processes. </h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg11" id="dg11_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg11_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Using query federation to allow information gathered from various sources to be accessible on demand and in real-time.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg11" id="dg11_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg11_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) The practice of integrating all enterprise applications each time a new application or system is introduced or added to a network.</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">12)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Your manager has just asked every member of the team to independently study and submit a detailed plan for implementing a total Employee Involvement/Quality program in their area of responsibility in a digital government initiative. In subsequent conversations with other team members. Choose the most suitable answer.</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg12" id="dg12_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg12_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) The manager is not to be trusted, there is a hidden agenda behind all of this.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg12" id="dg12_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg12_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Cooperating fully with the manager’s request is easy because you can count on him/her to keep the best interests, both of the individual and team, in mind. </h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg12" id="dg12_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg12_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Team members are suspicious but are reluctantly cooperating with the manager’s request.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg12" id="dg12_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg12_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) You have to deal with this manager on a case by case basis, wait and see is the best policy</h5>
                    </label>
                </div>
                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
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
