@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioDriveTheAdoption')}}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (CDIO)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Drive the adoption of the digital  transformation strategy of the organization<br><br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Drive the adoption of the digital  transformation strategy of the organization and ensure the organization is digitally transformed through management of resources and infrastructure, digital governance and business continuity<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">20)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Imporance of digital transformation in government organizations?</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg20" id="dg20_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg20_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Understand their citizens better and achieve better outcomes. </h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg20" id="dg20_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg20_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Provide services more effectively and efficiently.</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg20" id="dg20_3" value="6">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg20_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To keep up with emerging customer demands</h5></label>
                </div>      
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg20" id="dg20_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg20_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above  </h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">21)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is managing physical resources and infrastructure important for a CDIO in a Digital Government setting?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg21" id="dg21_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg21_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) It reduces the number of digital devices</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg21" id="dg21_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg21_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) It enhances internet speed</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg21" id="dg21_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg21_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) It ensures the security of online activities</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg21" id="dg21_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg21_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) It optimizes the performance of hardware and servers</h5>
                    </label>
                </div>
                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">22)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the primary goal of managing and mitigating risks in the context of disaster recovery and business continuity for a CDIO?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg22" id="dg22_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg22_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) To eliminate all risks entirely</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg22" id="dg22_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg22_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) To minimize the impact of potential disruptions </h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg22" id="dg22_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg22_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) To avoid any digital innovations</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg22" id="dg22_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg22_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) To increase the speed of digital processes</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">23)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">As per your understanding as a CDIO what is expected from a Digital Maturity Model?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg23" id="dg23_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg23_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Assess where they are in their transformation journey</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg23" id="dg23_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg23_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Create goals and plans, both short and longer term</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg23" id="dg23_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg23_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Make impactful transformation project investments</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg23" id="dg23_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg23_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">24)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Regarding digital governance, which of the following statements is/are correct? <br>Choose the correct option.</h5>
                </div>
            </div>
            <div class="col-11" style="text-align:left;margin-left:5%">
                <label style="color: var(--bs-emphasis-color);"><h5 id="h4">A - Decreasing transparency is an ICT enabled advantage of e gov</h5></label>
            </div>
            <div class="col-11" style="text-align:left;margin-left:5%">
                <label style="color: var(--bs-emphasis-color);"><h5 id="h4">B - Digital governance is related to the implementation of ICT in government processes and functions</h5></label>
            </div>
            <div class="col-11" style="text-align:left;margin-left:5%">
                <label style="color: var(--bs-emphasis-color);"><h5 id="h4">C - Common Service Centres (CSCs) help in providing and using digital governance related services</h5></label>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg24" id="dg24_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg24_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) A and B</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg24" id="dg24_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg24_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) A and C</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg24" id="dg24_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg24_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) B and C </h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg24" id="dg24_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg24_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) A, B and C</h5>
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
