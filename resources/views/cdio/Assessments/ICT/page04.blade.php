@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioDigitalCitizenship')}}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
    <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (Operational Staff)</h2>
    </div>  
    <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
        <div class="row" style="background: #E52F72;height:5%;text-align:center;border-radius:10px">
            <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Digital Citizenship<br><br></h5>
        </div>
        <div class="row" style="text-align:center">
            <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Competency Area Description: Use of digital technology and media in safe responsible and ethical ways.  <br><br></h5>
        </div>
    </div>
    <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">13)</h5>
            </div>
            <div class="col-11" style="margin-left:-4%">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;">Why is "Digital Citizen Identity" crucial for CDIO responsibilities?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict13" id="ict13_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict13_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To complicate citizen interactions</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict13" id="ict13_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict13_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To streamline and secure digital interactions with citizens </h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict13" id="ict13_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict13_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To discourage citizens from using digital services</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict13" id="ict13_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict13_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To prioritize traditional methods over digital identity management</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">14)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What does the principle of "Balanced Use of Technology" emphasize?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict14" id="ict14_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict14_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Maximizing technology usage at all costs</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict14" id="ict14_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict14_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b)  Prioritizing technology over human aspects</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict14" id="ict14_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="5">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict14_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Achieving a harmonious and thoughtful integration of technology</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict14" id="ict14_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict14_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Completely avoiding the use of technology</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">15)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the primary focus of "Behavioural Cyber-Risk Management"?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict15" id="ict15_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict15_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Protecting physical infrastructure</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict15" id="ict15_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict15_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Managing cyber threats related to human behavior   </h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict15" id="ict15_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict15_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Developing cybersecurity software</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict15" id="ict15_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict15_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Conducting cyber drills</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">16)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What does "Personal Cyber Security Management" primarily focus on?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict16" id="ict16_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict16_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Securing physical offices</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict16" id="ict16_2" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict16_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Protecting personal information in the digital realm </h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict16" id="ict16_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict16_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Managing personnel in the cybersecurity department</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict16" id="ict16_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict16_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Building cybersecurity software</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">17)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">
                What does "Digital Empathy" involve in the context of digital governance?
                </h5>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict17" id="ict17_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict17_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">a) A method for digital advertising</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict17" id="ict17_2" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict17_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">b) Understanding and considering the needs and emotions of digital users</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict17" id="ict17_3" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict17_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">c) Creating a digital strategy without user input</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict17" id="ict17_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict17_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">d) Ignoring user feedback in the digital realm</h5>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">18)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What does "Digital Footprint" in Digital Footprint Management refer to?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict18" id="ict18_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict18_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) The physical size of a computer</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict18" id="ict18_2" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict18_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Traces of online activities</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict18" id="ict18_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict18_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) The speed of internet connection</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict18" id="ict18_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict18_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) The weight of digital devices</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">19)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is Media and Information Literacy (MIL) important in a digital government environment?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict19" id="ict19_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict19_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To limit access to information</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict19" id="ict19_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict19_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To promote misinformation</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict19" id="ict19_3" value="5">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict19_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To enhance citizens' critical thinking and understanding of media and information   </h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict19" id="ict19_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict19_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To encourage censorship</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">20)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the role of a Chief Digital Information Officer (CDIO) in privacy management?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict20" id="ict20_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict20_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Neglecting the need for privacy</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict20" id="ict20_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict20_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Exposing confidential information</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict20" id="ict20_3" value="5">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict20_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Managing and ensuring privacy compliance </h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict20" id="ict20_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict20_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Avoiding any involvement in privacy matters</h5></label>
            </div>
        </div>
        <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
        <input class="form-control" type="hidden" id="totCdioIctInWorkplace" name="totCdioIctInWorkplace" value="{{$totCdioIctInWorkplace}}" readonly>
        <input class="form-control" type="hidden" id="totCdioInformationManagement" name="totCdioInformationManagement" value="{{$totCdioInformationManagement}}" readonly>
        <input class="form-control" type="hidden" id="totCdioManagingTechnologicalIntervention" name="totCdioManagingTechnologicalIntervention" value="{{$totCdioManagingTechnologicalIntervention}}" readonly>
    </div>
    <div class="row" style="margin-top:2%;margin-bottom:2%">
        <div class="col-12" style="text-align:right">
            <a class="btn btn-primary" href="{{ route('cdioAssessments') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
            <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Submit</h4></button>
        </div>
    </div>
</div>
</form>

@endsection
