@extends('layouts.govofficialusernavbar')

@section('content')

<form method="POST" action="{{ route('storeTopCollaboration') }}">
    {{csrf_field()}}

    <section data-aos="fade-down" style="height: 750px;">
        <div style="margin-top: 70px;text-align:center;margin-bottom: 10px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br><strong>Self Assessment -&nbsp;Digital Government (Top &amp; 2nd Tier Management)</strong></span></div>
        <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
            <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
                <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #027673;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Collaboration and Partnership<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br><br>Collaborating and Partnering in enhancing Digital Government capacity<br><br></span></div>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 1550px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>7) Which of the below is a method to enhance collaboration within multiple units in the organization?</span></div>
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
                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="dg7" id="dg7_1" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg7_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Create cross-functional teams within the organization</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg7" id="dg7_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg7_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Seize all existing collaboration efforts</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg7" id="dg7_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg7_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Promote networking among employees with similar interests</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg7" id="dg7_4" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg7_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Establish structured hierarchical teams</label></div>
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
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>8) Which of the below is not a method to enhance partnerships with external organizations?</span></div>
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
                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="dg8" id="dg8_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg8_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Encourage open and transparent communication between partners and the organization</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg8" id="dg8_2" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg8_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Involve external partner organizations only in the final stages of the desicion making process</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg8" id="dg8_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg8_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Engage with external partner organizations in the digital transformation process</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg8" id="dg8_4" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg8_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Seek constructive feedback from partner organizations</label></div>
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
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>9) Senior Leadership can promote diversity and inclusiveness amongst stakeholders by;</span></div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>A. Self educate on best practices in diversity and inclusion</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>B. Encourage to form diversified teams &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>C. Transparently address grievances related to bias &nbsp;</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>D. Assume stakeholders to be knowledgeable on diversity and inclusion practices</span></div>
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
                                                    <div class="col"><input type="radio" name="dg9" id="dg9_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg9_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) A,B and C are correct</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg9" id="dg9_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg9_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) B,C and D are correct</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg9" id="dg9_3" value="7" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg9_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) A,B and C are correct</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg9" id="dg9_4" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg9_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>10) What would be the fundamental principles to build proper collaboration with stakeholders:</span></div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>A. Defining the stakeholder Matrix</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>B. Understanding the importance of the stakeholders</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>C. Communication Plan</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>D. Responsibility Matrix</span></div>
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
                                                    <div class="col"><input type="radio" name="dg10" id="dg10_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg10_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) A only</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg10" id="dg10_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg10_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) A &amp; C</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg10" id="dg10_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg10_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) A, B &amp; D</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg10" id="dg10_4" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg10_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
<div class="row" style="margin: 1199px 0px 0px 966px;margin-right: 0px;margin-top: 1250px;margin-left: 850px;margin-bottom:50px">
    <div class="col"><a class="btn btn-primary" href="{{route('toplayer')}}" type="button" style="font-family: Poppins, sans-serif;color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="font-family: Poppins, sans-serif;width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>

@endsection
