@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpIctInWorkPlace') }}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
    <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (Operational Staff)</h2>
    </div>
    <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
        <div class="row" style="background: #E52F72;height:5%;text-align:center;border-radius:10px">
            <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: ICT in Workplace<br><br></h5>
        </div>
        <div class="row" style="text-align:center">
            <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Competency Area Description: Productively perform tasks in the workplace by using ICT skills and knowledge in a digital <br>government setting.&nbsp; (නිපුණතා අංශයේ විස්තරය: ඩිජිටල් රාජ්‍ය පසුබිමක් තුළ තොරතුරු හා සන්නිවේදන තාක්ෂණ කුසලතා සහ දැනුම භාවිතා කරමින් රැකියා ස්ථානයේ කාර්ය සාධනය ඇති කිරීම.<br><br></h5>
        </div>
    </div>
    <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">1)</h5>
            </div>
            <div class="col-11" style="margin-left:-4%">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;">What are the expected benefits of using ICT in public service delivery(Mark as True/ False)?<br>රාජ්‍ය සේවා සැපයීමේදී තොරතුරු හා සන්නිවේදන තාක්ෂණ භාවිතා කිරීමෙන් අපේක්ෂා කරන ප්‍රතිලාභ මොනවාද?</h5>
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
                            <td style="color: rgb(0,0,0);"><h5 id="h4" style="text-align:left">Can reach a larger audience in a short period.<br>(කෙටි කාලයක් තුළ විශාල ප්‍රේක්ෂක පිරිසක් වෙත ළඟා විය හැක.)</h5></td>
                            <td style="text-align: center;"><input type="radio" name="ict1_1" style="width:100%;height100%" value="2"> </td>
                            <td style="text-align: center;"><input type="radio" name="ict1_1" style="width:100%;height100%" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">b)</h5></td>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;"><h5 id="h4">Reduce the burden of manual documentation and finding manual files <br>(අතින් සිදුකරන ලියකියවිලිවල සහ එම ලිපි ගොනු සොයා ගැනීමේ බර(ගැටලු) අඩු කිරීම)</h5></td>
                            <td style="text-align: center;"><input type="radio" name="ict1_2" style="width:100%;height100%" value="2"></td>
                            <td style="text-align: center;"><input type="radio" name="ict1_2" style="width:100%;height100%" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">c)</h5></td>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;"><h5 id="h4">It reduces efficiency <br>(එය කාර්යක්ෂමතාව අඩු කරයි)</h5> </td>
                            <td style="text-align: center;"><input type="radio" name="ict1_3" style="width:100%;height100%" value="0"></td>
                            <td style="text-align: center;"><input type="radio" name="ict1_3" style="width:100%;height100%" value="2"></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">2)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Select the answer with emerging technologies in 2022? <br>(2022 දී නැගී එන තාක්ෂණයන් මොනවද පිළිතුර තෝරන්න?)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict2" id="ict2_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict2_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Edge Computing, Machine Learning, MS-DOS</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict2" id="ict2_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict2_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Blockchain, Artificial Intelligence, Robotics</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict2" id="ict2_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) IoT, Zoom, Facebook</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict2" id="ict2_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict2_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">3)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Mark the following statements as True /False<br>(පහත ප්‍රකාශයන් සත්‍ය / අසත්‍ය ලෙස සලකුණු කරන්න)</h5>
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
                            <td style="color: rgb(0,0,0);"><h5 id="h4" style="text-align:left">It is effective when government departments work on individual requirements than having an ICT plan. <br>(රජයේ දෙපාර්තමේන්තු තොරතුරු හා සන්නිවේදන තාක්ෂණ සැලැස්මක් තිබීමට වඩා පුද්ගල අවශ්‍යතා මත වැඩ කරන විට එය ඵලදායී වේ)</h5></td>
                            <td style="text-align: center;"><input type="radio" name="ict3_1" style="width:100%;height100%" value="2"> </td>
                            <td style="text-align: center;"><input type="radio" name="ict3_1" style="width:100%;height100%" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">b)</h5></td>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;"><h5 id="h4">Government departments can end up with inflexible and costly ICT solutions if it operates without a proper ICT plan <br>(රජයේ දෙපාර්තමේන්තු නිසි තොරතුරු හා සන්නිවේදන තාක්ෂණ සැලැස්මක් නොමැතිව ක්‍රියාත්මක වුවහොත් නම්‍යශීලී සහ මිල අධික තොරතුරු හා සන්නිවේදන තාක්ෂණ විසඳුම් සමඟ අවසන් විය හැක)</h5></td>
                            <td style="text-align: center;"><input type="radio" name="ict3_2" style="width:100%;height100%" value="0"></td>
                            <td style="text-align: center;"><input type="radio" name="ict3_2" style="width:100%;height100%" value="2"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">c)</h5></td>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;"><h5 id="h4">Effective use of an ICT plan can improve the efficiency of a government organization (ICT සැලැස්මක් ඵලදායී ලෙස භාවිතා කිරීමෙන් රාජ්ය ආයතනයක කාර්යක්ෂමතාව වැඩි දියුණු කළ හැකිය)</h5> </td>
                            <td style="text-align: center;"><input type="radio" name="ict3_3" style="width:100%;height100%" value="0"></td>
                            <td style="text-align: center;"><input type="radio" name="ict3_3" style="width:100%;height100%" value="2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">4)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Mark the points which are NOT a direct benefit of digital government transformation? <br>(ඩිජිටල් රාජ්‍ය පරිවර්තනයේ සෘජු ප්‍රතිලාභයක් නොවන කරුණු සලකුණු කරන්න.)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict4" id="ict4_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict4_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Stimulating economic growth (ආර්ථික වර්ධනය උත්තේජනය කිරීම)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict4" id="ict4_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict4_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Creating a common ICT infrastructure for everyone (සැමට පොදු ICT යටිතල පහසුකම් නිර්මාණය කිරීම)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict4" id="ict4_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict4_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Enable and deliver change (සබල කිරීම සහ වෙනසක් ලබා දීම</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict4" id="ict4_4" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict4_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) None of the above (ඉහත කිසිවක් නොවේ)</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">5)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">
                    Identify the services that can be purely internet-based?
                </h5>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict5" id="ict5_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict5_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">a) Tax compliance system (බදු අනුකූලතා පද්ධතිය)</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict5" id="ict5_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict5_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">b) Land management systems</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict5" id="ict5_3" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict5_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">c) Education and training</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict5" id="ict5_4" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict5_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                    <h5 id="h4">d) All of the above</h5>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">6)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Mark the incorrect answer ?</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict6" id="ict6_1" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict6_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">Google calendar is used saving documents (Google calendar - ලියකියවිලි&nbsp;සුරක්ෂිත කිරීම සදහා භාවිතා කරන ලදී)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict6" id="ict6_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict6_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">Drop Box is used for sharing documents (Drop Box- ලේඛන හුවමාරු කර ගැනීම සඳහා භාවිතා වේ)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict6" id="ict6_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict6_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">WhatsApp is used for networking (WhatsApp - ජාලකරණය සඳහා භාවිතා වේ)</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict6" id="ict6_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict6_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">OneDrive is used for document saving (OneDrive - ලියකියවිලි&nbsp;සුරක්ෂිත කිරීම සදහා භාවිතා&nbsp;වේ)</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">7)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why it is important to have an Incident Management System? (සිදුවීම් කළමනාකරණ පද්ධතියක් තිබීම වැදගත් වන්නේ ඇයි?)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict7" id="ict7_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict7_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">Avoid delays (ප්‍රමාදයන් වළක්වා ගැනීමට)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict7" id="ict7_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict7_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">Establish a team to handle the incidents (සිදුවීම් හැසිරවීමට කණ්ඩායමක් පිහිටුවීමට)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict7" id="ict7_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict7_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">Report incidents (සිදුවීම් වාර්තා කිරීමට)</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict7" id="ict7_4" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict7_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">All of the above (ඉහත සියල්ල)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">8)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which one is not a benefit of Digital Government Services? (ඩිජිටල් රාජ්‍ය සේවාවන්හි ප්‍රතිලාභයක් නොවන්නේ කුමක්ද?)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict8" id="ict8_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict8_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">Better online user convenience for citizens (පුරවැසියන් සඳහා වඩා හොඳ සබැඳි පරිශීලක පහසුව)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict8" id="ict8_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict8_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">Increased public participation (මහජන සහභාගීත්වය වැඩි වීම)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict8" id="ict8_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict8_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">Improved internal efficiency and productivity (අභ්‍යන්තර කාර්යක්ෂමතාව සහ ඵලදායිතාව වැඩි දියුණු කිරීම)</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict8" id="ict8_4" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict8_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">Less innovation (අඩු නවෝත්පාදනය)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">9)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How you can maintain your computer systems and software consistently? (ඔබේ පරිගණක පද්ධති සහ මෘදුකාංග අඛණ්ඩව පවත්වාගෙන යා හැක්කේ කෙසේද?)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict9" id="ict9_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict9_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Updating Software appropriately (සුදුසු පරිදි මෘදුකාංග යාවත්කාලීන කිරීම)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict9" id="ict9_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict9_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Auditing the software requirements and configurations of computers from time to time (පරිගණකවල මෘදුකාංග වින්‍යාසයන් සහ වින්‍යාසයන් වරින් වර විගණනය කිරීම)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict9" id="ict9_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict9_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Upgrading the software and hardware configuration at least once a year (අවම වශයෙන් වසරකට වරක්වත් මෘදුකාංග සහ දෘඪාංග වින්‍යාසය උත්ශ්‍රේණි(upgrade) කිරීම)</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%;margin-bottom:2%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict9" id="ict9_4" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict9_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above (ඉහත සියල්ලම)</h5></label>
            </div>
        </div>
        <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
    </div>
    <div class="row" style="margin-top:2%;margin-bottom:2%">
        <div class="col-12" style="text-align:right">
            <a class="btn btn-primary" href="{{ route('operationallayer') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
            <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
        </div>
    </div>
</div>
</form>

@endsection
