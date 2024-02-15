@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('storeCdioHumanResource')}}">
    {{csrf_field()}}
<div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Self Assessment -Management (CDIO)</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Competency Area: Managing human resources to enhance performance in Digital Government <br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br>Human Resource performance management best practices in digital government setting<br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">28)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the primary purpose of a Chief Digital Information Officer (CDIO) in identifying reskilling and upskilling requirements?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt28" id="mgt28_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt28_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)  To eliminate workforce diversity</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt28" id="mgt28_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt28_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To restrict professional growth</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt28" id="mgt28_3" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt28_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To meet changing technology demands</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt28" id="mgt28_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt28_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To discourage employee development</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">29)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the primary objective of a Chief Digital Information Officer (CDIO) in developing successors for digital government initiatives?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt29" id="mgt29_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt29_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) To maintain the status quo</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt29" id="mgt29_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt29_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To create competition among team members</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt29" id="mgt29_3" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt29_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To ensure sustainability of digital initiatives   </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt29" id="mgt29_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt29_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d)  To discourage leadership development</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">30)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">  What is synergy effect in a digital government organization?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt30" id="mgt30_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt30_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)When the organization is providing a product to the customer that perfectly suites their requirements</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt30" id="mgt30_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt30_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) When the parts of an organization are combined and managed in such a way that the benefits exceed those which would result if the parts were operating separately</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt30" id="mgt30_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt30_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) When the parts of an organization are combined and managed in such a way to reduce costs</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt30" id="mgt30_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt30_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) All of the above </h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">31)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> What is the role of a Chief Digital Information Officer (CDIO) in the context of HR planning for organizational digital transformational strategy?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt31" id="mgt31_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt31_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) To discourage HR involvement</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt31" id="mgt31_2" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt31_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To solely implement the strategy </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt31" id="mgt31_3" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt31_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To provide consultative support </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt31" id="mgt31_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt31_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To avoid strategic planning</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">32)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> Which one of the following is not related to the performance management in a digital government:</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt32" id="mgt32_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt32_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Means managing the performance of an organization or an individual</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt32" id="mgt32_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt32_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Is not related to the public sector </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt32" id="mgt32_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt32_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Is what you do to improve or what you do to maintain good performance</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt32" id="mgt32_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt32_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Should help managers to understand how well the organization, parts of the organization and individuals are performing </h5></label>

                </div>

            </div>


            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">33)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> In a digital environment, which one of the following is not identified as an advantage of innovation?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt33" id="mgt33_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt33_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Improved productivity</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt33" id="mgt33_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt33_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Increased costs </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt33" id="mgt33_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt33_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Increased competitiveness</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt33" id="mgt33_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt33_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Increased competitiveness</h5></label>

                </div>

            </div>



            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">34)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> In the context of a CDIO's responsibilities, what is the purpose of fostering competence in teams?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt34" id="mgt34_1" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt34_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) To impede innovation</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt34" id="mgt34_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt34_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) To ensure effective delivery of digital initiatives </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt34" id="mgt34_3" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt34_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) To discourage productivity</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="mgt34" id="mgt34_4" value="0">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="mgt34_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) To create confusion </h5></label>

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