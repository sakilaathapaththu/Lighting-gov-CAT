@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpWorkplaceManagement') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (Operational Staff)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Workplace Management (නිපුණතා අංශය: සන්නිවේදනය)<br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Building a holistic and open environment that promotes collaboration and productivity towards achieving digital government transformation. (ඩිජිටල් රාජ්‍ය පරිවර්තනයක් සාක්ෂාත් කර ගැනීම සඳහා සහයෝගීතාවය සහ ඵලදායිතාව ප්‍රවර්ධනය කරන පරිපූර්ණ සහ විවෘත පරිසරයක් ගොඩනැගීම.)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">5)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which of the following is not recommended to overcome Digital Government Service Delivery failures? (ඩිජිටල් රාජ්‍ය සේවා බෙදා හැරීමේ අසාර්ථක වීම් මඟහරවා ගැනීම සඳහා පහත සඳහන් දේවලින් නිර්දේශ නොකරන්නේ කුමක්ද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Preventive actions by educating the users in advance (පරිශීලකයින් කල්තියා දැනුවත් කිරීමෙන් වැළැක්වීමේ ක්‍රියාමාර්ග ගැනීම )</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Assistive actions to act fast to overcome the situation when it occurs ( තත්ත්වය ඇති වූ විට එය ජය ගැනීම සඳහා වේගයෙන් ක්‍රියා කිරීමට උපකාරක ක්‍රියාමාර්ග ගැනීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Taking actions after the incident/ damage(සිද්ධිය/හානියෙන් පසු පියවර ගැනීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_4" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Ignore the service failure (සේවා අසාර්ථකත්වය නොසලකා හැරීම)</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">6)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which of the following is the best way to promote benefits to citizens among your team? (ඔබේ කණ්ඩායම අතර පුරවැසියන්ට ප්‍රතිලාභ ප්‍රවර්ධනය කිරීමට පහත සඳහන් දේවලින් හොඳම ක්‍රමය කුමක්ද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt6" id="mgt6_1" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt6_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Set yourself as an example to others by being a Pioneer in practicing the organization offers (ප්‍රගුණ කිරීමේ පුරෝගාමියෙකු වීමෙන් ඔබ අන් අයට ආදර්ශයක් වීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt6" id="mgt6_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt6_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) I follow when my supervisor orders me (මගේ අධීක්ෂක මට නියෝග කරන විට මම අනුගමනය කරමි)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt6" id="mgt6_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt6_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) I always like the old ways of doing it (මම හැම විටම එය කිරීමට පැරණි ක්‍රම වලට කැමතියි)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt6" id="mgt6_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt6_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Neither interested nor objection to digital service offerings (ඩිජිටල් සේවා පිරිනැමීම් සඳහා උනන්දුවක් හෝ විරුද්ධත්වයක් නැත)</h5></label>
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
