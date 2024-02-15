@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeMidCollaboration') }}">
    {{csrf_field()}}
<section data-aos="fade-down" style="height: 750px;">
    <div style="margin-top: 70px;text-align:center;margin-bottom: 30px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br>Self Assessment - Management (Middle &amp; Junior Management)<br><br></span></div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #703074;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Collaboration and Partnership<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br><br>Collaborating and Partnering in enhancing Digital Government capacity<br><br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 1850px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: -20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;"><br>10) What are the fundamental principles to build better partnerships with stakeholders:</span></div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 60px;margin-top: -35px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>A) Defining the stakeholder Matrix <br>B) Understanding the importance of the stakeholders <br>C) Communication Plan <br>D) Responsibility Matrix<br><br><br><br><br></span></div>
            </div>
            <div class="row d-flex flex-column" style="text-align: center;margin-top: -20px;">
                <div class="col">
                    <div class="row d-flex flex-column" style="text-align: center;">
                        <div class="col">
                            <div class="row d-flex flex-column" style="text-align: center;">
                                <div class="col">
                                    <div class="row d-flex flex-column" style="text-align: center;">
                                        <div class="col">
                                            <div class="row d-flex flex-column" style="text-align: center;margin-top: -80px;">
                                                <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="dg10" id="dg10_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg10_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) A only</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="dg10" id="dg10_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg10_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) A &amp; C</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="dg10" id="dg10_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg10_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) A, B &amp; D</label></div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 20px;">
                                                        <div class="col"><input type="radio" name="dg10" id="dg10_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="dg10_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">11) Mark as True/ False</span></div>
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
                            <td style="color: rgb(0,0,0);">a) Giving equal opportunities will not always provide positive responses. </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg11_1" style="width:15px;height:15px;" value="0"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg11_1" style="width:15px;height:15px;" value="1"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Diverse teams are more innovative and make better decisions, and diverse companies have better&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;shareholder returns. </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg11_2" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg11_2" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">c) Racial and gender diversity bring in more sales revenue, more customers and higher profits </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg11_3" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg11_3" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">d) Diversity will provide a competitive edge amongst competitors. </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg11_4" style="width:15px;height:15px;" value="1"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg11_4" style="width:15px;height:15px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>12) Which of the below is not a way to promote diversity, equity, and inclusion in the workplace?</span></div>
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
                                                <div class="col"><input type="radio" name="dg12" id="dg12_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg12_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Be aware of unconscious bias</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg12" id="dg12_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg12_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Communicate the importance of managing bias</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg12" id="dg12_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg12_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Develop a strategic training program</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg12" id="dg12_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="dg12_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Not mixing up your teams</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>13) What are Digital Government Services?</span></div>
            </div>
            <div class="row" style="margin-top: -20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #000000;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A)Service delivery within, between government and the public, using information communication technologies <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B)Any process available for citizens by the government online</span></div>
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
                                                <div class="col"><input type="radio" name="dg13" id="dg13_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg13_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Only A is correct</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg13" id="dg13_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg13_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Only B is correct</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg13" id="dg13_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="dg13_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Both A &amp; B are correct</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg13" id="dg13_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg13_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Both A &amp; B are incorrect</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>14) Which of the following statements best characterizes the process of data sharing?</span></div>
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
                                                <div class="col"><input type="radio" name="dg14" id="dg14_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg14_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) The ability to manipulate data remotely.</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg14" id="dg14_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="2"><label class="form-label" for="dg14_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) The ability to store data in one source and is accessible to other systems in a controlled environment.</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg14" id="dg14_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg14_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Identifying the business need for data sharing</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="dg14" id="dg14_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="dg14_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) The practice of integrating all applications each time a new application or system is introduced or added <br>to a network</label></div>
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
<div class="row" style="margin-right: 0px;margin-top: 1600px;margin-left: 850px;font-family: Poppins, sans-serif;margin-bottom:50px">
    <div class="col"><a class="btn btn-primary" type="button" href="{{ route('middlelayer') }}" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>
@endsection
