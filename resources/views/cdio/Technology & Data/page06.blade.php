

@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="{{route('deepTechnologyArchitecture')}}">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Technology & Data</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Technology Architecture<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Technical Architecture (TA) is a form of IT architecture that is used to design computer systems. It involves the development of a technical blueprint with regard to the arrangement, interaction and interdependence of all elements, so that system-relevant requirements are met<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">23)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is  the mechanism of obtaining services?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td23" id="td23_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td23_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) R&D experimentation, Pilot projects Website, Portal, Custom integrations, Small number of services: Standards, Legacy Integration</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td23" id="td23_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td23_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Multiple integrated applications:Support for heterogeneity and distributed
                        systems, Reliable Messaging, Mediation, Ease of deployment, Database integration, Versioning, Internal Security, Performance
                        management</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td23" id="td23_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td23_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Use open source for Commercial Off-The-Shelf (COTS) solutions for new digital applications. Availability of standards, including software development guidelines </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td23" id="td23_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td23_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Open source is considered as the first option considered for digital applications. Standards on all domains (APIs, Cloud ready, software environments) are documented</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td23" id="td23_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td23_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Adoption of open source, standards and contribution to related communities is part of the IT and network masterplan, is fully known by all</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">24)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How is your R&D team;s standardisation to improve the business process?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td24" id="td24_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td24_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) No dedicated team in the organization for experimentation of new ways and means of using technology to improve business processes</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td24" id="td24_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td24_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) There are few champions who are trying out innovative ways of using technology to improve the current business process</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td24" id="td24_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td24_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Organization is having a defined strategy and standardisation to improve the business processes</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td24" id="td24_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td24_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To stay competitive in the digital landscape</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td24" id="td24_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td24_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) 
                            Organization have a well defined R&D team and proper sustainability approach to take the corrective actions based on the M&E data to improve the business processes</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">25)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is the contribution to open source software and how are they enable to adoption?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td25" id="td25_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td25_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)No Emerging technology been adopted to the organization</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td25" id="td25_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td25_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Few emerging technologies are adopted or being considered</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td25" id="td25_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td25_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Organization adopted emerging technology and follow the proper documentation and standardisation</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td25" id="td25_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td25_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Organization adopted emerging technology and follow the proper documentation and standardisation and having proper data collection mechanism for analysis</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td25" id="td25_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td25_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Organization adopted emerging technology, follows the proper documentation, standardisation and having proper data collection mechanism for analysis and availability of proper sustainability approach to take the corrective action</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">26)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> How  blueprint data are used to increase the delivery capacity?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td26" id="td26_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td26_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) No infrastructure or On-premises cloud environment</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td26" id="td26_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td26_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Availability of basic on-premises infrastructure </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td26" id="td26_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td26_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Have most of the systems running on on-premises infrastructure. Organizations has shown the commitment to use the cloud and making effort to move to cloud </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td26" id="td26_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td26_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) The systems are partially on LGC/ Cloud environment and on premise infrastructure. Organization has not set assigned funds for related expenses</h5></label>

                </div>

            </div>


            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td26" id="td26_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td26_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Solutions are exclusively on LGC or hosted on premise built data centers. (Addition to that organization has set assigned funds for related expenses)</h5></label>

                </div>

            </div>

            
            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">27)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is done to optimize and continuously improve  the architecture process?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td27" id="td27_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td27_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) No proper mobile application has been developed for the digital projects</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td27" id="td27_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td27_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Basic mobile applications are in placed and follows the basic standards</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td27" id="td27_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td27_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Applications are available and followed the proper standard to implement the digital project. Further organization has been used the technology standards introduced by ICTA  </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td27" id="td27_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td27_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d)Applications are available and followed the proper standard to implement the 
                        digital project. Further organization has been used the technology standards introduced by ICTA and having proper monitoring mechanism to identify the
                        application improvements </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td27" id="td27_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td27_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e)
                        Applications are available and followed the proper standard to implement the digital project. 
                        Further organization has been using the technology standards introduced by ICTA and having proper 
                        monitoring mechanism to identify the application improvements. Furhter, organization is using most 
                        contemporary framework and it keeping up-to-date. </h5></label>

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