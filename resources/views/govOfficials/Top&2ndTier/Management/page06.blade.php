@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeTopStakeholder') }}">
    {{csrf_field()}}
    <section data-aos="fade-down" style="height: 750px;">
        <div style="margin-top: 70px;text-align:center;margin-bottom: 10px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br><strong>Self Assessment -&nbsp;Management (Top &amp; 2nd Tier Management)</strong></span></div>
        <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
            <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
                <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #027673;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Stakeholder Management<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br>Actively promote digital service delivery through an&nbsp;oriented approach while effectively managing stakeholders for <br>digital government initiatives<br><br><br></span></div>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 1260px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>22) According to Thomas-Kilmann Conflict Mode Instrument (TKI) which of below is not a conflict management style?</span></div>
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
                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="mgt22" id="mgt22_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt22_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Collaborating</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt22" id="mgt22_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt22_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Competing</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt22" id="mgt22_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt22_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Avoiding</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt22" id="mgt22_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt22_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Negotiating</label></div>
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
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">23) Mark True/False</span></div>
                </div>
                <div class="table-responsive" style="font-family: Poppins, sans-serif;font-size: 20px;margin-left: 80px;">
                    <table class="table">
                        <thead>
                            <tr style="margin-top: 10px;">
                                <th></th>
                                <th style="color: #1f2471;text-align: center;">True</th>
                                <th style="color: #1f2471;text-align: center;">False</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="margin-top: 10px;">
                                <td style="color: rgb(0,0,0);width: 900px;">a) The Top Management can promote benefits of digital services amongst employees by sharing positive feedback from citizens.</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_1" style="width:20px;height:20px" value="4"> </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_1" style="width:20px;height:20px" value="0"></td>
                            </tr>
                            <tr>
                                <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) When governments deliver services based on the needs of the people they serve, they can increase public satisfaction and reduce costs.</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_2" style="width:20px;height:20px" value="4"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="mgt23_2" style="width:20px;height:20px" value="0"></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>24) Which of below is a critical aspect in stakeholder management in a digital government set up?</span></div>
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
                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="mgt24" id="mgt24_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt24_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Identification of stakeholders</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt24" id="mgt24_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt24_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Recognition of different interests among stakeholders</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt24" id="mgt24_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt24_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Mechanism to cater to stakeholders interests</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt24" id="mgt24_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt24_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>25) Which of the below is a strategy to empower employees?</span></div>
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
                                                    <div class="col"><input type="radio" name="mgt25" id="mgt25_1"  style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt25_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Give employees autonomy over certain aspects of the service delivery process</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt25" id="mgt25_2"  style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt25_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Give constructive feedback</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt25" id="mgt25_3"  style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="mgt25_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Recognize commendable work</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="mgt25" id="mgt25_4"  style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="mgt25_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
    </section>
    <div class="row" style="margin-right: 0px;margin-top: 1000px;margin-left: 850px;font-family:poppins;margin-bottom:50px">
        <div class="col"><a class="btn btn-primary" type="button" href="{{ route('toplayer') }}" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
            <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
    </div>
</form>
@endsection
