
@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="{{route('deepEmergingTechnology')}}">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Technology & Data</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Emerging Technology and Applications <br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Emerging technologies are technologies whose development, practical applications, or both are still largely unrealized, such that they are figuratively emerging into prominence from a background of nonexistence or obscurity. (e.g Mobile solution, drone technologies, etc.)<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">1)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">To what extent does your organization adopt open-source technologies and follow the standards?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td1" id="td1_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td1_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) No use of open source and standards in digital projects</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td1" id="td1_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td1_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Basic level of open source are been used and initial documentations are available</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td1" id="td1_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td1_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Use open source for Commercial Off-The-Shelf (COTS) solutions for new digital applications. Availability of standards, including software development guidelines </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td1" id="td1_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td1_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Open source is considered as the first option considered for digital applications. Standards on all domains (APIs, Cloud ready, software environments) are documented</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td1" id="td1_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td1_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Adoption of open source, standards and contribution to related communities is part of the IT and network masterplan, is fully known by all</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">2)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How is your R&D team;s standardisation to improve the business process?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td2" id="td2_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td2_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) No dedicated team in the organization for experimentation of new ways and means of using technology to improve business processes</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td2" id="td2_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td2_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) There are few champions who are trying out innovative ways of using technology to improve the current business process</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td2" id="td2_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Organization is having a defined strategy and standardisation to improve the business processes</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td2" id="td2_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td2_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To stay competitive in the digital landscape</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td2" id="td2_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td2_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) 
                            Organization have a well defined R&D team and proper sustainability approach to take the corrective actions based on the M&E data to improve the business processes</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">3)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> How is the Emerging technology adopted to the organization?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td3" id="td3_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td3_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)No Emerging technology been adopted to the organization</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td3" id="td3_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td3_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Few emerging technologies are adopted or being considered</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td3" id="td3_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td3_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Organization adopted emerging technology and follow the proper documentation and standardisation</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td3" id="td3_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td3_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Organization adopted emerging technology and follow the proper documentation and standardisation and having proper data collection mechanism for analysis</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td3" id="td3_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td3_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Organization adopted emerging technology, follows the proper documentation, standardisation and having proper data collection mechanism for analysis and availability of proper sustainability approach to take the corrective action</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">4)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is the mechanism of digital applications hosted in cloud environment?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td4" id="td4_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td4_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) No infrastructure or On-premises cloud environment</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td4" id="td4_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td4_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Availability of basic on-premises infrastructure </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td4" id="td4_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td4_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Have most of the systems running on on-premises infrastructure. Organizations has shown the commitment to use the cloud and making effort to move to cloud </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td4" id="td4_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td4_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) The systems are partially on LGC/ Cloud environment and on premise infrastructure. Organization has not set assigned funds for related expenses</h5></label>

                </div>

            </div>


            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td4" id="td4_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td4_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Solutions are exclusively on LGC or hosted on premise built data centers. (Addition to that organization has set assigned funds for related expenses)</h5></label>

                </div>

            </div>

            
            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">5)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What sustainable approach the organization is used to build a mobile application?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td5" id="td5_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td5_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) No proper mobile application has been developed for the digital projects</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td5" id="td5_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td5_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Basic mobile applications are in placed and follows the basic standards</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td5" id="td5_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td5_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Applications are available and followed the proper standard to implement the digital project. Further organization has been used the technology standards introduced by ICTA  </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td5" id="td5_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td5_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d)Applications are available and followed the proper standard to implement the 
                        digital project. Further organization has been used the technology standards introduced by ICTA and having proper monitoring mechanism to identify the
                        application improvements </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td5" id="td5_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td5_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e)
                        Applications are available and followed the proper standard to implement the digital project. 
                        Further organization has been using the technology standards introduced by ICTA and having proper 
                        monitoring mechanism to identify the application improvements. Furhter, organization is using most 
                        contemporary framework and it keeping up-to-date. </h5></label>

                </div>

            </div>

            
            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">6)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What type of mechanisms are following by the organization to build AI solutions?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td6" id="td6_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td6_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) There are no AI solution being implemented at organization</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td6" id="td6_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td6_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) There is high-level approach to implement the AI solution/s in the organization</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td6" id="td6_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td6_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Proper documentations are in placed to implement the AI solution and they already initiated some activities </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td6" id="td6_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td6_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) AI solutions are established in the organization and having mechanism to collect data for the future improvements</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td6" id="td6_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td6_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) 
                        Well established AI solutions are available in the organization and having proper mechanism to collect data and take a corrective action/s. and also having well defined sustainable approach </h5></label>

                </div>
                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            </div>
</div>
            <div class="row" style="margin-top:2%;margin-bottom:2%">
                <div class="col-12" style="text-align:right">
                    <a class="btn btn-primary" href="{{ route('deepTechnology') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
                    <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Submit</h4></button>
                </div>
            </div>
</form>
@endsection

            