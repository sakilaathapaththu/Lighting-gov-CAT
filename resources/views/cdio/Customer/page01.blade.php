@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Customer</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Citizen Experience Strategy <br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>A plan that guides the activities and resource allocation required to deliver intended experiences that meet or exceed Citizen expectations in accordance with the goals of the Gov Institute<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">1)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is your strategy for digital Citizen experience?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c1" id="c1_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c1_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) NNo Citizen experience strategy documented. Citizen experience driven through traditional non-digital approach</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c1" id="c1_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c1_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Multi- channel Citizen experience strategy with no significant emphasis on Digital Citizen experience</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c1" id="c1_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c1_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Multi-channel Citizen experience strategy with focus on digital enablement for enhanced experience.</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c1" id="c1_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c1_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Cross channel Citizen experience strategy defined and documented. Digital Citizen experience</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="c1" id="c1_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="c1_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Omni-channel Citizen experience strategy defined and documented. Advanced digital Citizen experience</h5></label>

                </div>

            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
           
            </div>
            <div class="row" style="margin-top:2%;margin-bottom:2%">
                <div class="col-12" style="text-align:right">
                    <a class="btn btn-primary" href="{{ route('deepTechnology') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
                    <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
                </div>
            </div>
</form>
@endsection

            