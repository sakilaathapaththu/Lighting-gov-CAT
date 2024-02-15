@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioTeamwork')}}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (CDIO)</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Effective teamwork<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Ability to work in a team and bring synergies through effective team working
                    <br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">35)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is true about synergy effect?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt35" id="mgt35_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt35_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)  The team synergy effect leads to effective teamwork and high-impact results across the team</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt35" id="mgt35_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt35_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Synergy describes a way to work together to produce great results</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt35" id="mgt35_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt35_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) TSynergy is the combined action that takes place when different individuals collaborate for one common cause that improves results by the sharing of perceptions, insights and knowledge</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt35" id="mgt35_4" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt35_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">36)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the primary purpose of CDIO's emphasis on knowledge sharing?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt36" id="mgt36_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt36_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To hinder digital progress</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt36" id="mgt36_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt36_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To create communication barriers</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt36" id="mgt36_3" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt36_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To encourage collaboration and efficiency    </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt36" id="mgt36_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt36_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d)  To discourage teamwork</h5></label>

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