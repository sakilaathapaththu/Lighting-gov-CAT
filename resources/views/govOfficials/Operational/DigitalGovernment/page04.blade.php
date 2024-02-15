@extends('layouts.govofficialusernavbar')

@section('content')

<form method="POST" action="{{ route('storeOpQualityManagement') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (Operational Staff)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Quality Management (නිපුණතා අංශය: තත්ත්ව කළමනාකරණය)</h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Delivering and managing quality in Digital Government Services (ඩිජිටල් රාජ්‍ය සේවාවන්හි ගුණාත්මකභාවය ලබා දීම සහ කළමනාකරණය කිරීම)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top: 2%;">
                    <h5 id="h4" style="color: #1f2471;">7)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471; margin-top: 2%; margin-left: -4%;">What are the benefits of having a customer feedback system in digital government? (ඩිජිටල් රජය තුළ පාරිභෝගික ප්‍රතිපෝෂණ(feedback) පද්ධතියක් තිබීමේ ප්‍රතිලාභ මොනවාද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top: 1%;">
                <div class="col-1" style="text-align: right;">
                    <input type="radio" name="dg7" id="dg7_1" value="0">
                </div>
                <div class="col-11" style="text-align: left;">
                    <label for="dg7_1" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Helps to identify the areas of improvement (වැඩිදියුණු කළ හැකි අංශ හඳුනා ගැනීමට උපකාරී වේ)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top: 1%;">
                <div class="col-1" style="text-align: right;">
                    <input type="radio" name="dg7" id="dg7_2" value="0">
                </div>
                <div class="col-11" style="text-align: left;">
                    <label for="dg7_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Helps to measure customer satisfaction (පාරිභෝගික තෘප්තිය මැනීමට උපකාරී වේ)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top: 1%;">
                <div class="col-1" style="text-align: right;">
                    <input type="radio" name="dg7" id="dg7_3" value="0">
                </div>
                <div class="col-11" style="text-align: left;">
                    <label for="dg7_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Customer feedback collection explains how the organization treats its customers (පාරිභෝගික ප්‍රතිපෝෂණ (feedback) එකතුව මගින් සංවිධානය තම ගනුදෙනුකරුවන්ට සලකන ආකාරය පැහැදිලි කරයි)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top: 1%;">
                <div class="col-1" style="text-align: right;">
                    <input type="radio" name="dg7" id="dg7_4" value="6">
                </div>
                <div class="col-11" style="text-align: left;">
                    <label for="dg7_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">8)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471; margin-top:2%; margin-left: -4%;">Identify the incorrect statement of the following. (පහත සඳහන් ප්‍රකාශයන්හි වැරදි ප්‍රකාශය හඳුනා ගන්න)</h5>
                </div>
            </div>
            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg8" id="dg8_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg8_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Effective flow of information across organizations is essential to support and manage key service delivery processes (ප්‍රධාන සේවා බෙදා හැරීමේ ක්‍රියාවලීන්ට සහාය වීමට සහ කළමනාකරණය කිරීමට ආයතන හරහා ඵලදායී තොරතුරු)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg8" id="dg8_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg8_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Effectiveness of public service supply chains can be judged on its availability, timing, and accuracy of the information (රාජ්‍ය සේවා සැපයුම් දාමවල සඵලතාවය, ආයතනයේ කාර්යන් ඉටු කිරීමට ඇති සූදානම, වේලාව සහ තොරතුරු වල නිරවද්‍යතාවය මත විනිශ්චය කළ හැක.)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg8" id="dg8_3" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg8_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Inter departments should not share any information with any other organization because that information belongs to them only (අන්තර් දෙපාර්තමේන්තු කිසිදු තොරතුරක් වෙනත් කිසිදු සංවිධානයක් සමඟ බෙදා නොගත යුතුය, මන්ද එම තොරතුරු ඔවුන්ට පමණක් අයත් වේ)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg8" id="dg8_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg8_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Exchanging information digitally reduces administrative burdens and improves efficiency and effectiveness of government organizations (තොරතුරු ඩිජිටල් ලෙස හුවමාරු කිරීම පරිපාලන(රාජකාරි) බර අඩු කරන අතර රාජ්‍ය ආයතනවල කාර්යක්ෂමතාව සහ සඵලතාවය වැඩි දියුණු කරයි.)</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <h5 id="h4" style="color: #1f2471;">9)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-left: -4%">Which is not an effective suggestion to improve the quality of service delivery? (සේවා සැපයීමේ ගුණාත්මකභාවය වැඩි දියුණු කිරීම සඳහා ඵලදායී යෝජනාවක් නොවන්නේ කුමක්ද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg9" id="dg9_1" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg9_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Continue the manual method (අත්පොත ක්‍රමය දිගටම ක්‍රියාත්මක කිරීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg9" id="dg9_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg9_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Use a digital tool for service delivery (සේවා සැපයීම සඳහා ඩිජිටල් මෙවලමක් භාවිතා කිරීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg9" id="dg9_3" value="0">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg9_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Transform manual system to digital (අත්පොත පද්ධතිය ඩිජිටල් බවට පරිවර්තනය කිරීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg9" id="dg9_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg9_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Suggest new improvements to the existing digital system (පවතින ඩිජිටල් පද්ධතියට නව වැඩිදියුණු කිරීම් යෝජනා කිරීම)</h5>
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
