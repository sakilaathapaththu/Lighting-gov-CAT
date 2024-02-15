@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioDigitalInitiative')}}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
                <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Digital Government (CDIO)</h2>
        </div>
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #5f2b84;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Carryout Digital Government initiatives in organizations<br><br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Carry out activities in digital government initiatives<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">26)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">As a CDIO, what are the common challenges you face during the planning of ICT procurements required in digital government initiatives?</h5>
                </div>
            </div>
            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg26" id="dg26_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg26_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) Costs involved</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg26" id="dg26_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg26_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Realistic schedules</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg26" id="dg26_3" value="0">
                </div>  
                <div class="col-11" style="text-align:left">
                    <label for="dg26_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Right stakeholders</h5></label>
                </div>      
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg26" id="dg26_4" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg26_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">27)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What do you understand by Outsourcing? </h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg27" id="dg27_1" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg27_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Is an approach to outsourcing in which IT operations and technology infrastructure are contracted to a number of vendors, usually in combination with some internally provided elements of information technology</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg27" id="dg27_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg27_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Only one supplier is awarded business for a particular component, part or material even though there are other suppliers that can provide that same supply</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg27" id="dg27_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg27_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) A manufacturer uses a single supplier for one part or service, and another supplier with the same basic capabilities for a different part or service</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg27" id="dg27_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg27_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) A sourcing strategy in which two suppliers are used for the same purchased product or service</h5>
                    </label>
                </div>
                <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">28)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is true about by Outsourcing?</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg28" id="dg28_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg28_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Is the business practice of hiring a party outside a company to perform services or create goods that were traditionally performed in-house by the company's own employees and staff. </h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg28" id="dg28_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg28_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Outsourcing is a practice usually undertaken by companies as a cost-cutting measure.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg28" id="dg28_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg28_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Advertising, office and warehouse cleaning, and website development are the few examples of outsourcing. </h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg28" id="dg28_4" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg28_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) All of the above </h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">29)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Which one of the following is false when considering effective service delivery of a digital government.</h5>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg29" id="dg29_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg29_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">
                        <h5 id="h4">a) Front office should be staffed at all times during business hours.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg29" id="dg29_2" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg29_2" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">b) Customers should wait for an employee to show up or need to go in to search of somebody. </h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg29" id="dg29_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg29_3" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">c) Need to have a system in place for desk coverage during lunch and breaks.</h5>
                    </label>
                </div>
            </div>

            <div class="row" style="margin-top:1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="dg29" id="dg29_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="dg29_4" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">d) Your front office often is the point of initial contact for your customer. </h5>
                    </label>
                </div>
            </div>
            <input class="form-control" type="hidden" id="totCdioProjectAndProgrammeManagement" name="totCdioProjectAndProgrammeManagement" value="{{$totCdioProjectAndProgrammeManagement}}" readonly>
            <input class="form-control" type="hidden" id="totCdioChangeManagement" name="totCdioChangeManagement" value="{{$totCdioChangeManagement}}" readonly>
            <input class="form-control" type="hidden" id="totCdioCollaboration" name="totCdioCollaboration" value="{{$totCdioCollaboration}}" readonly>
            <input class="form-control" type="hidden" id="totCdioOrientation" name="totCdioOrientation" value="{{$totCdioOrientation}}" readonly>
            <input class="form-control" type="hidden" id="totCdioManagingQuality" name="totCdioManagingQuality" value="{{$totCdioManagingQuality}}" readonly>
            <input class="form-control" type="hidden" id="totCdioDriveTheAdoption" name="totCdioDriveTheAdoption" value="{{$totCdioDriveTheAdoption}}" readonly>
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
