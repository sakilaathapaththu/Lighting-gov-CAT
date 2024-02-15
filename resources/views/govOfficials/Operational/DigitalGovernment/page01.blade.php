@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpChangeManagement') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (Operational Staff)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Change Management (නිපුණතා අංශය: කළමනාකරණය වෙනස් කිරීම)<br><br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Managing change in Digital Government setting (ඩිජිටල් රාජ්‍ය සැකසීමේ වෙනස්වීම් කළමනාකරණය කිරීම)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">1)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which is not true regarding change management in digital transformation? ( ඩිජිටල් පරිවර්තනයේ වෙනස් වීම කළමණාකරණය සම්බන්ධයෙන් සත්‍ය නොවන්නේ කුමක්ද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg1" id="dg1_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg1_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Leaders should play an active role in change management (නායකයින් වෙනස කළමණාකරණයේ දී ක්‍රියාකාරී භූමිකාවක් ඉටු කළ යුතුය)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg1" id="dg1_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg1_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Everybody in the organization accepting the organizational change is necessary for digital transformation (ආයතනික වෙනස පිළිගන්නා ආයතනයේ සිටින සියලු දෙනා ඩිජිටල් පරිවර්තනය සඳහා අවශ්‍ය වේ)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg1" id="dg1_3" value="6">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg1_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Change management is purely a function of the top management and not applicable to middle and lower management (වෙනස කළමණාකරණය සම්පූර්ණයෙන්ම ඉහළ කළමනාකාරිත්වයේ කාර්යයක් වන අතර මධ්යම සහ පහළ කළමනාකරණයට අදාළ නොවේ)</h5></label>
                </div>      
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg1" id="dg1_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg1_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Change management can be initiated with a small step (වෙනස කළමනාකරණය කුඩා පියවරකින් ආරම්භ කළ හැක)</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">2)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which of the below is not an effective way to improve the use of technology among citizens? (පුරවැසියන් අතර තාක්ෂණය භාවිතය වැඩි දියුණු කිරීම සඳහා ඵලදායී ක්‍රමයක් නොවන්නේ පහත කවරක් ද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg2" id="dg2_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg2_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Making the online services compulsory for all citizens overnight (එක රැයකින් සියලුම පුරවැසියන් සඳහා මාර්ගගත සේවාවන් අනිවාර්ය කිරීම)</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg2" id="dg2_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg2_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Creating awareness about the effective use of technology among citizens (පුරවැසියන් අතර තාක්ෂණය ඵලදායී ලෙස භාවිතා කිරීම පිළිබඳව දැනුවත් කිරීම)</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg2" id="dg2_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg2_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Training the citizens on how to use technology platforms to get services (සේවා ලබා ගැනීම සඳහා තාක්ෂණික වේදිකා භාවිතා කරන්නේ කෙසේද යන්න පිළිබඳව පුරවැසියන් පුහුණු කිරීම)</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg2" id="dg2_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg2_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Empowering the enablers to push technology adoption among citizens (පුරවැසියන් අතර තාක්ෂණය යොදා ගැනීම දිරි ගැන්වීමට හැකියාව ලබා දෙන්නන් සවිබල ගැන්වීම)</h5>
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
