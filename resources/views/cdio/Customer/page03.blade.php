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

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Citizen Experience<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Citizen experience is the internal and subjective response Citizens have to any direct or indirect contact with a Gov Institute<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">8)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How will you define you Citizen experience design?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c8" id="c8_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c8_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Unstructured and fragmented channel design. No backend integration between channels
                    </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c8" id="c8_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c8_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Multi-channel design with no integration between channels, process workflows at the backend</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c8" id="c8_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c8_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Multi-channel capabilities. Partial cross channel capabilities. Customers can switch from one digital to another digital channel as per need. Some basic integration between processes/workflows at the backend</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c8" id="c8_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c8_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Cross channel capabilities. Omni-channel experience across digital platforms only. Integration of supply chain, distribution, promotion and communication channels at the backend
                    </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c8" id="c8_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c8_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Omni-channel capability. Seamless and real time experience across digital and non-digital channels. Integration between distribution, promotion and communication channels on the backend. Seamless integration of supply chain with Citizen interfacing processes at the backend</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">9)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How third party (other Gov Institute) data leveraged to build a customer 360 profile?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c9" id="c9_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c9_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Only Respective institute data points for Citizen, products/services available and is limited from integration and enrichment perspective</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c9" id="c9_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c9_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Very few third party data(other Gov Institutes) inputs available, but are not linked to respective institute products/services and hence establishing an identity between data points is not possible. Digital Citizen identity capability does not exist</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c9" id="c9_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c9_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Very few third party (other Gov Institutes) data inputs collected and are specifically aligned to respective institute products/services only. No cross Gov Institutes/vertical experience data inputs available to build a customer 360 profile. Digital Citizen Identity alignment between data points is very limited and mostly fragmented</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c9" id="c9_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c9_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Ecosystem data sources linked with internal data points to build comprehensive customer profiles. Third-party(other Gov Institutes) data inputs is limited to few specific customer attributes/experiences/demographics only. Customer 360 built requires more inputs to give complete picture of customer attributes irrespective of institute experience. Digital identity is established automatically between data points, but success rate is limited</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c18" id="c9_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c18_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) 
                            Ecosystem engagement capabilities in place to leverage third party customer data in real time to develop customer persona and profiles for customer engagement actions. Ability to drive dynamic customer 360 covering customer online, social, financial and other industry relevant data points. Ability to drive highly personalized customer products, services and experience. Digital identity is automatically established through advanced ML programs established</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">10)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> How is experience quality monitored across touchpoints for transactions?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c10" id="c10_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c10_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)Need based quality measurement/ Monitoring. Manual measurement process. Checklist based quality assessment</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c10" id="c10_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c10_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Basic quality monitoring tools across few channels such as contact centre etc. Defined quality scorecards, checklists etc. Manual quality monitoring</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c10" id="c10_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c10_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Partially automated applications/ programs for quality monitoring, scorecard development etc. Quality monitoring covers larger set of touch points</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c10" id="c10_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c10_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Experience quality assurance through automated quality monitoring applications/ tools across all digital mediums/ touch points. Automated quality assurance of Citizen interaction/communication
                    </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c10" id="c10_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c10_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) AI enabled centralized, automated, virtual quality monitoring capabilities across digital mediums to ensure content, communication, information quality. One -click navigation to root cause for any reported quality issue</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">11)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> Have you enabled digital self service capabilities for end users?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c11" id="c11_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c11_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)
                        No digital channels. Not aware of self service options/ capabilities</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c11" id="c11_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c11_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) No self service through available digital means</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c11" id="c11_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c11_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) 
                        Enablement of digital self service through only few channels. Partial digital self service </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c11" id="c11_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c11_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Digital self service enabled through all available channels. There is scope for further addition of self service capabilities across channels</h5></label>

                </div>

            </div>


            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c11" id="c11_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c11_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Self Service enabled through all possible digital/ non-digital means (Including IVR, Kiosks, website, Cyber agent etc.). All that can be self served is self served - Assisted service only for services where human intervention is unavoidable</h5></label>

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

            
            