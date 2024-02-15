

@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="{{route('deepDeliveryGovernance')}}">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Technology & Data</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Delivery Governance<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br> Delivery governance is a knowledge base of any service delivery organization's Operational processes and production support procedures<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">12)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How is the team dedication for PM and Agile methodologies?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td12" id="td12_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td12_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) No dedicated team and not practicing agile methodology. Depend on single person.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td12" id="td12_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td12_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Small group of team available and practicing project management concept. However, organization is not following proper standard and methodology.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td12" id="td12_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td12_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Dedicate team available for the organization and following project management and agile methodology.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td12" id="td12_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td12_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Availability of dedicated team and well defined mechanism. Organization is collecting data and following proper M&E mechanism.Further dedicated team is following agile and devops methodology for their work.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td12" id="td12_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td12_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Well defined dedicated team established and they are taking corrective action based on the analysis data. Further organization is having proper sustainability approach and following best practices. Organization is not depend on single person or team.</h5></label>

                </div>

            </div>


            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">13)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the organization's current implementation of the Bi-modal IT operating model ?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td13" id="td13_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td13_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) There is no structured approach to the Bi-modal IT model, and it's not aligned with digital capability goals.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td13" id="td13_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td13_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Initiated the process of converting to the Bi-Modal IT modal, but it's not fully incorporated into the Bi-modal IT model.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td13" id="td13_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td13_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) A Dedicate team available for the organization and following project management and agile methodology</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td13" id="td13_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td13_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) The Bi-modal IT model is implemented and monitored, with alignment to digital capability goals.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td13" id="td13_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td13_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) The Bi-modal IT model is fully optimized, with continuous innovation and alignment to evolving digital capability requirements.</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">14)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the process of managing the availability,Usability Integrity and the security of the data?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td14" id="td14_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td14_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Data are not classified. Does not conduct backups regulary. Risk for data loss, hacks, and major disruptions. Lack actional plans for disaster recovery and data restoration.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td14" id="td14_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td14_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Most of the risk already identified and align with data protection act. However there is no proper privacy mechanism. No proper data authorization levels defined.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td14" id="td14_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td14_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) All data classified and follows best practices when it comes to governance and access. All solutions aligned with the data protection regulations.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td14" id="td14_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td14_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Data based on relevance and follow best practices when it comes to governance and security.Having proper document standard and following the data protection act. All data secured and having proper control mechanism.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td14" id="td14_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td14_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) All solutions are aligned with data protection act and minimum of user involvement for accessing data. Logs are enabled and having proper monitoring and sustainability approach. All data are fully secured.</h5></label>

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