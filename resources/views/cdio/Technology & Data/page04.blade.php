

@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="{{route('deepConnectivity')}}">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Technology & Data</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Connectivity / Network<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br> The quality, state, or capability of being connective or connected connectivity of a surface especially : the ability to connect to or communicate with another computer or computer system <br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">15)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is the mechanism of using Infrastructure architecture?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td15" id="td15_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td15_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Availability of Local Area Network & Network readiness to provide new services</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td15" id="td15_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td15_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Network architecture to support scalability , such as having access layer & core network , also Organization has common network facilitate to both Data & VOICE</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td15" id="td15_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td15_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Organization network segmented with ( VLANs) according business functions , required Network access control mechanisms are in placed with Security</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td15" id="td15_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td15_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Network Administrator has full visibility on the network , configuration management can be done remotely</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td15" id="td15_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td15_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Network has no single point of failure & network is built upon SDN principles and along with sustainable national strategy</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">16)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How is the availability of the ICT support staff?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td16" id="td16_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td16_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Organization has ICT support staff ( recruited specifically or onsite engineer from Managed service Provider</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td16" id="td16_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td16_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) More than 50 % ICT operation works carried out by Internal ICT support staff with proper SLA implemented</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td16" id="td16_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td16_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) A dedicated team is actively working, and alignment with digital capability goals is considered in the Bi-modal IT model</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td16" id="td16_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td16_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) ICT support staff maintaining update documents such as , Network Architecture diagrams , IP Plan , ICT inventory , and use of issue management tools ( end users are provided with dedicated helpline to reach internal ICT support staff)</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt18" id="td16_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt18_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) ICT staff following & complying to Industry standards such as ITIL</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">17)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the availability of connection and how is the reliability of it?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td17" id="td17_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td17_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Organization has facilitated Internet access to more than 50 % of users</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td17" id="td17_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td17_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Type of connectivity whether is it commodity Internet connection or business connectivity</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td17" id="td17_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td17_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Organizations has two or more connections from different ISPs</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td17" id="td17_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td17_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Organizations has implemented Load balancing to accommodate multiple connections with seamless failover , WAN optimization techniques</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td17" id="td17_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td17_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Organization has stringent SLA with ISP with agreed minimum service levels for committed bandwidth , Latency, Jitter</h5></label>

                </div>

            </div>

            
            

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">18)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the data protection mechanism?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td18" id="td18_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td18_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Network has security implemented on different layers , especially on endpoint security availability & some level of Perimeter level security</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td18" id="td18_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td18_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Network Services are placed on different segments ( with Internal network segments) while publicly available services are on DMZ</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td18" id="td18_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td18_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Availability of next generation level FW for border level protection & NAC to facilitate BYOD , users are being authenticated , authorized with accounting</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td18" id="td18_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td18_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Organization conduct third party security assessments at least once a years & recommendation being followed</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td18" id="td18_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td18_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Organization has stringent SLA with ISP with agreed minimum service levels for committed bandwidth , Latency, Jitter</h5></label>

                </div>

            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            
            </div>
            <div class="row" style="margin-top:2%;margin-bottom:2%">
                <div class="col-12" style="text-align:right">
                    <a class="btn btn-primary" href="{{ route('deepTechnology') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
                    <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Submit</h4></button>
                </div>
            </div>
</form>
@endsection