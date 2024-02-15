@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeMidIctInWorkplace') }}">
    {{csrf_field()}}
<section data-aos="fade-down" >
    <div class="container" style="margin-top: 50px;text-align:center;margin-bottom:20px">
        <span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment - ICT (Middle & Junior Management)</span>
    </div>
    <div class="container align-content-center align-self-center" style="width: 1358px;height: 100px;margin-top: 10px;">
        <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
            <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #E52F72;margin-top: -48px;border-radius: 5px;"><br>Competency Area: ICT in Workplace<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br>Competency Area Description: Productively perform tasks in the workplace by using ICT skills and knowledge in a digital government setting.<br><br><br></span></div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 2000px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">1) What is NOT a benefit of ICT for transformation in public services?</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict1" id="ict1_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict1_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Digital Transformation will improve customer/ citizen satisfaction</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict1" id="ict1_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="5"><label class="form-label" for="ict1_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Understanding of digital tools & techniques, practices will help to increase efficiency</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict1" id="ict1_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict1_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Usage of digital means will help to increase productivity</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict1" id="ict1_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict1_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) With the right attitude you will be able to transform your department into a digital inclusive organization</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>2) What are the new ICT technologies which can help the digital transformation of your organization?<br>
                     &nbsp; &nbsp; &nbsp; &nbsp;(A) - Data Science<br>
                     &nbsp; &nbsp; &nbsp; &nbsp;(B) - Process automation techniques<br>
                     &nbsp; &nbsp; &nbsp; &nbsp;(C) - NFC/ RFID<br>
                     &nbsp; &nbsp; &nbsp; &nbsp;(D) - Internet of Things (IoT)                                </span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict2" id="ict2_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict2_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) A, B, & C</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict2" id="ict2_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict2_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) B, C & D</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict2" id="ict2_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict2_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) A, C & D</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict2" id="ict2_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="5"><label class="form-label" for="ict2_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">3) Select the most important factor for your organization?</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict3" id="ict3_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="5"><label class="form-label" for="ict3_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Most important is the digital roadmap</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict3" id="ict3_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict3_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Identification of digitalization needs by your department</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict3" id="ict3_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict3_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Email collaboration and communication tools</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict3" id="ict3_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict3_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">4) Identify the benefits of digital transformation. Choose the Correct answer?</span></div>
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
                                                <div class="col" style="margin-top: 10px;"><input type="radio" name="ict4" id="ict4_1" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict4_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Understanding of digital tools & techniques, and practices will help to increase efficiency</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict4" id="ict4_2" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict4_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Usage of digital means will help to increase productivity</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict4" id="ict4_3" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="0"><label class="form-label" for="ict4_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) With the right attitude you will be able to transform your department into a digital inclusive organization</label></div>
                                            </div>
                                            <div class="row" style="margin-bottom: 20px;">
                                                <div class="col"><input type="radio" name="ict4" id="ict4_4" style="margin-left:50px;width:15px;height:15px;margin-right: 10px;" value="5"><label class="form-label" for="ict4_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">5) What is True/ False about adopting innovation through digital modes?</span></div>
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
                            <td style="color: rgb(0,0,0);width: 900px;">a) Most of the manual processes in your organization can be automated</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict5_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="3"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict5_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Latest technologies should be adopted in your organization</td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict5_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="3"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict5_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">6) By using digital tools and technologies in operational work you can become an avid practitioner of digital tools and technologies in the workplace. Mark True/ False?</span></div>
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
                            <td style="color: rgb(0,0,0);width: 900px;">a) Practicing email etiquette is a responsibility of the organization </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"> </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_1" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="3"></td>
                        </tr>
                        <tr>
                            <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Promoting e-signature in your organization is your responsibility </td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="3"></td>
                            <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="ict6_2" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;" value="0"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>

</section>
<div class="row" style="margin-bottom:100px;margin-right: 0px;margin-top: 2300px;margin-left: 850px;font-family: Poppins, sans-serif;">
    <div class="col"><a class="btn btn-primary" href="{{ route('middlelayer') }}" type="button" style="color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>

@endsection
