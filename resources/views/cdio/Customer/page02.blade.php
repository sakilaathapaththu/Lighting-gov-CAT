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

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Citizen Engagement<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Citizen engagement is the means by which a Gov Institute creates a relationship with its Citizen base to foster brand loyalty and awareness. This can be accomplished via marketing campaigns, new content created for and posted to websites, and outreach via social media and mobile and wearable devices, among other methods.<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">2)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How does virtual CRM that enable 360 degrees Citizen view?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c2" id="c2_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c2_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Legacy CRM capabilities that doesn’t provide a comprehensive Citizen view.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c2" id="c2_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c2_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Legacy CRM. Roadmap being developed for part or full virtualization of the CRM capabilities</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c2" id="c2_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Part legacy and part cloud CRM non integrated capabilities enable a fragmented 360 degree view. Citizen view doesn’t help in decision making as there are many invisible grey zones</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c2" id="c2_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c2_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Centralized CRM that captures a 360 degree view of Citizen experience. Basic predictive capabilities to enable extended view into Citizen behaviour and profile.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c2" id="c2_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c2_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Centralized, virtualized CRM that enables a 360 degree view of Citizen behaviour, experience, expectations, products, services, usage etc. Predictive capabilities, Citizen Analytics Record to enable visibility into citizens next best actions Cloud integrated CRM</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">3)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How effectively are all your digital mediums leveraged for Citizen interaction?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c3" id="c3_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c3_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) 
                        Citizen interactions are a mix of offline ( letters, documents) and traditional mediums (email, SMS and call centre voice calls)</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c3" id="c3_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c3_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Citizen interactions are mostly through traditional mediums of email, SMS and call centre - voice calls</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c3" id="c3_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c3_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Citizen interactions are pushed towards digital means to enable more of digital interaction. Interactions are a mix of traditional (email, SMS, call centre) and digital (mobile app, website etc.)</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c3" id="c3_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c3_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Citizen interaction through few most used digital channels (website, mobile app etc.). Customers are required to initiate interaction through other digital means (chat bot etc.)</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c18" id="c3_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c18_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) 
                            Digital interaction through all available digital mediums. Dynamic and omni-channel integration at the backend enables automatic and real time interaction threads through other digital means as per Citizen behaviour, expectation (for e.g. if Citizen is using mobile app for a transaction and if it gets stuck because of some reason, a chat bot automatically gets active on the mobile and takes up the transaction from where it was left)</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">4)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> How intelligent is your social media support capability?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c4" id="c4_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c4_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)No social media support. Un-managed social presence</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c4" id="c4_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c4_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) No social media manager. Few script based automation for critical workflows. Reactive response to Citizen issues. Delayed responses</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c4" id="c4_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c4_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Partially automated social media management solution using RPA and desktop automation capabilities. Excel based models for Citizen behaviour and social media analysis</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c4" id="c4_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c4_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) AI/RPA driven social media manager/platform with automated scheduling, content curation activities. Text mining, analytics driven Citizen and platform management. Automated workflows for content review, publish and Citizen support.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c4" id="c4_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c4_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Cognitive intelligence driven social media management solution for social media support. Real time dynamic scheduling, content curation, monitoring and team management. Sentiment mining, Predictive analytics and machine learning capabilities to pre-empt issues, usages and future support needs</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">5)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> How intelligent is your social media support capability?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c5" id="c5_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c5_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Traditional contact centre ops with manual activities. No automation.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c5" id="c5_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c5_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Basic/ traditional contact centre ops. Few basic automations through scripts, very limited/ fragmented RPA application </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c5" id="c5_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c5_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c)Partially automated contact centre workflows. Cross channel Citizen engagement. Partial usage of RPA capabilities.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c5" id="c5_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c5_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) T100% automated contact centre ops, Omni-channel engagement for some/most of the digital channels, automated workflows, RPA lead automations. Cloud platform enabled</h5></label>

                </div>

            </div>


            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c5" id="c5_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c5_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Omni-channel engagement, Augmented and Virtual Reality lead local support, dynamic case management, Intelligent automation (AI, BPM lead processes), Low code cloud platform</h5></label>

                </div>

            </div>

            
            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">6)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How intelligent is your contact centre?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c6" id="c6_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c6_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) 
                        Traditional contact centre ops with manual activities. No automation.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c6" id="c6_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c6_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) 
                        Basic/ traditional contact centre ops. Few basic automations through scripts, very limited/ fragmented RPA application</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c6" id="c6_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c6_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Partially automated contact centre workflows. Cross channel Citizen engagement. Partial usage of RPA capabilities. </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c6" id="c6_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c6_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d)100% automated contact centre ops, Omni-channel engagement for some/most of the digital channels, automated workflows, RPA lead automations. Cloud platform enabled</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c6" id="c6_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c6_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e)
                        Omni-channel engagement, Augmented and Virtual Reality lead local support, dynamic case management, Intelligent automation (AI, BPM lead processes), Low code cloud platform</h5></label>

                </div>

            </div>

            
            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">7)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Do you have intelligent digital Service Centres / stores?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c7" id="c7_6" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c7_6" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Traditional brick and mortar store. Manual services same as any other traditional service centre</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c7" id="c7_6" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c7_6" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Traditional brick and mortar store with well defined queues, workflows for Citizen engagement. Store agent lead Citizen interactions</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c7" id="c7_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c7_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Some amount of personalized experience through targeted information. Few selected digital channels are integrated for cross channel experience. Tablets and kiosks for Citizen transaction</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c7" id="c7_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c7_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) AI solutions are established in the organization and having mechanism to collect data for the future improvements</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c7" id="c7_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c7_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) 
                        Online experience in-store. Motion sensing virtual assistants. Panoramic projections. Mobile support - loyalty data lead real time personalized communication and targeted information, Gamification. Touch screen displays/interactive interfaces for Citizen engagement. Robots for Citizen engagement</h5></label>

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

            