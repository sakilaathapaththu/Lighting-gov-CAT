

@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="{{route('deepDataEngineering')}}">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Technology & Data</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Data Engineering<br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br> Is the aspect of data science that focuses on practical applications of data collection and analysis

                    <br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">29)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the strategy of data analytics?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td29" id="td29_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td29_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) An organization is only utilizing a single authentication factor, such as a password, pin, or something you know</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td29" id="td29_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td29_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) An organization has introduced at least two authentication factors. For example, something you know, like a password and something you have, such as a phone, token, RFID card</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td29" id="td29_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td29_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Look at true multi-factor for the authentication policy. This includes password or pin; something organizations have, like a RFID card or token; and biometric authentication, which includes facial recognition and fingerprint authentication</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td29" id="td29_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td29_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) An organization starts to look at risk mitigation and adaptive policies. For example, can identify contextual factors, such as time of day or the user’s location, and trusted devices to define authentication policies. In addition, organizations at this level support step-up authentication for high-risk access</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td29" id="td29_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td29_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) AI is introduced to look for patterns, such as observing keystrokes and interaction with the keyboard. Behavior patterns are identified by AI and defined as normal, and these patterns are compared against abnormal activity</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">30)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What strategy is used to manage data?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td30" id="td30_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td30_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) No standardized approach. Data collection is unstructured and inconsistent. Data sharing is informal and limited</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td30" id="td30_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td30_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Initial efforts to standardize data collection and sharing. Data Collection is some what some standardized, but processes not fully defined. Limited formalization in data sharing only occasional sharing</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td30" id="td30_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td30_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Clearly defined processes for collecting and sharing citizens' data. Data Collection is standardized and procedures are documented. Formalized mechanisms for data sharing, within defined limits</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td30" id="td30_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td30_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Managed approach with continuous improvement. Continuous improvement with regular reviews in data collection. Proactive data sharing with monitoring and governance</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td30" id="td30_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td30_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Optimized, efficient, and innovative practices. Continuous optimization with advanced techniques for data collection. Proactive, automated, and secure data sharing mechanisms</h5></label>

                </div>

            </div>
            <input class="form-control" type="hidden" id="govofficial_id" name="govofficial_id" value="{{Auth::user()->govofficial->id}}" readonly>
            </div>
            <div class="row" style="margin-top:2%;margin-bottom:2%">
                <div class="col-12" style="text-align:right">
                    <a class="btn btn-primary" href="{{ route('deepTechnology') }}" type="button" style="width:25%;background: var(--bs-btn-disabled-color);border-width: 3px;border-color: #EF4323;font-size: 20px;font-weight: bold;border-radius: 10px;"><h4 id="h4" style="color:#EF4323">Resume</h4></a>
                    <button class="btn btn-primary" type="submit" style="border-width: 3px;border-color: #EF4323;width:25%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-weight: bold;border-radius: 10px;"><h4 id="h4">Submit</h4></button>
                </div>
            </div>
</form>
@endsection