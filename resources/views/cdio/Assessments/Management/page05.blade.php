@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioStakeholder')}}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (CDIO)</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Effectively managing stakeholders for digital government initiatives
                    <br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Actively promote digital service delivery through a citizen oriented approach while effectively managing stakeholders for digital government initiatives

                    <br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">23)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">In your view, conflict in the workplace most often occurs because, (Mark the most suitable answer) </h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt23" id="mgt23_1" value="7">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt23_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)  Coworkers steal each other's ideas</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt23" id="mgt23_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt23_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Competition between co workers is brutal</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt23" id="mgt23_3" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt23_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Two sets of demands, goals, or motives are incompatible </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt23" id="mgt23_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt23_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Management is too demanding of workers</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">24)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is it important for a Chief Digital Information Officer (CDIO) to actively promote the impact of digital service delivery among employees?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt24" id="mgt24_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt24_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To keep employees unaware of digital advancements</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt24" id="mgt24_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt24_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To discourage collaboration within the organization</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt24" id="mgt24_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt24_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To maintain a traditional work environment</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt24" id="mgt24_4" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt24_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To create awareness and encourage engagement in digital initiatives</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">25)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">  Why is an empathetic mindset crucial for a Chief Digital Information Officer (CDIO) regarding user experience?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt25" id="mgt25_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt25_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)To increase workload on users</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt25" id="mgt25_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt25_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To prioritize organizational goals over user needs</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt25" id="mgt25_3" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt25_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To enhance user satisfaction and engagement</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt25" id="mgt25_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt25_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To create complexity in digital solutions </h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">26)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> In a public sector organization, empowering occurs when, (Mark the incorrect answer)</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt26" id="mgt26_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt26_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Power goes to employees</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt26" id="mgt26_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt26_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Salary increments </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt26" id="mgt26_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt26_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Feeling of sense of ownership</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt26" id="mgt26_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt26_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Feeling of that jobs belong to them </h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">27)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> Which of the following is not the best way to gather information about customer needs in a Digital Government?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt27" id="mgt27_1" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt27_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Define the customer needs based on your understanding</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt27" id="mgt27_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt27_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Personal visits to customer locations </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt27" id="mgt27_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt27_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Employees with special knowledge of the customer</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt27" id="mgt27_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt27_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Information on competitor’s products </h5></label>

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