

@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="{{route('deepSecurity')}}">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Technology & Data</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Security <br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>"The growing cyber threats in the world require public administrations to focus on e-governance
                    security measures. It is important to be aware of the threats posed to e-governance. The coordinating institution is required to organise the development, monitoring and supervision relevant information security rules and measures. Source (Maturity Model, Digital UK)"<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">19)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the process of improving the security of the informations?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td19" id="td19_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td19_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Information Security processes are unorganized, and may be unstructured. Success is likely to depend on individual efforts and is not considered to be repeatable or scalable. This is because processes would not be sufficiently defined and documented to allow them to be replicated</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td19" id="td19_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td19_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Information Security efforts are at a repeatable level where basic project management techniques are established and successes can be repeated. This is due to processes being established, defined, and documented</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td19" id="td19_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td19_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Information Security efforts have greater attention to documentation, standardization, and maintenance support </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td19" id="td19_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td18_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) At this level, an organization monitors and controls its own Information Security processes through data collection and analysis</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td19" id="td19_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td19_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) This is an optimizing level where Information Security processes are constantly being improved through monitoring feedback from existing processes and introducing new processes to better serve the organization’s particular needs</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">20)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How is your R&D team;s standardisation to improve the business process?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td20" id="td20_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td20_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) No security audit been done</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td20" id="td20_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td20_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Internal team or experts have done the high level security audit. Only focus on application level</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td20" id="td20_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td20_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Organization has followed proper security audit and third party has been highlighted security threats</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td20" id="td20_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td20_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Recognized third party organization has been done the security audit and periodically evaluating. All data collecting and take corrective actions for improve the application and server side security</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td20" id="td20_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td20_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Recognized third party organization has been done the security audit and periodically evaluating. Application and deployment servers are incorporated with best practice. Organization is periodically collecting data and analysing and getting corrective action. Internally or align with national strategy, dedicated team are reviewing and updating relevant security patches</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">21)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> How are the data  protected?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td21" id="td21_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td21_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Processes are unorganized and informal. Rather than being proactive, they are reactive only. They cannot be repeated, measured or scaled</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td21" id="td21_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td21_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Although a preliminary structure has been implemented and some aspects have been defined and documented, discipline is lax and only some processes can be repeated</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td21" id="td21_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td21_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) All processes have been standardized, documented and defined. Use recommended firewalls and standard protocols</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td21" id="td21_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td21_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) With measurable processes up and running, the organization can now test, refine, modify and improve procedures. Well established firewalls and standard protocols</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td21" id="td21_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td21_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Processes are now automated and constantly monitored, analyzed and updated for optimization.Followed standard protocols/practices/ secure emails, etc</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">22)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> How can users get self services via the services distribute by the organization?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td22" id="td22_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td22_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) No self-service capabilities are available, and IT or a technology group manages all tasks</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td22" id="td22_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td22_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Organization allows business users to manage external accounts and introduces account claiming</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td22" id="td22_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td22_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Organization allows business users to manage external accounts and introduces account claiming </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td22" id="td22_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td22_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) End users can assist peers, and business application owners manage access to their applications</h5></label>

                </div>

            </div>


            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td22" id="td22_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td22_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Organization becomes more independent, governance is part of delegated administration, and proxy policies are in place</h5></label>

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