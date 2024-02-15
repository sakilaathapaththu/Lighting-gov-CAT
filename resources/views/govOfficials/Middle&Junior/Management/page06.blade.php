@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeMidPerformanceManagement') }}">
    {{csrf_field()}}
<section data-aos="fade-down" style="height: 750px;">
    <div style="margin-top: 70px;text-align:center;margin-bottom: 10px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br>Self Assessment - Management (Middle &amp; Junior Management)<br><br></span></div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 5px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #027673;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Performance Management<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br>Human Resource performance management best practices in digital government setting.<br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 2250px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;"><br>30) What is true about Reskilling and Upskilling? (Mark True/ False)</span></div>
            </div>
            <div class="table-responsive" style="font-family: Poppins, sans-serif;font-size: 20px;margin-left: 80px;">
                <table class="table">
                    <thead>
                        <tr style="margin-top: 10px;">
                            <th></th>
                            <th style="color: #1f2471;">True</th>
                            <th style="color: #1f2471;">False</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="margin-top: 10px;">
                            <td style="color: rgb(0,0,0);">a) Upskilling is the process of learning new skills to enhance your skill set.</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt30_1" style="width:15px;height:15px;" value="0"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt30_1" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Reskilling is the process of learning new skills with the goal of finding a different job or career path.&nbsp;&nbsp;&nbsp;&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt30_2" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt30_2" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Growing digital technologies and innovation is a reason why we should encourage upskilling or reskilling. </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt30_3" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt30_3" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;"><br>31) Identify the correct sequence to develop an individual development plan?</span></div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 60px;margin-top: -35px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>A - Establish personal and career development goals <br>B - Establish work development needs <br>C - Develop an action plan <br>D - Make changes on the path to development <br>E - Reflect on efficiency and update the plan as required<br><br><br></span></div>
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
                                                        <div class="col"><input type="radio" name="mgt31" id="mgt31_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt31_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) A, B, C, D, E</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="mgt31" id="mgt31_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt31_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) B, D, A, C, E</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="mgt31" id="mgt31_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt31_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) C, E, B, D, A</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="mgt31" id="mgt31_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt31_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) A, B, D, E, C</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">32) In a digital government organization, teamwork leads to organizational __________ , (Mark and True/ False)</span></div>
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
                            <td style="color: rgb(0,0,0);">a) Empowerment&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt32_1" style="width:15px;height:15px;" value="1"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt32_1" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Excellence&nbsp;&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt32_2" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt32_2" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Economy fall </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt32_3" style="width:15px;height:15px;" value="0"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt32_3" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">d) Skills </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt32_4" style="width:15px;height:15px;" value="0"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt32_4" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;"><br>33) Mark as True/ False on promoting organizational learning and experience towards the effective delivery of public services?</span></div>
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
                            <td style="color: rgb(0,0,0);">a) A good learning culture consists of processes that remove barriers, offers support systems that encourage learning.&nbsp;&nbsp;&nbsp;&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt33_1" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt33_1" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) provides learners frictionless access to learning experiences. </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt33_2" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt33_2" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Practicing effective communication is not a characteristic of a good learning culture&nbsp;&nbsp;&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt33_3" style="width:15px;height:15px;" value="0"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt33_3" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">d) Develop Personalized Learning Plans is part of creating a culture of learning&nbsp;&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt33_4" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt33_4" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;margin-top: -60px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;"><br><br>34) Which of the following is not related to performance management in a digital government?</span></div>
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
                                                                <div class="col"><input type="radio" name="mgt34" id="mgt34_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt34_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Means managing the performance of an organization or an individual.</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt34" id="mgt34_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt34_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Should help managers to understand how well the organization, parts of the organization and individuals <br>are performing.</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt34" id="mgt34_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt34_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Is what you do to improve or what you do to maintain good performance.</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt34" id="mgt34_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt34_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Is not related to the public sector.</label></div>
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
                <div class="col" style="margin-left: 40px;margin-top: -60px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;"><br><br>35) Effective performance management in a digital government organization should demonstrate that,</span></div>
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
                                                                <div class="col"><input type="radio" name="mgt35" id="mgt35_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt35_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) You know what you have to do to meet your objectives.</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt35" id="mgt35_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt35_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) You know how to measure progress towards your objectives.</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col" style="color: var(--bs-emphasis-color);"><input type="radio" name="mgt35" id="mgt35_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt35_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) You can detect performance problems and remedy them.</label></div>
                                                            </div>
                                                            <div class="row" style="margin-bottom: 20px;">
                                                                <div class="col"><input type="radio" name="mgt35" id="mgt35_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt35_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
<div class="row" style="margin-right: 0px;margin-top: 2000px;margin-left: 850px;margin-bottom:20px;font-family: Poppins, sans-serif;">
    <div class="col"><a class="btn btn-primary" type="button" href="{{ route('middlelayer') }}" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>
@endsection

