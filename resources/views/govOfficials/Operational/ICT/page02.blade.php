@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpInformationManagement') }}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
    <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (Operational Staff)</h2>
    </div>
    <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
        <div class="row" style="background: #E52F72;height:5%;text-align:center;border-radius:10px">
            <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Information Management (නිපුණතා අංශය: තොරතුරු කළමනාකරණය)<br><br></h5>
        </div>
        <div class="row" style="text-align:center">
            <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Competency Area Description: Ensure data and information are secure and adhere to data protection policies and laws in Digital <br>Government service delivery. (නිපුණතා අංශයේ විස්තරය:  ඩිජිටල් රාජ්‍ය සේවා බෙදා හැරීමේදී දත්ත සහ තොරතුරු සුරක්ෂිත බව සහ, දත්ත ආරක්ෂණ ප්‍රතිපත්ති සහ නීතිවලට අනුකූල බව සහතික කිරීම.)<br><br></h5>
        </div>
    </div>
    <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
        <div class="row">
            <div class="col-1" style="margin-top:2%;">
                <h5 id="h4" style="color: #1f2471;">10)</h5>
            </div>
            <div class="col-11" style="margin-left:-2%">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;">  What is the importance of having different levels of system access rights? (පද්ධති ප්‍රවේශ අයිතිවාසිකම්වල විවිධ මට්ටම් තිබීමේ වැදගත්කම කුමක්ද?)</h5>
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
                            <td style="color: rgb(0,0,0);"><h5 id="h4" style="text-align:left">Because everybody should have equal access to data (සෑම කෙනෙකුටම දත්ත සඳහා සමාන ප්‍රවේශයක් තිබිය යුතු බැවිනි<br>(කෙටි කාලයක් තුළ විශාල ප්‍රේක්ෂක පිරිසක් වෙත ළඟා විය හැක.)</h5></td>
                            <td style="text-align: center;"><input type="radio" name="ict10_1" style="width:100%;height100%" value="0"> </td>
                            <td style="text-align: center;"><input type="radio" name="ict10_1" style="width:100%;height100%" value="2"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">b)</h5></td>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;"><h5 id="h4">Because it prevents access to sensitive data by unauthorized personnel (එය අනවසර පුද්ගලයින් විසින් කරනු ලබන සංවේදී දත්ත වෙත ප්‍රවේශ වීම වළක්වන බැවිනි)</h5></td>
                            <td style="text-align: center;"><input type="radio" name="ict10_2" style="width:100%;height100%" value="2"></td>
                            <td style="text-align: center;"><input type="radio" name="ict10_2" style="width:100%;height100%" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">c)</h5></td>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;"><h5 id="h4">Because it reduces the risk of data loss (එය දත්ත නැතිවීමේ අවදානම අඩු කරන බැවිනි)</h5> </td>
                            <td style="text-align: center;"><input type="radio" name="ict10_3" style="width:100%;height100%" value="2"></td>
                            <td style="text-align: center;"><input type="radio" name="ict10_3" style="width:100%;height100%" value="0"></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">11)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">To protect the computer system against hackers and different kinds of viruses, one must always keep _________ on in the computer system. (හැකර්වරුන්ගෙන් සහ විවිධ වර්ගයේ වෛරස් වලින් පරිගණක පද්ධතිය ආරක්ෂා කිරීම සඳහා, සෑම විටම පරිගණක පද්ධතියේ _________ තබා ගත යුතුය.)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict11" id="ict11_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict11_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Ms Office</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict11" id="ict11_2" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict11_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">b) Antivirus</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict11" id="ict11_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict11_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">c) VLC player</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict11" id="ict11_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict11_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">d) Script</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">12)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which of the below is not an appropriate ICT tool that can be used to collect information from customers? (පාරිභෝගිකයින්ගෙන් තොරතුරු රැස් කිරීමට භාවිතා කළ හැකි යෝග්‍ය ICT මෙවලමක් නොවේ නම් පහත කවරක් ද?)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict12" id="ict12_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict12_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Emails</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict12" id="ict12_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict12_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">b) Google sheet</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict12" id="ict12_3" value="4">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict12_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">c) Printed document</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict12" id="ict12_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict12_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">d) Computer application or system</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%;">
                <h5 id="h4" style="color: #1f2471;">13)</h5>
            </div>
            <div class="col-11" style="margin-left:-2%">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;">  Mention the most appropriate data storage tools. (වඩාත්ම සුදුසු දත්ත ගබඩා මෙවලම් සඳහන් කරන්න.)</h5>
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
                            <td style="color: rgb(0,0,0);"><h5 id="h4" style="text-align:left">Hard disk</h5></td>
                            <td style="text-align: center;"><input type="radio" name="ict13_1" style="width:100%;height100%" value="2"> </td>
                            <td style="text-align: center;"><input type="radio" name="ict13_1" style="width:100%;height100%" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">b)</h5></td>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;"><h5 id="h4">Cloud platforms</h5></td>
                            <td style="text-align: center;"><input type="radio" name="ict13_2" style="width:100%;height100%" value="2"></td>
                            <td style="text-align: center;"><input type="radio" name="ict13_2" style="width:100%;height100%" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">c)</h5></td>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;"><h5 id="h4">RAM</h5> </td>
                            <td style="text-align: center;"><input type="radio" name="ict13_3" style="width:100%;height100%" value="0"></td>
                            <td style="text-align: center;"><input type="radio" name="ict13_3" style="width:100%;height100%" value="2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top: 2%;">
                <h5 id="h4" style="color: #1f2471;">14)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471; margin-top: 2%; margin-left: -3%">Why is it important to back up data to a removable storage device?</h5>
            </div>
        </div>

        <div class="row" style="margin-top: 1%">
            <div class="col-1" style="text-align: right">
                <input type="radio" name="ict14" id="ict14_1" value="4">
            </div>
            <div class="col-11" style="text-align: left">
                <label for="ict14_1" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">a) To protect against loss of data in case of fire or theft (ගින්නක් හෝ සොරකම් වලදී දත්ත අහිමි වීමෙන් ආරක්ෂා වීම)</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top: 1%">
            <div class="col-1" style="text-align: right">
                <input type="radio" name="ict14" id="ict14_2" value="0">
            </div>
            <div class="col-11" style="text-align: left">
                <label for="ict14_2" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">b) To prevent access to sensitive data (සංවේදී දත්ත වලට ප්‍රවේශ වීම වැළැක්වීමට)</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top: 1%">
            <div class="col-1" style="text-align: right">
                <input type="radio" name="ict14" id="ict14_3" value="0">
            </div>
            <div class="col-11" style="text-align: left">
                <label for="ict14_3" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">c) To reduce the risk of viruses (වෛරස් අවදානම අවම කිරීම)</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top: 1%">
            <div class="col-1" style="text-align: right">
                <input type="radio" name="ict14" id="ict14_4" value="0">
            </div>
            <div class="col-11" style="text-align: left">
                <label for="ict14_4" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5>
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
