@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpCommunication') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (Operational Staff)</h2>
        </div>
        
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Communication<br>(නිපුණතා අංශය: සන්නිවේදනය)<br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Establishing effective communication best practices to achieve departmental goals, objectives and champion transparent <br>communication in digital government (ඩිජිටල් රජය තුළ දෙපාර්තමේන්තු ඉලක්ක, අරමුණු සහ පාරදෘශ්‍ය සන්නිවේදනය ජය ගැනීම සඳහා ඵලදායී සන්නිවේදන හොඳම භාවිතයන් ස්ථාපිත කිරීම)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">1)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Identify the Incorrect statement about promoting awareness of digital transformation initiatives of your organization? (ඔබේ සංවිධානයේ ඩිජිටල් සංවර්තන (Transformation) මුලපිරීම් පිළිබඳ දැනුවත්භාවය ප්‍රවර්ධනය කිරීම පිළිබඳ වැරදි ප්‍රකාශය හඳුනා ගන්න?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt1" id="mgt1_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt1_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Identifying stakeholders that need to be communicated (සන්නිවේදනය කළ යුතු පාර්ශවකරුවන් හඳුනා ගැනීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt1" id="mgt1_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt1_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Select a method of communication (සන්නිවේදන ක්‍රමයක් තේරීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt1" id="mgt1_3" value="7">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt1_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Organization structure (සංවිධාන ව්යුහය)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt1" id="mgt1_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt1_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Finalize a detailed communication plan (සවිස්තරාත්මක සන්නිවේදන සැලැස්මක් සකස්කර අවසන් කිරීම)</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">2)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which one is not a digital communication tool that can be used to escalate impediments to the management? (කළමනාකරණයට ඇති බාධාවන් උත්සන්න කිරීමට භාවිතා කළ හැකි ඩිජිටල් සන්නිවේදන මෙවලමක් නොවන්නේ කුමක්ද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt2" id="mgt2_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt2_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) WhatsApp</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt2" id="mgt2_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt2_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Google Form</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt2" id="mgt2_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Printed document</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt2" id="mgt2_4" value="7">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt2_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) E-mail</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">3)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Mark the incorrect answer? (වැරදි පිළිතුර ලකුණු කරන්න)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt3" id="mgt3_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt3_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Whatsapp is used to take video and voice calls, send text messages (Whatsapp - වීඩියෝ සහ හඬ ඇමතුම් ගැනීමට, කෙටි පණිවිඩ යැවීමට භාවිතා කරයි)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt3" id="mgt3_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt3_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Outlook sends and receives email messages (Outlook - ඊමේල් පණිවිඩ යැවීම සහ ලැබීමට)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt3" id="mgt3_3" value="7">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt3_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Zoom send and receive email messages (Zoom - ඊමේල් පණිවිඩ යැවීම සහ ලැබීමට)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt3" id="mgt3_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt3_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Teams can be used to connect team members (Teams - කණ්ඩායම් සාමාජිකයින් සම්බන්ධ කිරීමට)</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">4)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is not a good practice when getting feedback from others? (අන් අයගෙන් ප්‍රතිපෝෂණ ලබා ගැනීමේදී හොඳ භාවිතයක් නොවන්නේ කුමක්ද?)</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt4" id="mgt4_1" value="7">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt4_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Ask for feedback only during working hours (වැඩ කරන වේලාවන්හිදී පමණක් ප්‍රතිපෝෂණ ඉල්ලා සිටීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt4" id="mgt4_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt4_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Ask for feedback in real-time (තත්‍ය කාලීනව ප්‍රතිපෝෂණ ඉල්ලා සිටීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt4" id="mgt4_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt4_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Ask for feedback by giving an example (උදාහරණයක් ලබා දීමෙන් ප්‍රතිපෝෂණ ඉල්ලා සිටීම)</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt4" id="mgt4_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt4_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Ask for feedback from colleagues (සගයන්ගෙන් ප්‍රතිපෝෂණ ඉල්ලා සිටීම)</h5></label>
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
