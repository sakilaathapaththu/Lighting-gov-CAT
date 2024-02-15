@extends('layouts.govofficialusernavbar')

@section('content')

<form method="POST" action="{{route('storeTopQualityManagement')}}">
    {{csrf_field()}}
    <section data-aos="fade-down" style="height: 750px;">
        <div style="margin-top: 70px;text-align:center;margin-bottom: 10px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br><strong>Self Assessment -&nbsp;Digital Government (Top &amp; 2nd Tier Management)</strong></span></div>
        <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
            <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
                <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #027673;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Quality Management<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br><br>Delivering and managing quality in Digital Government Services<br><br><br></span></div>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 850px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br><br>14) Which one of the following is a strategy to improve the service quality in digital government organizations? (Put in the <br>correct order)</span></div>
                </div>
                <div class="row" style="margin-top: -20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>A) Review service delivery objectives &nbsp;</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>B) Identify technologies that can be use to improve the pain points</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>C) Find cost effective advance technological solutions</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>D) Update the service catalog with the new technological advancements</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>E) User Acceptance Test &nbsp;</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>F) Monitor and evaluate</span></div>
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
                                                    <div class="col"><input type="radio" name="dg14" id="dg14_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg14_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) B, D, E, F, A, C</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg14" id="dg14_2" value="8" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg14_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) A, B, C, D, E, F</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg14" id="dg14_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg14_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) E, A, C, D, F, B</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg14" id="dg14_4" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg14_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) C, A, F, B, D, E</label></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="margin-top: -50px;">
                        <div class="row" style="margin-top: 20px;">
                            <div class="col" style="margin-left: -60px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: -100px;"><br>15) Which one of the following is false when considering effective service delivery of a digital government? &nbsp;</span></div>
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
                                                            <div class="col" style="margin-top: 10px;"><input type="radio" name="dg15" id="dg15_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg15_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Front office should be staffed at all times during business hours.</label></div>
                                                        </div>
                                                        <div class="row" style="margin-bottom: 20px;">
                                                            <div class="col"><input type="radio" name="dg15" id="dg15_2" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg15_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Customers should wait for an employee to show up or need to go in to search of somebody</label></div>
                                                        </div>
                                                        <div class="row" style="margin-bottom: 20px;">
                                                            <div class="col"><input type="radio" name="dg15" id="dg15_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg15_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Need to have a system in place for desk coverage during lunch and breaks.</label></div>
                                                        </div>
                                                        <div class="row" style="margin-bottom: 20px;">
                                                            <div class="col"><input type="radio" name="dg15" id="dg15_4" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg15_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Your front office often is the point of initial contact for your customer</label></div>
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

<div class="row" style="margin-right: 0px;margin-top: 600px;margin-left: 850px;margin-bottom:50px">
    <div class="col" style="margin-top: 0px;"><a class="btn btn-primary" type="button" href="{{route('toplayer')}}" style="font-family: Poppins, sans-serif;color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="font-family: Poppins, sans-serif;width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>


@endsection
