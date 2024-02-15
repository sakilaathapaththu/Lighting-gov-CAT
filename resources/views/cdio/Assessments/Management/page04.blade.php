@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioBuildingCapacity')}}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

<div class="row" style="text-align:center">

    <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (CDIO)</h2>

</div>



<div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

    <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">

        <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Building capacities for Digital Government<br></h5>

    </div>

    <div class="row" style="text-align:center">

        <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Enhance understanding, skills and capability of employees needed to deliver successful digital government services through a combination of training and development<br><br></h5>

    </div>

</div>

<div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

<div class="row">

        <div class="col-1" style="margin-top:2%">

            <h5 id="h4" style="color: #1f2471;">18)</h5>

        </div>

        <div class="col-11">

            <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is a key benefit of acknowledging the importance of human talent in a digital government context?</h5>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt18" id="mgt18_1" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt18_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Reduced focus on employee development</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt18" id="mgt18_2" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt18_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Increased organizational bureaucracy</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt18" id="mgt18_3" value="2">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt18_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Enhanced workforce performance and adaptability </h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt18" id="mgt18_4" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt18_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Limited collaboration among team members</h5></label>

        </div>

    </div>

    <div class="row">

        <div class="col-1" style="margin-top:2%">

            <h5 id="h4" style="color: #1f2471;">19)</h5>

        </div>

        <div class="col-11">

            <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is creating an innovative knowledge-driven organization essential for a Chief Digital Information Officer (CDIO)?</h5>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt19" id="mgt19_1" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt19_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To discourage creativity</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt19" id="mgt19_2" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt19_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To limit organizational growth</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt19" id="mgt19_3" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt19_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To hinder technological advancements</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt19" id="mgt19_4" value="2">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt19_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To stay competitive in the digital landscape</h5></label>

        </div>

    </div>

    <div class="row">

        <div class="col-1" style="margin-top:2%">

            <h5 id="h4" style="color: #1f2471;">20)</h5>

        </div>

        <div class="col-11">

            <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> Why is continuous learning crucial in a digital environment?</h5>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt20" id="mgt20_1" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt20_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)To discourage professional growth</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt20" id="mgt20_2" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt20_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To maintain outdated practices</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt20" id="mgt20_3" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt20_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To resist technological advancements</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt20" id="mgt20_4" value="2">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt20_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To stay updated on evolving digital trends</h5></label>

        </div>

    </div>

    <div class="row">

        <div class="col-1" style="margin-top:2%">

            <h5 id="h4" style="color: #1f2471;">21)</h5>

        </div>

        <div class="col-11">

            <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is the purpose of benchmarking in building competencies for staff under the leadership of a CDIO?</h5>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt21" id="mgt21_1" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt21_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) To restrict professional growth</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt21" id="mgt21_2" value="7">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt21_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To compare performance with industry standards </h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt21" id="mgt21_3" value="2">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt21_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To discourage staff development </h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt21" id="mgt21_4" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt21_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To avoid any competency improvements </h5></label>

        </div>

    </div>

    
    <div class="row">

        <div class="col-1" style="margin-top:2%">

            <h5 id="h4" style="color: #1f2471;">22)</h5>

        </div>

        <div class="col-11">

            <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is the significance of having a diverse blend of capability and skills in meeting digitalization efforts?</h5>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt22" id="mgt22_1" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt22_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) It creates unnecessary complexity</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt22" id="mgt22_2" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt22_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) It limits the adaptability of the organization</h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt22" id="mgt22_3" value="2">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt22_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) It enhances problem-solving and innovation  </h5></label>

        </div>

    </div>

    <div class="row" style="margin-top: 1%">

        <div class="col-1" style="text-align:right">

            <input type="radio" name="mgt22" id="mgt22_4" value="0">

        </div>

        <div class="col-11" style="text-align:left">

            <label for="mgt22_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) It slows down the digitalization process </h5></label>

        </div>

    </div>
</div>
<input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>   
<div class="row" style="margin-top:2%;margin-bottom:2%">
    <div class="col-12" style="text-align:right">
        <a class="btn btn-primary" href="{{ route('cdioAssessments') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
        <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Next</h4></button>
    </div>
</div>
</form>
@endsection
