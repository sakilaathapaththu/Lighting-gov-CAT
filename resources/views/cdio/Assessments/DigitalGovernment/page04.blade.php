@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioOrientation')}}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (CDIO)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Results orientation<br><br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Results orientation to achieve desired outcomes and sustain stakeholder satisfaction in digital government<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">13)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the primary goal of a CDIO when working towards achieving desired outcomes in digital government initiatives?</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg13" id="dg13_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg13_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Delaying the completion of initiatives</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg13" id="dg13_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg13_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Maximizing personal benefits </h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg13" id="dg13_3" value="6">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg13_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Aligning with organizational objectives and goals  </h5></label>
                </div>      
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg13" id="dg13_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg13_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Ignoring the impact on stakeholders</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">14)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the primary benefit of innovative approaches in delivering stakeholder satisfaction? </h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg14" id="dg14_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg14_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Limiting stakeholder involvement</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg14" id="dg14_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg14_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Enhancing collaboration and adaptability</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg14" id="dg14_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg14_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Maintaining a stagnant work environment</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg14" id="dg14_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg14_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Avoiding any changes in stakeholder interactions</h5>
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
