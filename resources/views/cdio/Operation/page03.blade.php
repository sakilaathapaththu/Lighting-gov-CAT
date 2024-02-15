@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Operation</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Real-time insights and analytics<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Real time analytics refers to the process of preparing and measuring data as soon as it enters the database<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">7)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">HWhat is the mechanism of monitoring the efficiency of the portal?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o7" id="o7_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o7_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) There is no self-service BI. Some reports exist on MIS portals. But for most requirements users have to individually reach out to the IT/Data teams.
                    </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o7" id="o7_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o7_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Basic level of self -service BI os available but not being used effectively because staff is not trained</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o7" id="o7_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o7_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) There is a good amount of self-service BI where users have access to BI portals. Most of the BI dashboards have been developed by carrying out a requirement analysis of the users. Also, the users are able to extract information in raw form using the portals.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o7" id="o7_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o7_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Monthly, quarterly and yearly progress reports are generated and monitor the efficiency of the portal</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o7" id="o7_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o7_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Digital interface is connected with other processes and systems of the organization to optimise the efficiency. Further alignments are needed to comply with other systems</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">8)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How often does the DB is being updated and what is the mechanism of it?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o8" id="o8_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o8_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) 
                        Databases are updated ad hoc manner and checks and balances are not in place to monitor the completeness of the process.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o8" id="o8_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o8_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) 
                        Databases are updated monthly and manual monitoring to check the completeness of the process</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o8" id="o8_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o8_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Databases are updated daily, and checks and balances are in place to monitor the completeness of the process.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o8" id="o8_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o8_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) On-time progress reports are being generated to monitor and evaluating the process</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o8" id="o8_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o8_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) 
                            Databases are updated in real time and checks and balances are in place to monitor the completeness of the process. IT team is provided real time insights on the process and alerts are provided to act if any issues arise.</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">9)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is the process of generating customer reports?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o9" id="o9_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o9_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) 
                        There is no process in place to request for custom reports. Users manage new report generation vis their own ways using their respective organisational connects.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o9" id="o9_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o9_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) There is a basic process to request customs report through an email</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o9" id="o9_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o9_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) There is a process to request for customer reports and business users have been made aware of this process.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o9" id="o9_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o9_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Process follows the progress reports generation to monitor and evaluate</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o9" id="o9_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o9_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) There is a process to request for customer reports and business users have been made aware of this process. This process is further optimised by carrying out yearly process reviews.</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">10)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is the strategy of using real time processed data?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o10" id="o10_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o10_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Data is hardly used for operational decision making due to data quality concerns. Even when data is used, there is a lot of back-and-forth communication between decision makers and IT teams. Data integrity is a significant concern.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o10" id="o10_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o10_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) There is a basic process to get data validated manually. However, data is not updating regularly but every quarter or beyond</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o10" id="o10_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o10_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c)Decision makers use data for decision making without having too many concerns about data quality or data processing methods. Technology landscape and data governance facilitate data integrity amongst users.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o10" id="o10_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o10_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Data is updated frequently and a proper system is in place to monitor the validity and reliability</h5></label>

                </div>

            </div>


            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="o10" id="o10_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="o10_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Decision makers use data for decision making without any data integrity concerns. Proactive measures are being taken to optimise data processing and continuously improve data quality. Monitoring mechanisms have been put in place to improve the data quality and regular checks are carried out to ensure data processing takes place smooth.</h5></label>

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

            
           