@extends('layouts.govofficialusernavbar')

@section('content')

<form method="POST" action="{{ route('storeOpOrientation') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (Operational Staff)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Results Orientation (නිපුණතා අංශය: ප්‍රතිඵල දිශානතිය)</h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Results orientation to achieve desired outcomes and sustain stakeholder satisfaction in digital government (ඩිජිටල් රජය තුළ, අපේක්ෂිත ප්‍රතිඵල සාක්ෂාත් කර ගැනීම සඳහා ප්‍රතිඵල දිශානතිය ඇති කර ගැනීම සහ පාර්ශවකරුවන්ගේ තෘප්තිය පවත්වා ගැනීම)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top: 2%;">
                    <h5 id="h4" style="color: #1f2471;">5)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471; margin-top: 2%; margin-left: -4%;">Which of the below statement is true about effective service delivery? (ඵලදායි සේවා සැපයීම සම්බන්ධයෙන් පහත සඳහන් කුමන ප්‍රකාශය සත්‍යද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align: right">
                    <input type="radio" name="dg5" id="dg5_1" value="6">
                </div>
                <div class="col-11" style="text-align: left">
                    <label for="dg5_1" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Creating a win-win situation for both the organization and its users (සංවිධානය සහ එහි භාවිතා කරන්නන් යන දෙපාර්ශවයම සඳහා ජයග්‍රාහී තත්වයක් නිර්මාණය කිරීම)</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align: right">
                    <input type="radio" name="dg5" id="dg5_2" value="0">
                </div>
                <div class="col-11" style="text-align: left">
                    <label for="dg5_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Customer feedback is not important in effective service delivery (ඵලදායී සේවා සැපයීමේදී පාරිභෝගික ප්‍රතිපෝෂණය(feedback) වැදගත් නොවේ)</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align: right">
                    <input type="radio" name="dg5" id="dg5_3" value="0">
                </div>  
                <div class="col-11" style="text-align: left">
                    <label for="dg5_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Measuring the effectiveness of the service delivery is not important (සේවා සැපයීමේ සඵලතාවය මැනීම වැදගත් නොවේ)</h5>
                    </label>
                </div>      
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align: right">
                    <input type="radio" name="dg5" id="dg5_4" value="0">
                </div>
                <div class="col-11" style="text-align: left">
                    <label for="dg5_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Quality of the service delivery does not depend on the level of training and development of the person who delivers it (සේවා සැපයීමේ ගුණාත්මකභාවය එය ලබා දෙන පුද්ගලයාගේ පුහුණු මට්ටම සහ සංවර්ධනය මත රඳා නොපවතී)</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top: 2%;">
                    <h5 id="h4" style="color: #1f2471;">6)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471; margin-top: 2%; margin-left: -4%;">Identify the incorrect statement about measuring the success of digital government services. (ඩිජිටල් රාජ්‍ය සේවාවන්හි සාර්ථකත්වය මැනීම පිළිබඳ වැරදි ප්‍රකාශය හඳුනා ගන්න)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%;">
                <div class="col-1" style="text-align: right;">
                    <input type="radio" name="dg6" id="dg6_1" value="0">
                </div>
                <div class="col-11" style="text-align: left;">
                    <label for="dg6_1" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Success of the digital tax system can be measured through the increased tax revenue (ඩිජිටල් බදු ක්‍රමයේ සාර්ථකත්වය වැඩි වූ බදු ආදායම හරහා මැනිය හැක)</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%;">
                <div class="col-1" style="text-align: right;">
                    <input type="radio" name="dg6" id="dg6_2" value="0">
                </div>
                <div class="col-11" style="text-align: left;">
                    <label for="dg6_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Success of the digital education system can be measured through the number of active users (ඩිජිටල් අධ්‍යාපන ක්‍රමයේ සාර්ථකත්වය සක්‍රීය පරිශීලකයින් සංඛ්‍යාව හරහා මැනිය හැක)</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%;">
                <div class="col-1" style="text-align: right;">
                    <input type="radio" name="dg6" id="dg6_3" value="0">
                </div>
                <div class="col-11" style="text-align: left;">
                    <label for="dg6_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Success of a Digital health system can be measured through the number of people consulted in a day (ඩිජිටල් සෞඛ්‍ය පද්ධතියක සාර්ථකත්වය මැනිය හැක්කේ දිනකට උපදේශන ලද පුද්ගලයින් සංඛ්‍යාව මගිනි)</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%;">
                <div class="col-1" style="text-align: right;">
                    <input type="radio" name="dg6" id="dg6_4" value="6">
                </div>
                <div class="col-11" style="text-align: left;">
                    <label for="dg6_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) None of the above (ඉහත කිසිවක් නොවේ)</h5>
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
