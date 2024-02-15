@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpCollaboration') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (Operational Staff)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Collaboration and Partnership (නිපුණතා අංශය:සහයෝගීතාවය සහ හවුල්කාරිත්වය)<br><br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Collaborating and Partnering in enhancing Digital Government capacity (ඩිජිටල් රාජ්‍ය ධාරිතාව ඉහළ නැංවීම සඳහා සහයෝගීතාවය සහ හවුල් වීම)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">3)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What are the tools and platforms that you can implement within your organization to improve collaborations between inter-departments? (අන්තර් දෙපාර්තමේන්තු අතර සහයෝගිතාව වැඩිදියුණු කිරීම සඳහා ඔබේ සංවිධානය තුළ ක්‍රියාත්මක කළ හැකි මෙවලම් සහ වේදිකා මොනවාද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg3" id="dg3_1" type="radio" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg3_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) WhatsApp/ Facebook Group for group chats (WhatsApp/ Facebook Group - කණ්ඩායම් කතාබස් සඳහා)</h5></label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg3" id="dg3_2" type="radio" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg3_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">b) Google docs, spreadsheets to work on a single document collaboratively (Google docs, spreadsheets -සහයෝගීව තනි ලේඛනයක් මත වැඩ කිරීමට)</h5></label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg3" id="dg3_3" type="radio" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg3_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">c) Shared Event/ meeting calendar to avoid conflicting meetings/ events (Shared Event/ meeting calendar -ගැටුම්කාරී රැස්වීම්/සිදුවීම් වළක්වා ගැනීමට)</h5></label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg3" id="dg3_4" type="radio" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg3_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">4)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Identify the incorrect statement. (වැරදි ප්‍රකාශය හඳුනාගන්න)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg4" id="dg4_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg4_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Individual strengths/weaknesses can be shared between team members and go for bigger outcomes (තනි පුද්ගල ශක්තීන්/දුර්වලතා කණ්ඩායම් සාමාජිකයන් අතර බෙදා ගත හැකි අතර එය විශාල ප්‍රතිඵල කරා යා හැක)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg4" id="dg4_2" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg4_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Talented members can take the lead in every team and others become just followers (දක්ෂ සාමාජිකයින්ට සෑම කණ්ඩායමකම පෙරමුණ ගත හැකි අතර අනෙක් අය හුදෙක් අනුගාමිකයින් බවට පත්වේ)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg4" id="dg4_3" value="0">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg4_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Responsibilities can be shared among team members so that all members can play an important role (සියලුම සාමාජිකයින්ට වැදගත් කාර්යභාරයක් ඉටු කළ හැකි වන පරිදි කණ්ඩායම් සාමාජිකයින් අතර වගකීම් බෙදා ගත හැකිය)</h5>
                    </label>
                </div>      
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg4" id="dg4_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg4_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Diversity in a team can always lead to a greater success (කණ්ඩායමක විවිධත්වය සෑම විටම වැඩි සාර්ථකත්වයක් කරා ගෙන යා හැකිය)</h5>
                    </label>
                </div>
            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
        </div>
    </div>
    <div class="row" style="margin-top:2%;margin-bottom:2%">
        <div class="col-12" style="text-align:right">
            <a class="btn btn-primary" href="{{ route('operationallayer') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
            <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
        </div>
    </div>
</form>

@endsection
