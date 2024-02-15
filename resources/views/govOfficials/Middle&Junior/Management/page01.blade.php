@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeMidCommunication') }}">
    {{csrf_field()}}
<section data-aos="fade-down" style="height: 750px;">
    <div style="margin-top: 70px;text-align:center;margin-bottom: 10px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br>Self Assessment - Management (Middle &amp; Junior Management)<br><br></span></div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #027673;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Communication<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br>Establishing effective communication best practices to achieve departmental goals and objectives and champion transparent communication in digital government<br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 1900px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>1) To promote awareness of digital transformation initiatives of your organization, identify the most important action of the following?</span></div>
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
                                                <div class="col"><input type="radio" name="mgt1" id="mgt1_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt1_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Identifying stakeholders that needs to be communicated</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt1" id="mgt1_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt1_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Method of communication</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt1" id="mgt1_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt1_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Usage of digital means will help to increase productivity</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt1" id="mgt1_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt1_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) With the right attitude you will be able to transform your department into a digital inclusive organization</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">2) Mark as True/ False about ''Timely escalation of any blockers and impediments to the next levels with suggestions''?</span></div>
            </div>
            <div class="table-responsive" style="font-family: Poppins, sans-serif;font-size: 20px;margin-left: 80px;">
                <table class="table">
                    <thead>
                        <tr style="margin-top: 10px;">
                            <th></th>
                            <th style="color: #1f2471;text-align:center">True</th>
                            <th style="color: #1f2471;text-align:center">False</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="margin-top: 10px;">
                            <td style="color: rgb(0,0,0);">a) By identifying potential risks early will help to identify blockers early.</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt2_1" style="width:15px;height:15px;" value="1"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt2_1" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Blockers and impediments can only be identified at the beginning of a project. </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt2_2" style="width:15px;height:15px;" value="0"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt2_2" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Blockers should be addressed before addressing the impediments. </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt2_3" style="width:15px;height:15px;" value="0"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt2_3" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">d) Risks can become a blocker during the implementation phase. </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt2_4" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt2_4" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;"><br>3) What is true about Digital Communication methods?<br><br></span></div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 60px;margin-top: -35px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>A - Digital communication is any type of communication that relies on the use of technology <br>B - There are many types of digital communication, commonly referred to as digital communication channels <br>C - Email, phone calls, video conferencing, Postal mail, SMS and web chats are few examples for digital communication methods <br>D - Increasing digital communications will have a direct impact on stakeholder satisfaction<br><br><br></span></div>
            </div>
            <div class="row d-flex flex-column" style="text-align: center;">
                <div class="col">
                    <div class="row d-flex flex-column" style="text-align: center;">
                        <div class="col">
                            <div class="row d-flex flex-column" style="text-align: center;">
                                <div class="col">
                                    <div class="row d-flex flex-column" style="text-align: center;">
                                        <div class="col">
                                            <div class="row d-flex flex-column" style="text-align: center;margin-top: -30px;">
                                                <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="mgt3" id="mgt3_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt3_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) A &amp; D</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="mgt3" id="mgt3_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt3_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) A &amp; B</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="mgt3" id="mgt3_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt3_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) A, B, &amp; D</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="mgt3" id="mgt3_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt3_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;margin-top: -60px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;"><br><br>4) What is the importance of constructive feedback?</span></div>
            </div>
            <div class="row d-flex flex-column" style="text-align: center;">
                <div class="col">
                    <div class="row d-flex flex-column" style="text-align: center;">
                        <div class="col">
                            <div class="row d-flex flex-column" style="text-align: center;">
                                <div class="col">
                                    <div class="row d-flex flex-column" style="text-align: center;">
                                        <div class="col">
                                            <div class="row d-flex flex-column" style="text-align: center;">
                                                <div class="col">
                                                    <div class="row d-flex flex-column" style="text-align: center;">
                                                        <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                            <div class="row" style="margin-bottom: 20px;margin-top: 30px;">
                                                                <div class="col"><input type="radio" name="mgt4" id="mgt4_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt4_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) When constructive feedback is given properly it can, reinforce positive behavior, correct any negative performance and ensure a strong culture remains in your team</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt4" id="mgt4_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt4_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Constructive feedback motivates people</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt4" id="mgt4_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt4_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Feedback promotes personal and professional growth</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt4" id="mgt4_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt4_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;margin-top: -60px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;"><br><br>5) Which of the following would be a result of proper communication on Digital Transformation?</span></div>
            </div>
            <div class="row d-flex flex-column" style="text-align: center;">
                <div class="col">
                    <div class="row d-flex flex-column" style="text-align: center;">
                        <div class="col">
                            <div class="row d-flex flex-column" style="text-align: center;">
                                <div class="col">
                                    <div class="row d-flex flex-column" style="text-align: center;">
                                        <div class="col">
                                            <div class="row d-flex flex-column" style="text-align: center;">
                                                <div class="col">
                                                    <div class="row d-flex flex-column" style="text-align: center;">
                                                        <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt5" id="mgt5_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt5_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Take longer than anticipated which results in higher costs</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt5" id="mgt5_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt5_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Leave employees feeling frustrated and confused about the changes</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col" style="color: var(--bs-emphasis-color);"><input type="radio" name="mgt5" id="mgt5_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt5_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Would give a easy path to find a technological solution</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt5" id="mgt5_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt5_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Cause a break between IT and other departments, which impacts corporate culture</label></div>
                                                            </div>
                                                            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
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
            </div>
        </div>
    </div>
</section>
<div class="row" style="margin-right: 0px;margin-top: 1600px;margin-left: 850px;margin-bottom:50px;font-family: Poppins, sans-serif;">
    <div class="col"><a class="btn btn-primary" type="button" href="{{ route('middlelayer') }}" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot%20(561)%202.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>
@endsection
