@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpTeamwork') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (Operational Staff)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Teamwork (නිපුණතා අංශය: සන්නිවේදනය)<br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Ability to work in a team and bring synergies through effective team working. (කණ්ඩායමක් තුළ වැඩ කිරීමේ හැකියාව සහ ඵලදායී කණ්ඩායම් වැඩ කිරීම තුළින් සහයෝගීතාවයන් ගෙන ඒම.)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">11)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What are the advantages of collaboratively working with others in the organization? (ආයතනය තුළ අනෙකුත් අය සමඟ සහයෝගයෙන් වැඩ කිරීමේ වාසි මොනවාද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt11" id="mgt11_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt11_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Encourages problem-solving (ගැටළු විසඳීම දිරිමත් කරයි)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt11" id="mgt11_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt11_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Allows employees to learn from each other (සේවකයින්ට එකිනෙකාගෙන් ඉගෙන ගැනීමට ඉඩ සලසයි)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt11" id="mgt11_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt11_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Employee wellness and engagement improve (සේවක යහපැවැත්ම සහ නියැලීම වැඩිදියුණු කිරීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt11" id="mgt11_4" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt11_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%;">
                    <h5 id="h4" style="color: #1f2471;">12)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-3%">What are the advantages of knowledge sharing in the organization? (ආයතනය තුළ දැනුම බෙදාගැනීමේ වාසි මොනවාද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt12" id="mgt12_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt12_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Build a community and learning culture (ප්‍රජාවක් සහ ඉගෙනුම් සංස්කෘතියක් ගොඩනැගීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt12" id="mgt12_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt12_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">b) Collaborate and build collective knowledge (සහයෝගීතාවය සහ සාමූහික දැනුම ගොඩනැගීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt12" id="mgt12_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt12_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">c) Share tacit knowledge within the organization (සංවිධානය තුළ නිහඬ දැනුම බෙදා ගන්න)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt12" id="mgt12_4" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt12_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">13)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-3%">Anti-virus software must be; (ප්‍රති-වයිරස මෘදුකාංග විය යුතුය;)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt13" id="mgt13_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt13_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Installed more than once (එක් වරකට වඩා ස්ථාපනය කර ඇත)</h5></label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt13" id="mgt13_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt13_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Used only once a virus has spread (වෛරසයක් පැතිර ගිය පසු පමණක් භාවිතා වේ)</h5></label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt13" id="mgt13_3" value="6">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="mgt13_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Regularly updated (නිතිපතා යාවත්කාලීන කර ඇත)</h5></label>
                </div>      
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt13" id="mgt13_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt13_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Backed up on a removable storage device (ඉවත් කර තබා ගත හැකි ගබඩා උපාංගයක් මත උපස්ථ කර ඇත)</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">14)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-3%">Your colleague came up with an innovative idea. What should not be your reaction?(ඔබේ සගයා නව්‍ය අදහසක් ඉදිරිපත් කළේය. ඔබේ ප්‍රතිචාරය නොවිය යුත්තේ කුමක් ද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt14" id="mgt14_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt14_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Give a Verbal Compliment (වාචික ප්‍රශංසාවක් දීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt14" id="mgt14_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt14_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) See if they need any help (ඔවුන්ට කිසියම් උපකාරයක් අවශ්‍ය දැයි බැලීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt14" id="mgt14_3" value="0">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="mgt14_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Spread the idea among other peers (අනෙකුත් සම වයසේ මිතුරන් අතර අදහස පැතිරවීම)</h5>
                    </label>
                </div>      
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt14" id="mgt14_4" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt14_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Do not acknowledge (නොපිළිගැනීම)</h5>
                    </label>
                </div>
                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            </div>
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
