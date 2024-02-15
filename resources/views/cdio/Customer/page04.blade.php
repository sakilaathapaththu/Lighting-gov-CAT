@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Customer</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Citizen trust & Perception<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Citizen trust & Perception is the essential bond that underpins the relationships Gov Institutes have with the humans in their ecosystem— Citizens, workforce, and partners. It’s nearly impossible to build successful, lasting human experiences and relationships without trust, Data Privacy focuses on the rights of individuals, the purpose of data collection and processing, privacy preferences, and the way institutes govern personal data of data subjects.<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">12)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How does the Citizen problem resolution process automatic and/or self-managed?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c12" id="c12_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c12_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Manual efforts in problem identification, allocation and resolution</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c12" id="c12_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c12_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Scripted/ stencils driven problem resolution for simple issues. Manual problem resolution workflows</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c12" id="c12_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c12_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) RPA and scripted automation lead problem/case classification. Rule based routing to relevant problem owners for resolution</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c12" id="c12_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c12_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) AI/RPA lead problem qualification/ addressing mechanism. Business rule based case development. Problem resolution mostly managed end to end through digital means. Automated Citizen communication/ intimation</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c12" id="c12_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c12_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e)Intelligent problem identification and redressal Dynamic, real time, cognitive intelligence lead solution to segregate automatically addressable problems. Digital workflows triggered dynamically for problem resolution and communication</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">13)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How is Citizens' information captured and stored and are your Divisions and Channels in sync in terms of passing contact information or access it?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c13" id="c13_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c13_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) 
                        Citizens information is captured offline and manually fed into all BSS applications. Same information is captured during each interaction and is stored both offline/online, and information captured at each touch point or channel is executed in silos and is unsynchronized</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c13" id="c13_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c13_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Citizen information captured during each interaction. Some information is still in offline modes, but mostly stored digitally and Only few of the touchpoints/channels are in sync with each other. Contact information collected at one point is passed on or available at other touch points/channels in sync. Largely the entire framework is not in sync</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c13" id="c13_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c13_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Citizen information is captured online during different interactions and then updated automatically into different BSS applications. Citizen information is captured once for some of the digital channels. Captured information is stored digitally; 
                        Wherever possible, the contact touch points/channels are connected and contact information collected is shared across. However, the capability is limited and not all captured information is used across channels</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c13" id="c13_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c13_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Citizen information is captured completely through digital means and is pushed into all backend applications. Information captured once is pushed through the system for further interactions; 
                        Wherever possible, the contact touch points/channels are connected and contact information collected is shared across. All collected information are passed on and used across channels and not collected from Citizen again</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c18" id="c13_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c13_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) 
                            Citizen information's are captured using digital means, from online social profiles, online activities using advanced information extraction methodologies. Information captured once is pushed through digital mediums and is leveraged for all interactions; 
                            Citizen contact information is collected and shared across touchpoints/channel. Moreover, past contact information is used to fast track current interactions and make the interaction more personalized.</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">14)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is your Data Privacy Policy?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c14" id="c14_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c14_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)No formal documentation or guidance available defining on how citizens personal data should be collected, stored, managed, and shared. Citizens data is managed manually</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c14" id="c14_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c14_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Citizen Data Privacy Policy defined in par with the DP act XXX and contain stringent protocols for the management of user data, and established steep fines for individuals/institutes that get data wrong, managed manually</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c14" id="c14_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c14_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Citizen Data Privacy Policy defined in par with the DP act XXX and contain stringent protocols for the management of user data, and established steep fines for individuals/institutes that get data wrong, privacy expectations are clear to staff.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c14" id="c14_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c14_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Data Privacy Policy defined in par with the DP act XXX with Citizens Personal information is considered as important and belonging to the individual. Privacy is integrated into business processes to improve practices, customer relationship management, and reputation.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c14" id="c14_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c14_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) CEveryone in the Institute(leadership to labour force) actively identifies with and aligns to the privacy Policy of the institute in par with the DP act XXX ; transparency and accountability are the norm; new insights are acted upon in unison; and conflicts are resolved positively and effectively. Central to the institute’s culture and approach is everyone taking responsibility and accountability for ensuring personal information is treated appropriately and with respect. A privacy Officer is appointed as a role accountable of the data privacy governance and reporting</h5></label>

                </div>

            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
           
            </div>
            <div class="row" style="margin-top:2%;margin-bottom:2%">
                <div class="col-12" style="text-align:right">
                    <a class="btn btn-primary" href="{{ route('deepTechnology') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
                    <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
                </div>
            </div>
</form>
@endsection

            