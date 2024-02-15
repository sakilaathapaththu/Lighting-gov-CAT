@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeMidStakeholder') }}">
    {{csrf_field()}}
<section data-aos="fade-down" style="height: 750px;">
    <div style="margin-top: 70px;text-align:center;margin-bottom: 10px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br>Self Assessment - Management (Middle &amp; Junior Management)<br><br></span></div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #027673;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Stakeholder Management<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br>Actively promote digital service delivery through a citizen-oriented approach and a collaborative work environment while <br>effectively managing stakeholders for digital government initiatives.<br><br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 3100px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>21) What would be the most appropriate technique for resolving conflict in a digital government?</span></div>
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
                                                <div class="col"><input type="radio" name="mgt21" id="mgt21_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt21_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Conciliation</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt21" id="mgt21_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt21_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Negotiating</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt21" id="mgt21_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt21_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Removal of participants</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt21" id="mgt21_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt21_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Not interfering them</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>22) As a responsible government official, what is the first thing you should do when resolving a conflict with someone else?</span></div>
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
                                                <div class="col"><input type="radio" name="mgt22" id="mgt22_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt22_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Assertively but diplomatically state your perspective.</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt22" id="mgt22_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt22_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Brainstorm possible solutions to the problem.</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt22" id="mgt22_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt22_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Slap some sense into them.</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt22" id="mgt22_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt22_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Listen to their perspective</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">23) It is important to actively promote the impact of digital service delivery to citizens, among employees. &nbsp;Mark as True/ <br>False in relation to the above statement?</span></div>
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
                            <td style="color: rgb(0,0,0);">a) Why, What and How is important in all team communications&nbsp;</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_1" style="width:15px;height:15px;" value="1"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_1" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) All department employees should know about the Service strategy of the organization&nbsp;&nbsp;&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_2" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_2" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Reviewing and updating the service catalogue should be a responsibility of the key team members&nbsp;&nbsp;&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_3" style="width:15px;height:15px;" value="0"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_3" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">d) Service catalogue review should happen annually </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_4" style="width:15px;height:15px;" value="0"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_4" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">24) What is True/ False about having an empathetic mindset towards user experience?</span></div>
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
                            <td style="color: rgb(0,0,0);">a) "User experience" encompasses all aspects of the end-user's interaction with the company, its services, and its products.&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt24_1" style="width:15px;height:15px;" value="1"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt24_1" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) UI generally deals with the user's overall experience with a brand, product or service where UX deals more generally with the interaction between users and computer systems, software and applications.&nbsp;&nbsp;&nbsp;&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt24_2" style="width:15px;height:15px;" value="0"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt24_2" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) User experience is important because it tries to fulfill the user's needs. It aims to provide positive experiences that keep a user loyal. </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt24_3" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt24_3" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">25) Mark below statements True/ False in relation to Empowering of staff in a workplace?</span></div>
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
                            <td style="color: rgb(0,0,0);">a) Do not accept ideas and input.</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt25_1" style="width:15px;height:15px;" value="0"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt25_1" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Delegation of authority.&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt25_2" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt25_2" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Recognize employees for hard work.&nbsp; </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt25_3" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt25_3" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">d) Not giving any constructive feedback. </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt25_4" style="width:15px;height:15px;" value="0"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt25_4" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>26) In a public sector organization, empowering does not occur when?</span></div>
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
                                                <div class="col"><input type="radio" name="mgt26" id="mgt26_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt26_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Authority goes to employees</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt26" id="mgt26_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt26_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Salary increments</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt26" id="mgt26_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt26_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Feeling of sense of ownership</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt26" id="mgt26_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt26_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Feeling of that jobs belong to them</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>27) Which of the following is not the best way to gather information about customer needs in a Digital Government?</span></div>
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
                                                <div class="col"><input type="radio" name="mgt27" id="mgt27_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="1"><label class="form-label" for="mgt27_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Define the customer needs based on your understanding</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt27" id="mgt27_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt27_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Personal visits to customer locations.</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt27" id="mgt27_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt27_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Employees with special knowledge of the customer.</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="mgt27" id="mgt27_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt27_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Information on competitor’s products.</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>28) A collaborative team environment is essential for the team's success To create a collaborative environment, team members must not practice which of the following?</span></div>
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
                                                <div class="col"><input type="radio"name="mgt28" id="mgt28_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt28_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Trust each other</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio"name="mgt28" id="mgt28_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt28_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Appreciate diversity</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio"name="mgt28" id="mgt28_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt28_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Inflexibility of roles</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio"name="mgt28" id="mgt28_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt28_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Communicate Openly and Effectively</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;"><br>29) Identify the steps to build a collaborative work environment</span></div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 60px;margin-top: -35px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>A- Proper Delegation of Tasks <br>B- Celebrate teams success publicly <br>C- Encourage Open-Mindedness <br>D- Establish Realistic Expectations &amp; Clarify Goals <br>E- Identify Individual Strengths &nbsp; &nbsp; <br>F- Use Collaboration Tools <br>G- Reward Innovation <br>H- Support a strong sense of community<br><br></span></div>
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
                                                        <div class="col"><input type="radio"name="mgt29" id="mgt29_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt29_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) A, B, C, D, E, F, G, H</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio"name="mgt29" id="mgt29_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="4"><label class="form-label" for="mgt29_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) E, D, F, C, G, B, H, A</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio"name="mgt29" id="mgt29_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt29_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) A, C, E, G, B, D, E, H</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio"name="mgt29" id="mgt29_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt29_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) B, C, D, A, E, G, H, F</label></div>
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
</section>
<div class="row" style="margin-right: 0px;margin-top: 2850px;margin-left: 850px;margin-bottom:20px;font-family: Poppins, sans-serif;">
    <div class="col" style="margin-top: 0px;"><a class="btn btn-primary" type="button" href="{{ route('middlelayer') }}" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>
@endsection
