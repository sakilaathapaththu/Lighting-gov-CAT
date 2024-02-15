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

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Citizen Insights & Behaviour<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>A consumer is a person who identifies a need or desire, makes a purchase and then disposes of the product in the consumption process. A typical consumer’s utility is dependent on the consumption of agricultural and industrial goods, services, housing and wealth (Grundey, 2009). No two of them are the same, as everyone is influenced by different internal and external factors which form the consumer behaviour.<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">15)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How do you capture Citizens feedbacks and generate insights?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c15" id="c15_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c15_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Unstructured and irregular feedback capture mechanism. Template driven and manual activities</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c15" id="c15_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c15_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Citizen feedback through limited mediums. Manual interventions to identify insights and actions</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c15" id="c15_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c15_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Regular Citizen feedback capture through digital means (mobile app, kiosks, portals etc.). Manual interventions for generating actionable insights</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c15" id="c15_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c15_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Regular, real time Citizen feedback capture through digital interfaces including Citizen portals, mobile apps etc. Analytics powered solutions for Citizen insight analysis. Automatic usage of Citizen feedbacks for experience capability enhancement</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c15" id="c15_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c15_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e)Intelligent and automatic feedback capture basis Citizen interaction, behaviour etc. over digital mediums. Advanced analytics and AI powered Citizen insight engine. Automatic trigger of events for backend actions and redressal. Self sustained, managed, real time, human independent feedback mechanism</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">16)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How is Citizens experience across end to end journey measured?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c16" id="c16_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c16_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) 
                        No Citizen experience analysis carried out.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c16" id="c16_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c16_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Very high level Citizen experience analysis is available and is limited to few digital channels only. Manual ad-hoc analysis for few non-digital channels</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c16" id="c16_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c16_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Citizen experience and analysis only for limited digital channels basis information availability. Basic analytics capabilities drive experience details for these few touch points only, and hence end to end experience view is not available</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c16" id="c16_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c16_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Advanced Citizen experience and insight analysis covering all available channels. Citizen experience dashboard gives and end to end journey experience view by scoring Citizen satisfaction across touch points. Advanced analytics based algorithms analyse Citizen experience information in near real time.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c18" id="c16_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c16_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) 
                            360 degree Citizen view covering all channel experiences. End to end Citizen journey and touch points depicted with Citizen experience, effort and transactional satisfaction scores at each touch point. Real time visibility into variations in the complete journey against Citizen interactions. AI/ML capabilities analyses experience information from Citizen touch points in real time and projects an end to end experience view</h5></label>

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