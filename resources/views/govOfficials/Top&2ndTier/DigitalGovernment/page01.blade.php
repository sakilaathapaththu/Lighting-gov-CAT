@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{route('storeTopProjectManagement')}}">
    {{csrf_field()}}
    <section data-aos="fade-down" style="height: 750px;">
        <div style="margin-top: 70px;text-align:center;margin-bottom: 10px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br><strong>Self Assessment -&nbsp;Digital Government (Top &amp; 2nd Tier Management)</strong></span></div>
        <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
            <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
                <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #027673;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Project and Program Management<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br><strong>Undertaking Project management initiatives in Digital Government capacity</strong><br><br><br><br></span></div>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 1320px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">1) Which of the following is true about Project and Program management of Digital Government initiatives? (Mark as True/ False)</span></div>
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
                                <td style="color: rgb(0,0,0);width: 900px;">a) Program management is the process of overseeing multiple projects that are related or have some similar outcomes and goals.</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg1_1" value="4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"> </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg1_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr>
                                <td style="color: rgb(0,0,0);margin-bottom: 0px;">b) Program management is identifying the dependencies of the multiple projects.</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg1_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg1_2" value="4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>2) Select the accurate statement related to lapses in services provisions?</span></div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>A. Identify and acknowledge services lapses through multiple communication channels&nbsp;</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>B. Instill a strong customer service mindset amongst employees</span><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>C. Analyze the service failure and learn from it</span></div>
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
                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="dg2" id="dg2_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg2_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) A and B</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg2" id="dg2_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg2_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) B and C</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg2" id="dg2_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg2_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) A and C</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg2" id="dg2_4" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg2_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) All of the above</label></div>
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
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>3) Which of the below factors least contribute to the successful completion of a project?</span></div>
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
                                                    <div class="col"><input type="radio" name="dg3" id="dg3_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg3_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Competent project management teams</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg3" id="dg3_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg3_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Application of a suitable methodolgy for project management</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg3" id="dg3_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg3_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Effective monitoring and control tools</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg3" id="dg3_4" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg3_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Use of a professional Software</label></div>
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
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>4) Which of the below is not a digital government service category?</span></div>
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
                                                    <div class="col"><input type="radio" name="dg4" id="dg4_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg4_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Government-Citizen services</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg4" id="dg4_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg4_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Government-Business services</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg4" id="dg4_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg4_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Government-Government services</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg4" id="dg4_4" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg4_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Government-Non Government services</label></div>
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
<div class="row" style="margin: 1199px 0px 0px 966px;margin-right: 0px;margin-top: 1050px;margin-left: 850px;margin-bottom: 50px">
    <div class="col"><a class="btn btn-primary" href="{{route('toplayer')}}" type="button" style="font-family: Poppins, sans-serif;color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="font-family: Poppins, sans-serif;width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>
@endsection
