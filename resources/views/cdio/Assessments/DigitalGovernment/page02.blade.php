@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioChangeManagement')}}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (CDIO)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Change Management<br><br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Managing change in Digital Government setting    <br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">5)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">When considering public sector organizations, which of  the following strategies can be used to better change management within the organization?</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg5" id="dg5_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg5_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Carry on multiple initiatives at the same time.  </h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg5" id="dg5_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg5_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Creating a plan is not required.</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg5" id="dg5_3" value="6">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg5_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Communicating is not relevant when managing changes.</h5></label>
                </div>      
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg5" id="dg5_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg5_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Understand the process of change. </h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">6)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why we need digitally enabled services in an public organization?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg6" id="dg6_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg6_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Reduced costs</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg6" id="dg6_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg6_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Improved efficiency</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg6" id="dg6_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg6_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Higher transparency</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg6" id="dg6_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg6_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above </h5>
                    </label>
                </div>
                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">7)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">In a digital government, which of the following will be required for organizational change?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg7" id="dg7_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg7_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) A solid communication strategy</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg7" id="dg7_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg7_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Leadership</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg7" id="dg7_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg7_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Change team</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg7" id="dg7_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg7_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">8)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Identify the best Practices in Change Management for Digital Transformation Success?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg8" id="dg8_1" value="5">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg8_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Make change management the center of your digital transformation vision</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg8" id="dg8_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg8_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Plan for long-term sustainability and demonstrate commitment to change</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg8" id="dg8_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg8_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Put people first</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg8" id="dg8_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg8_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above</h5>
                    </label>
                </div><input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            </div>
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
