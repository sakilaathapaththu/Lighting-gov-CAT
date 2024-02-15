@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpDigitalCitizenship') }}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
    <div class="row" style="text-align:center">
        <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (Operational Staff)</h2>
    </div>
    <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
        <div class="row" style="background: #E52F72;height:5%;text-align:center;border-radius:10px">
            <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Digital Citizenship (නිපුණතා අංශය - ඩිජිටල් පුරවැසිභාවය)<br><br></h5>
        </div>
        <div class="row" style="text-align:center">
            <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Competency Area Description: Use of digital technology and media in safe responsible and ethical ways.  (නිපුණතා අංශයේ විස්තරය:  වගකිවයුතු සහ සදාචාරාත්මක ආකාරයෙන් ආරක්ෂිතව ඩිජිටල් තාක්ෂණය සහ මාධ්‍ය භාවිතය.)<br><br></h5>
        </div>
    </div>
    <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
        <div class="row">
            <div class="col-1" style="margin-top: 2%;">
                <h5 id="h4" style="color: #1f2471;">15)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471; margin-top: 2%; margin-left: -3%;">Which of the following is the best definition of a good digital citizen? (යහපත් ඩිජිටල් පුරවැසියෙකු පිළිබඳ හොඳම නිර්වචනය පහත සඳහන් දේවලින් කුමක්ද?)</h5>
            </div>
        </div>

        <div class="row" style="margin-top: 1%;">
            <div class="col-1" style="text-align: right;">
                <input type="radio" name="ict15" id="ict15_1" value="0">
            </div>
            <div class="col-11" style="text-align: left;">
                <label for="ict15_1" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">a) Someone good at using computers or mobile devices (පරිගණක හෝ ජංගම උපාංග භාවිතා කිරීමට දක්ෂ අයෙක්)</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top: 1%;">
            <div class="col-1" style="text-align: right;">
                <input type="radio" name="ict15" id="ict15_2" value="0">
            </div>
            <div class="col-11" style="text-align: left;">
                <label for="ict15_2" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">b) Someone who limits the amount of time they spend on the internet (අන්තර්ජාලයේ ගත කරන කාලය සීමා කරන කෙනෙක්)</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top: 1%;">
            <div class="col-1" style="text-align: right;">
                <input type="radio" name="ict15" id="ict15_3" value="0">
            </div>
            <div class="col-11" style="text-align: left;">
                <label for="ict15_3" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">c) Someone who participates actively and often in social media (සමාජ මාධ්‍ය තුළ ක්‍රියාකාරීව සහ නිතර නිතර සහභාගී වන අයෙක්)</h5>
                </label>
            </div>
        </div>

        <div class="row" style="margin-top: 1%;">
            <div class="col-1" style="text-align: right;">
                <input type="radio" name="ict15" id="ict15_4" value="4">
            </div>
            <div class="col-11" style="text-align: left;">
                <label for="ict15_4" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">d) Someone who recognizes that there are rights and responsibilities associated with using the internet and other information technology (අන්තර්ජාලය සහ අනෙකුත් තොරතුරු තාක්ෂණය භාවිතා කිරීම හා සම්බන්ධ අයිතිවාසිකම් සහ වගකීම් ඇති බව පිළිගන්නා අයෙක්)</h5>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">16)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-3%">Which of the below is not a good health practice to follow when working with computers in your workplace?</h5>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict16" id="ict16_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict16_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Get up and move around regularly (නැඟිට නිතිපතා එහා මෙහා ගමන් කිරීම)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict16" id="ict16_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict16_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Give your eyes a break from the computer (ඔබේ ඇස්වලට පරිගණකය භාවිතා නොකර මද විවේකයක් ලබා දීම)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict16" id="ict16_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict16_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Keep healthy snacks around your desk (ඔබේ මේසය වටා සෞඛ්‍ය සම්පන්න කෑම වර්ග තබා ගැනීම)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict16" id="ict16_4" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict16_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Work continuously to maintain the same speed of work (කාර්යයේ එකම වේගය පවත්වා ගැනීම සඳහා අඛණ්ඩව වැඩ කිරීම)</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">17)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-3%">Why is it important to have a strong password? (ශක්තිමත් මුරපදයක් තිබීම වැදගත් වන්නේ ඇයි?)</h5>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict17" id="ict17_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict17_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) It will prevent cyber crimes (එය සයිබර් අපරාධ වලක්වනු ඇත)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict17" id="ict17_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict17_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">b) Reduce the risk of hacking (අනවසරයෙන් ඇතුළුවීමේ අවදානම අඩු කිරීම)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict17" id="ict17_3" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict17_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">c) It is not easy to guess (එය අනුමාන කිරීම පහසු නැත)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict17" id="ict17_4" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict17_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">18)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-3%">Which of the below is not a precautionary action to be safe on the internet? (අන්තර්ජාලයේ ආරක්ෂිතව සිටීම සඳහා පහත සඳහන් දේවලින් පූර්වාරක්ෂාව නොවන්නේ කුමක්ද?)</h5>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict18" id="ict18_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict18_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Never click on links that come from unknown sources (නොදන්නා මූලාශ්‍රවලින් එන සබැඳි කිසිවිටෙක ක්ලික් නොකිරීම)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict18" id="ict18_2" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict18_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">b) Careful when receiving emails from unknown senders (නොදන්නා අයගෙන් ඊමේල් ලැබෙන විට ප්‍රවේශම් වීම)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict18" id="ict18_3" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict18_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">c) Install a basic security app on the computer (පරිගණකයේ මූලික ආරක්ෂක යෙදුමක් ස්ථාපනය කිරීම)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict18" id="ict18_4" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict18_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">d) Restart the computer (පරිගණකය නැවත පණ ගැන්වීම)</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">19)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-3%">What is the correct way to respond when you witness a targeted attack on a person you on social media? (සමාජ මාධ්‍ය තුළ ඔබ පුද්ගලයෙකුට ඉලක්ක කරගත් ප්‍රහාරයක් දුටු විට ප්‍රතිචාර දැක්විය යුතු නිවැරදි ක්‍රමය කුමක්ද?)</h5>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict19" id="ict19_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict19_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Sharing it enables that person to see it on the internet (එය බෙදාගැනීමෙන් එම පුද්ගලයාට එය අන්තර්ජාලයේ දැකීමට හැකියාව ලැබේ)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict19" id="ict19_2" value="4">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict19_2" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">b) Reporting the content to avoid it being spread further (එය තවදුරටත් පැතිරීම වැළැක්වීම සඳහා අන්තර්ගතය වාර්තා කිරීම)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict19" id="ict19_3" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict19_3" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">c) Ignore it (එය නොසලකා හැරීම)</h5></label>
            </div>
        </div>

        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict19" id="ict19_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict19_4" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">d) Informing that person over the phone (එම පුද්ගලයාට දුරකථනයෙන් දැනුම් දීම)</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%;">
                <h5 id="h4" style="color: #1f2471;">20)</h5>
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
                            <td style="color: rgb(0,0,0);"><h5 id="h4" style="text-align:left">Clicking on the "remember password" option ("මුරපදය මතක තබා ගන්න " විකල්පය මත ක්ලික් කිරීම)</h5></td>
                            <td style="text-align: center;"><input type="radio" name="ict20_1" style="width:100%;height100%" value="0"> </td>
                            <td style="text-align: center;"><input type="radio" name="ict20_1" style="width:100%;height100%" value="2"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">b)</h5></td>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;"><h5 id="h4">Deleting the internet history and saved passwords after using the device (උපාංගය භාවිතා කිරීමෙන් පසු අන්තර්ජාල ඉතිහාසය සහ සුරකින ලද මුරපද මකා දැමීම)</h5></td>
                            <td style="text-align: center;"><input type="radio" name="ict20_2" style="width:100%;height100%" value="2"></td>
                            <td style="text-align: center;"><input type="radio" name="ict20_2" style="width:100%;height100%" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);"><h5 id="h4">c)</h5></td>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;"><h5 id="h4">Changing the password after using it if you feel unsafe (ඔබට අනාරක්ෂිත බවක් හැඟේ නම් එය භාවිතා කිරීමෙන් පසු මුරපදය වෙනස් කිරීම)</h5> </td>
                            <td style="text-align: center;"><input type="radio" name="ict20_3" style="width:100%;height100%" value="2"></td>
                            <td style="text-align: center;"><input type="radio" name="ict20_3" style="width:100%;height100%" value="0"></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">21)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471; margin-top: 2%; margin-left: -3%">Identify the correct statement? (නිවැරදි ප්‍රකාශය හඳුනාගන්න)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict21" id="ict21_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict21_1" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);"><h5 id="h4">a) All information on the internet is verified and true (අන්තර්ජාලයේ ඇති සියලුම තොරතුරු සත්‍යාපනය කර සත්‍ය වේ)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict21" id="ict21_2" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict21_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Sharing false information on social media is considered an offense (සමාජ මාධ්‍යවල අසත්‍ය තොරතුරු හුවමාරු කිරීම වරදක් ලෙස සැලකේ)</h5></label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict21" id="ict21_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict21_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Publicly shared private information is not a threat (ප්‍රසිද්ධියේ බෙදාගත් පුද්ගලික තොරතුරු තර්ජනයක් නොවේ)</h5></label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict21" id="ict21_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict21_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above (ඉහත සියල්ල)</h5></label>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-top:2%">
                <h5 id="h4" style="color: #1f2471;">22)</h5>
            </div>
            <div class="col-11">
                <h5 id="h4" style="color: #1f2471; margin-top: 2%; margin-left: -4%">_______________deals with the protection of an individual's information, while using the Internet. (_______________ අන්තර්ජාලය භාවිතා කරන අතරතුර, පුද්ගලයෙකුගේ තොරතුරු ආරක්ෂා කිරීම සම්බන්ධයෙන් කටයුතු කරයි.)</h5>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict22" id="ict22_1" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict22_1" style="font-family: Poppins, sans-serif; color: var(--bs-emphasis-color);">
                    <h5 id="h4">a) Digital Literacy (ඩිජිටල් සාක්ෂරතාව)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict22" id="ict22_2" value="5">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict22_2" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">b) Digital privacy (ඩිජිටල් පෞද්ගලිකත්වය)</h5>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict22" id="ict22_3" value="0">
            </div>  
            <div class="col-11" style="text-align:left">
                <label for="ict22_3" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">c) Digital adoption (ඩිජිටල් අනුවර්තනය වීම)</h5>
                </label>
            </div>      
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-1" style="text-align:right">
                <input type="radio" name="ict22" id="ict22_4" value="0">
            </div>
            <div class="col-11" style="text-align:left">
                <label for="ict22_4" style="color: var(--bs-emphasis-color);">
                    <h5 id="h4">d) Digital transformation (ඩිජිටල් සංවර්තනය )</h5>
                </label>
            </div>
        </div>
        <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
        <input class="form-control" type="hidden" id="totOpIctInWorkplace" name="totOpIctInWorkplace" value="{{ $totOpIctInWorPlace }}" readonly>
        <input class="form-control" type="hidden" id="totOpInformationManagement" name="totOpInformationManagement" value="{{ $totOpInformationManagement }}" readonly>
    </div>
    <div class="row" style="margin-top:2%;margin-bottom:2%">
        <div class="col-12" style="text-align:right">
            <a class="btn btn-primary" href="{{ route('operationallayer') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
            <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Submit</h4></button>
        </div>
    </div>
</div>
</form>
@endsection
