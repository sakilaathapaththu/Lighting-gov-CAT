@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpStakeholderManagement') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (Operational Staff)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Stakeholder Management (නිපුණතා අංශය: සන්නිවේදනය)<br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Actively promote digital service delivery through a citizen oriented approach and a collaborative work environment while effectively managing stakeholders for digital government initiatives. (ඩිජිටල් රාජ්‍ය මුලපිරීම් සඳහා පාර්ශවකරුවන් ඵලදායී ලෙස කළමනාකරණය කරන අතරම පුරවැසි නැඹුරු ප්‍රවේශයක් සහ සහයෝගී වැඩ පරිසරයක් හරහා ඩිජිටල් සේවා සැපයීම සක්‍රීයව ප්‍රවර්ධනය කිරීම)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">7)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which of the below is not a good practice to manage conflicts at your working place? (ඔබගේ සේවා ස්ථානයේ ගැටුම් කළමනාකරණය කිරීම සඳහා පහත සඳහන් දේවලින් හොඳ භාවිතයක් නොවන්නේ කුමක්ද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt7" id="mgt7_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt7_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Listen carefully (හොඳින් සවන් දීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt7" id="mgt7_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt7_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Identify points of agreement and disagreement (එකඟතාවයන් සහ එකඟ නොවීම් හඳුනා ගැනීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt7" id="mgt7_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt7_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Clarify what is the source of conflict (ගැටුමේ මූලාශ්‍රය කුමක්ද යන්න පැහැදිලි කිරීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt7" id="mgt7_4" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt7_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Do not talk with others (අන් අය සමඟ කතා නොකිරීම)</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">8)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which is not the best way to understand the stakeholder's behaviors? (පාර්ශ්වකරුගේ හැසිරීම් තේරුම් ගැනීමට හොඳම ක්‍රමය නොවන්නේ කුමක්ද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt8" id="mgt8_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt8_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Communicate clearly (පැහැදිලිව සන්නිවේදනය කිරීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt8" id="mgt8_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt8_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Respond quickly and follow up (ඉක්මනින් ප්‍රතිචාර දැක්වීම සහ පසු විපරම් කිරීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt8" id="mgt8_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt8_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Be flexible and ready to adapt (නම්‍යශීලී සහ අනුවර්තනය වීමට සූදානම් වීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt8" id="mgt8_4" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt8_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Don't listen to stakeholders (පාර්ශවකරුවන්ට ඇහුම්කන් නොදීම)</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">9)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which of the following is a benefit of digitally collaborative tools? (ඩිජිටල් සහයෝගීතා මෙවලම්වල ප්‍රතිලාභය පහත සඳහන් කවරක් ද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt9" id="mgt9_1" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt9_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Increase productivity (ඵලදායිතාව වැඩි කිරීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt9" id="mgt9_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt9_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Time-consuming(කාලය නාස්ති කිරීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt9" id="mgt9_3" value="0">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="mgt9_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Unable to collaborate remotely (දුරස්ථව සහයෝගයෙන් කටයුතු කළ නොහැකි වීම)</h5>
                    </label>
                </div>      
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt9" id="mgt9_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt9_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">10)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which one is not a benefit of digital government? (ඩිජිටල් රජයේ ප්‍රතිලාභයක් නොවන්නේ කුමක්ද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt10" id="mgt10_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt10_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Citizen-centric services (පුරවැසි කේන්ද්‍රීය සේවාවන්)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt10" id="mgt10_2" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt10_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Time-consuming to obtain a service (සේවාවක් ලබා ගැනීමට කාලය ගත වේ)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt10" id="mgt10_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt10_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Provide services efficiently (කාර්යක්ෂමව සේවා සැපයීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt10" id="mgt10_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt10_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Can access services from anywhere (ඕනෑම තැනක සිට සේවාවන් වෙත ප්‍රවේශ විය හැකි වීම)</h5></label>
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
