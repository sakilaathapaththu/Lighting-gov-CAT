@extends('layouts.govofficialusernavbar')

@section('content')

<form method="POST" action="{{ route('storeTopDecisionMaking') }}">

<form method="POST" action="">

    {{csrf_field()}}
    <section data-aos="fade-down" style="height: 750px;">
        <div style="margin-top: 70px;text-align:center;margin-bottom: 10px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br>Self Assessment -&nbsp;Management (Top &amp; 2nd Tier Management)</span></div>
        <div class="container align-content-center align-self-center" style="width: 1358px;height: 1000px;margin-top: 10px;">
            <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
                <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #027673;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Decision Making<br><br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br><br>Create an enabling environment for effective data-driven decision-making for digital government interventions<br><br><br></span></div>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 1730px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>13) Which of below is a not a best practice in decision making?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col">
                                        <div class="row d-flex flex-column" style="text-align: center;">
                                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                <div class="row" style="margin-bottom: 20px;">

                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="mgt13" id="mgt13_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt13_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Identify and be clear the goal of the decision making</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt13" id="mgt13_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt13_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">b) Gather all relevant information to support the decision making process</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt13" id="mgt13_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt13_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Form a homogenous group to make the decision</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt13" id="mgt13_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt13_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Weigh pros and cons of the decision</label></div>

                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="mgt13" id="mgt13_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt13_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Identify and be clear the goal of the decision making</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt13" id="mgt13_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt13_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Gather all relevant information to support the decision making process</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt13" id="mgt13_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt13_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Form a homogenous group to make the decision</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt13" id="mgt13_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt13_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Weigh pros and cons of the decision</label></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>14) The resistance towards change at an individual level can be due to various reasons: Select the most appropriate.</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col">
                                        <div class="row d-flex flex-column" style="text-align: center;">
                                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                <div class="row" style="margin-bottom: 20px;">

                                                    <div class="col"><input type="radio" name="mgt14" id="mgt14_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt14_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) How satisfied they are with the existing state of affairs.</label></div>


                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="mgt14" id="mgt14_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt14_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) How satisfied they are with the existing state of affairs.</label></div>

                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt14" id="mgt14_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt14_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">b) How much practical or realistic the change is.</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt14" id="mgt14_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt14_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">c) What will be the possible cost change on the individual in terms of potential risks involved, pressure to develop new competencies and disruptions.</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">

                                                    <div class="col"><input type="radio" name="mgt14" id="mgt14_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt14_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>

                                                    <div class="col"><input type="radio" name="mgt14" id="mgt14_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt14_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>

                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="mgt14" id="mgt14_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt14_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) How satisfied they are with the existing state of affairs.</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt14" id="mgt14_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt14_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) How much practical or realistic the change is.</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt14" id="mgt14_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt14_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; c) What will be the possible cost change on the individual in terms of potential risks involved, pressure to develop&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;new competencies and disruptions.</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt14" id="mgt14_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt14_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>15) Which of below is not accurate regarding the decision making process?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col">
                                        <div class="row d-flex flex-column" style="text-align: center;">
                                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                <div class="row" style="margin-bottom: 20px;">

                                                    <div class="col"><input type="radio" name="mgt15" id="mgt15_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt15_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Define the problem</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt15" id="mgt15_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt15_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">b) Specifying the solution to the problem</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt15" id="mgt15_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt15_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">c) Acceptable solution is better than the "right" solution</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt15" id="mgt15_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt15_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Testing the validity and the effectiveness of the decision against the actual course of events</label></div>

                                                    <div class="col"><input type="radio" name="mgt15" id="mgt15_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt15_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Define the problem</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt15" id="mgt15_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt15_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">b) Specifying the solution to the problem</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt15" id="mgt15_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt15_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">c) Acceptable solution is better than the "right" solution</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt15" id="mgt15_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt15_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Testing the validity and the effectiveness of the decision against the actual course of events</label></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: -20px;">

                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;" value="0"><br>16) What is meant by data driven decision making? &nbsp; &nbsp;</span></div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;" value="0"><br>A. Data-driven decision making is the practice where data is collected, analyzed, and decisions are made based on the <br>insights which are derived from the collected information. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>B. data-driven decision making allows for a better understanding of business needs by leveraging real, verified data, instead of just making assumptions. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>C. Data cleansing plays an important part in data driven decision making</span></div>

                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>16) What is meant by data driven decision making? &nbsp; &nbsp;</span></div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>A. Data-driven decision making is the practice where data is collected, analyzed, and decisions are made based on the <br>insights which are derived from the collected information. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>B. data-driven decision making allows for a better understanding of business needs by leveraging real, verified data, instead of just making assumptions. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>C. Data cleansing plays an important part in data driven decision making</span></div>

                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col">
                                        <div class="row d-flex flex-column" style="text-align: center;">
                                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                <div class="row" style="margin-bottom: 20px;">

                                                    <div class="col"><input type="radio" name="mgt16" id="mgt16_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt16_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) A only</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt16" id="mgt16_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt16_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) A &amp; B</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt16" id="mgt16_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt16_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) A &amp; C</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt16" id="mgt16_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt16_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) A, B &amp; C</label></div>

                                                    <div class="col"><input type="radio" name="mgt16" id="mgt16_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt16_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) A only</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt16" id="mgt16_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt16_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) A &amp; B</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt16" id="mgt16_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt16_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) A &amp; C</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt16" id="mgt16_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt16_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) A, B &amp; C</label></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>17) Which of below is not a &nbsp;principle of &nbsp;Good Governance?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col">
                                        <div class="row d-flex flex-column" style="text-align: center;">
                                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                <div class="row" style="margin-bottom: 20px;">

                                                    <div class="col"><input type="radio" name="mgt17" id="mgt17_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt17_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Participation</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt17" id="mgt17_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt17_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Rule of Law</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt17" id="mgt17_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt17_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Responsiveness</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt17" id="mgt17_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt17_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Diversity</label></div>
                                                </div>
                                                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>

                                                    <div class="col"><input type="radio" name="mgt17" id="mgt17_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt17_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Participation</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt17" id="mgt17_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt17_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Rule of Law</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt17" id="mgt17_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt17_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Responsiveness</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt17" id="mgt17_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="mgt17_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Diversity</label></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row" style="margin-right: 0px;margin-top: 1400px;margin-left: 850px;margin-bottom:50px;font-family:poppins">

        <div class="col"><a class="btn btn-primary" type="button" href="{{ route('toplayer') }}" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
            <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{asset('img/Screenshot (561) 2.png')}}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>

        <div class="col"><button class="btn btn-primary" type="button" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</button><button class="btn btn-primary" type="button" style="width: 174px;height: 55px;background: url(&quot;{{asset('img/Screenshot (561) 2.png')}}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>

    </div>

</form>
@endsection
