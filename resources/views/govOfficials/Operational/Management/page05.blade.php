@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('storeOpPersonalDevelopment') }}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (Operational Staff)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Personal Development (පුද්ගලික සංවර්ධනය) (නිපුණතා අංශය: සන්නිවේදනය)<br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Continuously engage in activities to develop oneself, specialized knowledge and expertise. (තමාව, විශේෂිත දැනුම සහ ප්‍රවීණත්වය වර්ධනය කර ගැනීම සඳහා අඛණ්ඩව ක්‍රියාකාරකම්වල නිරත වීම.)<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">15)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-3%">How can you engage in self-learning? (ඔබට ස්වයං ඉගෙනීමේ යෙදිය හැක්කේ කෙසේද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt15" id="mgt15_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt15_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">Share your knowledge with others (ඔබේ දැනුම අන් අය සමඟ බෙදා ගැනීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt15" id="mgt15_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt15_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">Watch educational videos (අධ්‍යාපනික වීඩියෝ නැරබීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt15" id="mgt15_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt15_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">Attend ICTA DigitalGov Activation Forum (ICTA DigitalGov Activation Forum වලට සහභාගී වීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt15" id="mgt15_4" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt15_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">All of the above (ඉහත සියල්ල)</h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">16)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-3%">What are the ways you can develop yourself? (ඔබට ඔබම දියුණු කරගත හැකි ක්‍රම මොනවාද?)</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt16" id="mgt16_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt16_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">Engage in self-learning (ස්වයං ඉගෙනීමෙහි නිරත වීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt16" id="mgt16_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt16_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">Learning new skills (නව කුසලතා ඉගෙනීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt16" id="mgt16_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt16_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">Get the help of a mentor (උපදේශකයෙකුගේ සහාය ලබා ගැනීම)</h5>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:1%;margin-bottom:2%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt16" id="mgt16_4" value="6">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt16_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">All of the above (ඉහත සියල්ල)</h5>
                    </label>
                </div>
            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            <input class="form-control" type="hidden" id="opCommunication" name="opCommunication" value="{{$totOpCommunication}}" readonly>
            <input class="form-control" type="hidden" id="opWorkplaceManagement" name="opWorkplaceManagement" value="{{$totOpWorkplaceManagement}}" readonly>
            <input class="form-control" type="hidden" id="opStakeholderManagement" name="opStakeholderManagement" value="{{$totOpStakeholderManagement}}" readonly>
            <input class="form-control" type="hidden" id="opTeamwork" name="opTeamwork" value="{{$totOpTeamwork}}" readonly>
        </div>
    </div>
<div class="row" style="margin-top:2%;margin-bottom:2%">
    <div class="col-12" style="text-align:right">
        <a class="btn btn-primary" href="{{ route('operationallayer') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
        <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Submit</h4></button>
    </div>
</div>
</form>
@endsection
