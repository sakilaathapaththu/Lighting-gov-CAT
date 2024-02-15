@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioInformationManagement')}}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
    <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (CDIO)</h2>
    </div>  
    <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
        <div class="row" style="background: #E52F72;height:5%;text-align:center;border-radius:10px">
            <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Information Management<br><br></h5>
        </div>
        <div class="row" style="text-align:center">
            <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Competency Area Description: Ensure data and information are secure and adhere to data protection policies and laws in Digital Government service delivery. <br><br></h5>
        </div>
    </div>
    <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">7)</h5>
            </div>
            <div class="col-11" style="margin-left:-4%">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;">What does Information Security primarily focus on in the context of CDIO responsibilities?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict7" id="ict7_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict7_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Creating unlimited access to all information</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict7" id="ict7_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict7_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Ensuring the confidentiality, integrity, and availability of information</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict7" id="ict7_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict7_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Sharing sensitive information openly</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict7" id="ict7_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict7_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Ignoring the protection of information assets</h5></label>
            </div>
        </div>
        <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
</div>  
    <div class="row" style="margin-top:2%;margin-bottom:2%">
        <div class="col-12" style="text-align:right">
            <a class="btn btn-primary" href="{{ route('cdioAssessments') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
            <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
        </div>
    </div>
</div>
</form>

@endsection
