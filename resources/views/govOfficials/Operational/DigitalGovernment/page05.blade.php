@extends('layouts.govofficialusernavbar')

@section('content')

<form method="POST" action="{{ route('storeOpInitiative') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (Operational Staff)</h2>
        </div>
        
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Execute Digital Government Initiatives (ඩිජිටල් රාජ්‍ය මුල පිරීම් ක්‍රියාත්මක කිරීම)</h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Carry out activities in digital government initiatives (ඩිජිටල් රාජ්‍ය මුල පිරීම්වල ක්‍රියාකාරකම් සිදු කිරීම)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row" style="margin-top:2%">
                <div class="col-1">
                    <h5 id="h4" style="color: #1f2471;">10)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-left: -3%">What is the importance of having a legal framework within a Digital Government? (ඩිජිටල් රජයක් තුළ නීතිමය රාමුවක් තිබීමේ වැදගත්කම කුමක්ද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg10" id="dg10_1" type="radio" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg10_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) The legal framework is aimed at creating a favorable legal environment for digital government development (නීතිමය රාමුව ඩිජිටල් රාජ්‍ය සංවර්ධනය සඳහා හිතකර නීතිමය පරිසරයක් නිර්මාණය කිරීම අරමුණු කර ගෙන ඇත)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg10" id="dg10_2" type="radio" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg10_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Digital government solutions need to be legally binding and sound to succeed (ඩිජිටල් රාජ්‍ය විසඳුම් සාර්ථක වීමට නීත්‍යනුකූලව බැඳී සිටීම සහ ශක්තිමත් විය යුතුය)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg10" id="dg10_3" type="radio" value="0">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg10_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Legal framework helps to improve trust and accountability between government agencies (රාජ්‍ය ආයතන අතර විශ්වාසය සහ වගවීම වැඩි දියුණු කිරීමට නීතිමය රාමුව උපකාරී වේ)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg10" id="dg10_4" type="radio" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg10_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <h5 id="h4" style="color: #1f2471;">11)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-left: -3%">What are the outcomes of effective digital service delivery? (ඵලදායී ඩිජිටල් සේවා සැපයීමේ ප්‍රතිඵල මොනවාද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg11" id="dg11_1" type="radio" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg11_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Increase transparency (විනිවිදභාවය වැඩි කිරීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg11" id="dg11_2" type="radio" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg11_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Increased efficiency (කාර්යක්ෂමතාව වැඩි කිරීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg11" id="dg11_3" type="radio" value="0">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg11_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Increased accountability (වගවීම වැඩි කිරීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg11" id="dg11_4" type="radio" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg11_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <h5 id="h4" style="color: #1f2471;">12)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-left: -3%">As per your understanding what is the role of a Chief Digital Information Officer (CDIO) in a government organization? (ඔබගේ අවබෝධයට අනුව රජයේ ආයතනයක ප්‍රධාන ඩිජිටල් තොරතුරු නිලධාරියෙකුගේ (CDIO) කාර්යභාරය කුමක්ද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg12" id="dg12_1" type="radio" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg12_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) CDIO will lead the Digital government transformation strategy within their organization (CDIO ඔවුන්ගේ ආයතනය ෭ුළ ඩිජිටල් රාජ්‍ය පරිවර්තන උපාය මාර්ගයට නායකත්වය දෙනු ඇත)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg12" id="dg12_2" type="radio" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg12_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) A new and important leadership role that will help to put the Sri Lankan government at the forefront of global digital governments (ගෝලීය ඩිජිටල් ආණ්ඩු අතර ශ්‍රී ලංකා රජය ඉදිරියෙන් තැබීමට උපකාරී වන නව සහ වැදගත් නායකත්ව භූමිකාවක්)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg12" id="dg12_3" type="radio" value="0">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg12_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) They will transform the understanding and use of technology to meet organizational goals (ඔවුන් ආයතනික ඉලක්ක සහ විස්තරාත්මක භාවිතය,සංවර්තනය( transform) කරනු ඇත)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input name="dg12" id="dg12_4" type="radio" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg12_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <h5 id="h4" style="color: #1f2471;">13)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-left: -3%">Which one is not a digital communication method you can use in the working place? (ඔබට සේවා ස්ථානයේ භාවිතා කළ හැකි ඩිජිටල් සන්නිවේදන ක්‍රමයක් නොවන්නේ කුමක්ද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg13" id="dg13_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg13_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) WhatsApp</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg13" id="dg13_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg13_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Zoom meeting</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg13" id="dg13_3" value="0">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg13_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Email</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg13" id="dg13_4" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg13_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Printed document</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">14)</h5>
                </div>
                <div class="col-11" style="margin-left:-3%">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;">Mark as True/ False</h5>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive" style="">
                <table class="table" style="border-width:1px">
                    <thead>
                        <tr style="margin-top: 1%;">
                            <th></th>
                            <th></th>
                            <th style="color: #1f2471;text-align: center;">True</th>
                            <th style="color: #1f2471;text-align: center;">False</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="margin-top: 1%;">
                            <td style="color: rgb(0,0,0);"><h5 id="h4">a)</h5></td>
                            <td style="color: rgb(0,0,0);"><h5 id="h4" style="text-align:left">National digital transformation plan should be available with all key stakeholders (ජාතික ඩිජිටල් සංවර්තනය - transformation සැලැස්ම සියලුම ප්‍රධාන පාර්ශවකරුවන් සමඟ සම්බන්දව තිබිය යුතුය)(කෙටි කාලයක් තුළ විශාල ප්‍රේක්ෂක පිරිසක් වෙත ළඟා විය හැක.)</h5></td>
                            <td style="text-align: center;"><input type="radio" name="dg14_1" style="width:100%;height100%" value="3"> </td>
                            <td style="text-align: center;"><input type="radio" name="dg14_1" style="width:100%;height100%" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">b)</h5></td>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">Before implementing, all digital solutions should be validated with the national digital transformation plan (ක්‍රියාත්මක කිරීමට පෙර, සියලුම ඩිජිටල් විසඳුම් ජාතික ඩිජිටල් සංවර්තන(transformation) සැලැස්ම සමඟ වලංගු කළ යුතුය) </h5></td>
                            <td style="text-align: center;"><input type="radio" name="dg14_2" style="width:100%;height100%" value="0"></td>
                            <td style="text-align: center;"><input type="radio" name="dg14_2" style="width:100%;height100%" value="3"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top: 2%;">
                <h5 id="h4" style="color: #1f2471;">15)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471; margin-top: 2%; margin-left: -3%;">What is not a good practice in digital government? (ඩිජිටල් ආණ්ඩුවේ හොඳ භාවිතයක් නොවන්නේ කුමක්ද?)</h5>
            </div>
        </div>
        <div class="row" style="margin-top: 1%;">
            <div class="col-1" style="text-align: right;">
                <input type="radio" name="dg15" id="dg15_1" value="0">
            </div>
            <div class="col-11" style="text-align: left;">
                <label for="dg15_1" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">a) Manage data with integrity (අඛණ්ඩතාවයෙන් යුතුව දත්ත කළමනාකරණය කිරීම)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top: 1%;">
            <div class="col-1" style="text-align: right;">
                <input type="radio" name="dg15" id="dg15_2" value="0">
            </div>
            <div class="col-11" style="text-align: left;">
                <label for="dg15_2" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">b) Be specific about the purpose of data use, especially in the case of personal data (විශේෂයෙන්ම පුද්ගලික දත්ත සම්බන්ධයෙන් දත්ත භාවිතයේ අරමුණ ගැන නිශ්චිත වීම)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top: 1%;">
            <div class="col-1" style="text-align: right;">
                <input type="radio" name="dg15" id="dg15_3" value="0">
            </div>
            <div class="col-11" style="text-align: left;">
                <label for="dg15_3" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">c) Honor data privacy and ethical considerations (දත්ත පෞද්ගලිකත්වය සහ සදාචාරාත්මක සලකා බැලීම් වලට ගරු කිරීම)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top: 1%;">
            <div class="col-1" style="text-align: right;">
                <input type="radio" name="dg15" id="dg15_4" value="6">
            </div>
            <div class="col-11" style="text-align: left;">
                <label for="dg15_4" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">d) Publish all data openly since people have the right to information (මිනිසුන්ට තොරතුරු දැනගැනීමේ අයිතිය ඇති බැවින් සියලු දත්ත විවෘතව ප්‍රකාශ කිරීම)</h5>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%;">
                <h5 id="h4" style="color: #1f2471;">16)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471; margin-top:2%; margin-left:-3%">Why citizen-centric and citizen-friendly government service delivery is required? (පුරවැසි කේන්ද්‍රීය සහ පුරවැසි හිතකාමී රාජ්‍ය සේවා සැපයීම අවශ්‍ය වන්නේ ඇයි?)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="dg16" id="dg16_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="dg16_1" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">a) Citizen requirements are becoming complicated day by day (පුරවැසි අවශ්‍යතා දිනෙන් දින සංකීර්ණ වෙමින් පවතී)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="dg16" id="dg16_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="dg16_2" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">b) It can reduce cost and time consumption (එය පිරිවැය සහ කාල පරිභෝජනය අඩු කළ හැකිය)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="dg16" id="dg16_3" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="dg16_3" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">c) Customer satisfaction is a part of measuring the effectiveness of digital government (පාරිභෝගික තෘප්තිය ඩිජිටල් රජයේ සඵලතාවය මැනීමේ කොටසකි)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="dg16" id="dg16_4" value="6">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="dg16_4" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <h5 id="h4" style="color: #1f2471;">17)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;  margin-left:-3%">What do you understand by "delegation of authority"? ("අධිකාරිය පැවරීම" යන්නෙන් ඔබ තේරුම් ගන්නේ කුමක්ද?)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="dg17" id="dg17_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="dg17_1" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">a) It refers to the segregation of decision-making responsibility to an individual that reports to a leader or manager (එය නායකයෙකුට හෝ කළමනාකරුවෙකුට වාර්තා කරන පුද්ගලයෙකුට තීරණ ගැනීමේ වගකීම වෙන් කිරයි)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="dg17" id="dg17_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="dg17_2" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">b) It is the organizational process of a manager dividing their work among all their people (එය කළමනාකරුවෙකුගේ ෆුලාන් ක්‍රියාවලියක් වන අතර එය ඔවුන්ගේ සියලු මිනිසුන් අතර ඔවුන්ගේ කාර්යය බෙදා හැරීමයි)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="dg17" id="dg17_3" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="dg17_3" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">c) Is a process that enables a person to assign a task to others (එය පුද්ගලයෙකුට වෙනත් අයට කාර්යයක් පැවරීමට හැකියාව ලබා දීමේ ක්‍රියාවලියකි)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top:1%;margin-bottom:2%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="dg17" id="dg17_4" value="6">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="dg17_4" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5>
                </label>
            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            <input class="form-control" type="hidden" id="totOpChangeManagement" name="totOpChangeManagement" value="{{$totOpChangeManagement}}" readonly>
            <input class="form-control" type="hidden" id="totOpCollaboaration" name="totOpCollaboaration" value="{{$totOpCollaboaration}}" readonly>
            <input class="form-control" type="hidden" id="totOpOrientation" name="totOpOrientation" value="{{$totOpOrientation}}" readonly>
            <input class="form-control" type="hidden" id="totOpQualityManagement" name="totOpQualityManagement" value="{{$totOpQualityManagement}}" readonly>
            {{--  <input class="form-control" type="" id="totOpInitiative" name="totOpInitiative" readonly>  --}}
        </div>
    </div>
</div>
<div class="row" style="margin-top:2%;margin-bottom:2%">
    <div class="col-12" style="text-align:right">
        <a class="btn btn-primary" href="{{ route('operationallayer') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
        <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Submit</h4></button>
    </div>
</div>
</form>


@endsection
