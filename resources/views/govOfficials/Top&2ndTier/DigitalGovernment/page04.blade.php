@extends('layouts.govofficialusernavbar')

@section('content')

<form method="POST" action="{{ route('storeTopOrientation') }}">
    {{csrf_field()}}
    <section data-aos="fade-down" style="height: 750px;">
        <div style="margin-top: 70px;text-align:center;margin-bottom: 30px;"><span style="font-size: 25px;color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br><strong>Self Assessment -&nbsp;Digital Government (Top &amp; 2nd Tier Management)</strong></span></div>
        <div class="container align-content-center align-self-center" style="width: 1358px;height: 600px;margin-top: 10px;">
            <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
                <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: var(--bs-body-bg);font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-bottom: -42px;background: #027673;margin-top: -48px;border-radius: 5px;"><br>Competency Area: Results Orientation<br><br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;padding-top: 0px;margin-bottom: -12px;margin-top: 10px;"><br><br><br>Results orientation to achieve desired outcomes and sustain stakeholder satisfaction in digital government<br><br><br><br></span></div>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 900px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>11) Which of the below does not describe result oriented leadership?</span></div>
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
                                                    <div class="col" style="margin-top: 10px;"><input type="radio" name="dg11" id="dg11_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg11_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: 0px;width: 1100px;">a) Establish Key Performance Indicators (KPIs) for digital government projects</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg11" id="dg11_2" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg11_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Performance monitoring is the responsibilty of CDIO</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg11" id="dg11_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg11_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) Ensure a result oriented mindset is instilled across all employees and project teams</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg11" id="dg11_4" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg11_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Conduct regular progress meetings with Digital Transformation Units</label></div>
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
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 0px;">12) Mark as True/ False</span></div>
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
                                <td style="color: rgb(0,0,0);width: 900px;">a) Digitally transforming governments, is not down only down to technology, its important to experiment and continuously improve service levels</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg12" value="4" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"> </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" name="dg12" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col" style="margin-left: 40px;"><span style="color: #1f2471;font-family: Poppins, sans-serif;font-size: 20px;margin-left: 100px;"><br>13) What would be the innovative approaches you would not take in order to deliver greater customer satisfaction in your <br>public organization?</span></div>
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
                                                    <div class="col"><input type="radio" name="dg13" id="dg13_1" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg13_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;width: 1100px;">a) Enable seamless multi channel customer experience</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg13" id="dg13_2" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg13_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">b) Build loyalty through customer service</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg13" id="dg13_3" value="0" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg13_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">c) User Experience, key to digital engagement</label></div>
                                                </div>
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col"><input type="radio" name="dg13" id="dg13_4" value="5" style="margin-left:20px;width:15px;height:15px;margin-right: 10px;"><label class="form-label" for="dg13_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: var(--bs-emphasis-color);margin-left: 20px;margin-top: -28px;">d) Always look for latest technology solutions</label></div>
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
<div class="row" style="margin: 1199px 0px 0px 966px;margin-right: 0px;margin-top: 600px;margin-left: 850px;margin-bottom:50px">
    <div class="col"><a class="btn btn-primary" href="{{route('toplayer')}}" type="button" style="font-family: Poppins, sans-serif;color: #EF4323;width: 174px;height: 55px;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;margin-right: 30px;border-radius: 10px;">Resume</a>
        <button class="btn btn-primary" type="submit" style="font-family: Poppins, sans-serif;width: 174px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png')}}&quot;);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;font-size: 20px;font-weight: bold;border-radius: 10px;">Next</button></div>
</div>
</form>


@endsection
