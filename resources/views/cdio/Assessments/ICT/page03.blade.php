@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioManagingTechnologicalIntervention')}}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
    <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (CDIO)</h2>
    </div>  
    <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
        <div class="row" style="background: #E52F72;height:5%;text-align:center;border-radius:10px">
            <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Managing technological interventions in Digital Government<br><br></h5>
        </div>
        <div class="row" style="text-align:center">
            <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Competency Area Description: Initiate, drive comprehend technological interventions in digital government.<br><br></h5>
        </div>
    </div>
    <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
    <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">8)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is known as a an "information system architecture"</h5>
            </div>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label style="color: var(--bs-emphasis-color);"><h5 id="h4">A - It is a formal definition of the business processes and rules, systems structure, technical framework, and product technologies for a business or organizational information system.</h5></label>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label style="color: var(--bs-emphasis-color);"><h5 id="h4">B - An information technology infrastructure contains hardware components, software components and services provided by staff member of the organisation integrated together.</h5></label>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict8" id="ict8_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict8_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Only A</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict8" id="ict8_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict8_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b)  Only B</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict8" id="ict8_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="5">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict8_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Both A & B </h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict8" id="ict8_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict8_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) None of the above</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">9)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">As a CDIO, how you can prepare an organization to implement a solution in digital government?</h5>
            </div>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label for="ict2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">A - You do not required to build the project team. </h5></label>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label for="ict2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">B - It is better to gather all the requirements.</h5></label>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label for="ict2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">C - It should establish the budget and timeline. </h5></label>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label for="ict2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">D - You do not required to elaborate an implementation plan. </h5></label>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict9" id="ict9_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict9_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Only A & B</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict9" id="ict9_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict9_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Only B & C  </h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict9" id="ict9_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict9_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Both A & C</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict9" id="ict9_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict9_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) None of the above</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">10)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why organizations should have Business Process Improvements?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict10" id="ict10_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict10_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Eliminate waste & friction in processes</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict10" id="ict10_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict10_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Reduce the time required to get work done</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict10" id="ict10_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict10_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Ensure better compliance with rules and regulations</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict10" id="ict10_4" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict10_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">11)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">
                When considering a digital environment, which one of the following is not a common type of business technology?
                </h5>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict11" id="ict11_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict11_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">a) Computers, Software and Networking</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict11" id="ict11_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict11_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">b) Accounting System</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict11" id="ict11_3" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict11_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">c) Manual book keeping </h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict11" id="ict11_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict11_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">d) Inventory Control System</h5>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">12)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is enabling interoperability, scalability, usability, and security crucial for a CDIO in managing IT infrastructure?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict12" id="ict12_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict12_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To complicate IT systems</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict12" id="ict12_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict12_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To create barriers between systems</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict12" id="ict12_3" value="5">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict12_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To promote inefficiency </h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict12" id="ict12_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict12_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To enhance overall performance and security</h5></label>
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
</div>
</form>

@endsection
