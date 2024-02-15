@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioCommunication')}}">
    {{csrf_field()}}
    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">
        <div class="row" style="text-align:center">
            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (CDIO)</h2>
        </div>
        
        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">
            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">
                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Communication in Digital Government<br></h5>
            </div>
            <div class="row" style="text-align:center">
                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Establishing effective communication best practices to achieve organizational goals and objectives and champion transparent communication in digital government<br><br></h5>
            </div>
        </div>
        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">1)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is conceptualizing consultative stakeholder communication important for a CDIO?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt1" id="mgt1_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt1_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) To avoid communication with stakeholders</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt1" id="mgt1_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt1_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To streamline decision-making without stakeholder input</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt1" id="mgt1_3" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt1_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To build a collaborative approach and gather valuable insights from stakeholders </h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt1" id="mgt1_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt1_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To limit transparency in communication</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">2)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is it important for a Chief Digital Information Officer (CDIO) to inspire others to understand the purpose and strategic direction towards a digital government?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt2" id="mgt2_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt2_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To discourage the adoption of digital technologies</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt2" id="mgt2_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt2_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To create confusion among team members</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt2" id="mgt2_3" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt2_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To align the team with the organization's digital goals </h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt2" id="mgt2_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt2_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To promote resistance to change</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">3)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How does increased usage of digital means in communication benefit an organization?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt3" id="mgt3_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt3_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) It slows down communication processes</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt3" id="mgt3_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt3_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) It promotes isolation among team members</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt3" id="mgt3_3" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt3_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) It enhances efficiency and accessibility of communication </h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt3" id="mgt3_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt3_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) It leads to outdated communication methods</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">4)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">Why is maintaining a positive perception towards feedback important for a Chief Digital Information Officer (CDIO)?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt4" id="mgt4_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt4_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) To avoid receiving feedback</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt4" id="mgt4_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt4_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To discourage communication within the team</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt4" id="mgt4_3" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt4_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To foster a culture of continuous improvement</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt4" id="mgt4_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt4_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To create a negative work environment</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">5)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">How to encourage employee Buy-In for Digital Transformation?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Back Up Your Strategy with Statistics</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Tailor Your Strategy Presentation to Each Audience</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Start Small with Digital Transformation</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt5" id="mgt5_4" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt5_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">6)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the role of guidance in the context of digitalization efforts led by a CDIO?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt6" id="mgt6_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt6_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) It slows down the progress of initiatives</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt6" id="mgt6_2" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt6_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) It creates unnecessary complexity</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt6" id="mgt6_3" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt6_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) It helps streamline and direct digitalization efforts</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt6" id="mgt6_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt6_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) It discourages team members from participating</h5></label>
                </div>
            </div>
            <div class="row">
                <div class="col-1" style="margin-top:2%">
                    <h5 id="h4" style="color: #1f2471;">7)</h5>
                </div>
                <div class="col-11">
                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What role does credibility play in the relationship between a CDIO and subordinates?</h5>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt7" id="mgt7_1" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt7_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) It hinders effective communication</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt7" id="mgt7_2" value="3">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt7_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) It fosters a culture of transparency and trust </h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt7" id="mgt7_3" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt7_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) It encourages dishonesty and secrecy</h5></label>
                </div>
            </div>

            <div class="row" style="margin-top: 1%">
                <div class="col-1" style="text-align:right">
                    <input type="radio" name="mgt7" id="mgt7_4" value="0">
                </div>
                <div class="col-11" style="text-align:left">
                    <label for="mgt7_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) It has no impact on professional relationships</h5></label>
                </div>
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
