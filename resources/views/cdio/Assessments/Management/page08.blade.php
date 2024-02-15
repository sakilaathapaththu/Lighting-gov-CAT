@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioSelfDevelopment')}}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (CDIO)</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Specialized knowledge, expertise and self development<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Continuously engage in activities to develop oneself, specialized knowledge and expertise<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">37)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">WSelf-learning is an approach to learning where the individual makes the effort (Mark the incorrect answer)</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt37" id="mgt37_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt37_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)  To identify their own learning needs</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt37" id="mgt37_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt37_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Set learning goals</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt37" id="mgt37_3" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt37_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Promote learning methods</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt37" id="mgt37_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt37_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Evaluate their own knowledge</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">38)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is an interest in self-development essential for a Chief Digital Information Officer (CDIO) in supporting government policy?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt38" id="mgt38_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt38_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) It is unnecessary for CDIOs</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt38" id="mgt38_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt38_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b)  To hinder government policy</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt38" id="mgt38_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt38_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To stay stagnant in skills and knowledge </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt38" id="mgt38_4" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt38_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d)  To enhance capabilities and contribute to policy objectives </h5></label>

                </div>
                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly> 
            </div>
            </div>
            <div class="row" style="margin-top:2%;margin-bottom:2%">
    <div class="col-12" style="text-align:right">
        <a class="btn btn-primary" href="{{ route('cdioAssessments') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
        <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
    </div>
</div>
</form>
@endsection