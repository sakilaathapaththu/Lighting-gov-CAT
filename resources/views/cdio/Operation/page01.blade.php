@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Operation</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Agile Change management<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Agile change management is a natural extension of Agile development methodologies including Scrum®, SAFe® and AgilePM® which set out how best to create a 'production line' that frequently delivers tangible change in the form of new features and functionality. (Agility) Change the wording accordingly. List of assumptions . Make it more generalized. New : Agile change Management is the alignment of Agile delivery mechanisms that create change, and change management activities that create and embed new ways of working.<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">1)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How is the change management process is being done?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o1" id="o1_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o1_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) There is no proper change management practices defined, no change management plan, CCB, it operates on case by case basis.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o1" id="o1_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o1_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Change management practices documented.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o1" id="o1_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o1_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Organization has a well defined change management process in practice, CCB in place and documentation available.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o1" id="o1_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o1_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Organizational digital transformation related changes are being continuously monitored and data collected by all respective entities.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o1" id="o1_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o1_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Centralized, virtualized CRM that enables a 360 degree view of Citizen behaviour, experience, expectations, products, services, usage etc. Predictive capabilities, Citizen Analytics Record to enable visibility into citizens next best actions Cloud integrated CRM</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">2)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How frequently new features are being added to the system?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o2" id="o2_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o2_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) 
                        New features are rarely been explored/ added to the procedures/ systems</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o2" id="o2_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o2_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) New features are being explored and mapped with the present scenario/ requirements once in every six month or less.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o2" id="o2_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Proper mechanism is in place to integrate new features to the systems/ procedures in every three months or less.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o2" id="o2_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o2_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Systems /procedures are being monitored every month to ensure the new technologies/ features are being used in a productive way.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o2" id="o2_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o2_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) 
                            Regular review of systems/ procedures for continuous improvements.</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">3)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> How frequently changing processors are being done to the system?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o3" id="o3_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o3_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) No defined management hierarchy or processes for change management. Complex problem-solving is done in an ad hoc manner, and there is no systematic record-keeping or official communication about changes.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o3" id="o3_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o3_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Management hierarchy and structure exist, but there's no deliberate effort in change management. Changes and problem-solving follow existing organizational structures, and records are kept manually, with traditional methods of notifying employees.
                    </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o3" id="o3_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o3_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Change management and problem-solving are accepted as key functions with well-defined processes. An automated system is in place, providing transparency in notifying employees, maintaining records, and allowing easy access to previous cases for future reference.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o3" id="o3_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o3_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Changes are explored regularly to improve services and processes, with weekly management reports. Case studies are integrated into systems to expedite processes, and a dedicated person oversees prompt resolutions to any delays.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o3" id="o3_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o3_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Constantly reviewing and adopting changes to minimize time and optimize processes. Emphasis on continuous improvement in problem-solving processes and the adoption of required changes in systems, procedures, and structures.</h5></label>

                </div>

            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
           
            </div>
            <div class="row" style="margin-top:2%;margin-bottom:2%">
                <div class="col-12" style="text-align:right">
                    <a class="btn btn-primary" href="{{ route('deepTechnology') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
                    <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
                </div>
            </div>
</form>
@endsection
