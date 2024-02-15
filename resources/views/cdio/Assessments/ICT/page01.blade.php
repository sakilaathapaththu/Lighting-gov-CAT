@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioIctInWorkplace')}}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
    <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (CDIO)</h2>
    </div>  
    <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
        <div class="row" style="background: #E52F72;height:5%;text-align:center;border-radius:10px">
            <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: ICT in Workplace<br><br></h5>
        </div>
        <div class="row" style="text-align:center">
            <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Competency Area Description: Productively perform tasks in the workplace by using ICT skills and knowledge in a digital <br>government setting.&nbsp; <br><br></h5>
        </div>
    </div>
    <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">1)</h5>
            </div>
            <div class="col-11" style="margin-left:-4%">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;">What are the benefits which can be gained through an effectively implemented and maintained digital government?</h5>
            </div>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label style="color: var(--bs-emphasis-color);"><h5 id="h4">A - Improved achievement of Public Service-wide and departmental strategic goals.</h5></label>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label style="color: var(--bs-emphasis-color);"><h5 id="h4">B - Increased alignment of investment towards strategic goals.</h5></label>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label style="color: var(--bs-emphasis-color);"><h5 id="h4">C - ICT pro-actively recognises opportunities and guides departments and the Public Service in timeous adoption of appropriate technology.</h5></label>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict1" id="ict1_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict1_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Only A and B</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict1" id="ict1_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict1_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Only B and C</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict1" id="ict1_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict1_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Only A and C</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict1" id="ict1_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict1_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">2)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">In your view, what is true about Data Visualization?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict2" id="ict2_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict2_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Data Visualization is used to communicate information clearly and efficiently to users by the usage of information graphics such as tables and charts.</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict2" id="ict2_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict2_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b)  Data Visualization helps users in analyzing a large amount of data in a simpler way.</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict2" id="ict2_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Data Visualization makes complex data more accessible, understandable, and usable.</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict2" id="ict2_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict2_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">3)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is your understanding about ICT planning when driving digital transformation?</h5>
            </div>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label for="ict2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">A - It should align with the organizational digital goals.</h5></label>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label for="ict2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">B - It does not have any relationship with the organizational digital goals.</h5></label>
        </div>
        <div class="col-11" style="text-align:left;margin-left:5%">
            <label for="ict2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">C - It includes how to implement various technology capabilities which will enable the business.</h5></label>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict3" id="ict3_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict3_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Only A and B</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict3" id="ict3_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict3_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Only B and C</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict3" id="ict3_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="5">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict3_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Only A and C</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict3" id="ict3_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict3_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">4)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the primary goal of recognizing the benefits of Digital Government transformation in a CDIO's role?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict4" id="ict4_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict4_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To avoid digital initiatives</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict4" id="ict4_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict4_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To slow down technological progress</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict4" id="ict4_3" value="5">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict4_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To facilitate informed decision-making and positive outcomes</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict4" id="ict4_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict4_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To prioritize traditional methods over digital solutions</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">5)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">
                In the context of CDIO responsibilities, why is adopting innovation through digital modes crucial?
                </h5>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict5" id="ict5_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict5_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">a) To discourage technological advancements</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict5" id="ict5_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict5_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">b) To maintain a traditional work environment</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict5" id="ict5_3" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict5_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">c) To enhance digital literacy among employees</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict5" id="ict5_4" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict5_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">d) To streamline processes and improve efficiency</h5>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">6)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is it essential for a CDIO to have awareness of legislations/acts pertaining to the domain?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict6" id="ict6_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict6_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To undermine legal regulations</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict6" id="ict6_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict6_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To promote legal ambiguity</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict6" id="ict6_3" value="5">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict6_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To ensure compliance and avoid legal issues </h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict6" id="ict6_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict6_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To discourage adherence to legal standards</h5></label>
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
