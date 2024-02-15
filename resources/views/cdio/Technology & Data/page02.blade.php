

@extends('layouts.cdionavbar')

@section('content')

<form method="POST" action="{{route('deepDataManagement')}}">

    {{csrf_field()}}

    <div class="container" data-aos="fade-down" style="font-family: Poppins, sans-serif;margin-bottom:2%">

        <div class="row" style="text-align:center">

            <h2 style="color: #5F2B84;font-family: poppins;font-weight: bold;text-align: center;"><br><br><br>Deep Assessment - Technology & Data</h2>

        </div>

        

        <div class="container" style="border-style:solid;border-width:1px;border-radius:10px">

            <div class="row" style="background: #027673;height:5%;text-align:center;border-radius:10px;">

                <h5 id="h4" style="color:#fff;font-weight:bold"><br>Data Management <br></h5>

            </div>

            <div class="row" style="text-align:center">

                <h5 id="h4" style="color: rgb(0,0,0);font-weight:bold"><br> Data Management is an administrative process that includes acquiring, validating, storing, protecting, and processing required data to ensure the accessibility, reliability, and timeliness of the data for its users.

                    <br><br></h5>

            </div>

        </div>

        <div class="container" data-aos="fade-down" data-aos-duration="1000" style="text-align:left;margin-top: 2%;border-radius: 10px;border: 2px solid #5f2b84;">

        <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">7)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the authentication method used to increase the security of data processing?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td7" id="td7_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td7_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) An organization is only utilizing a single authentication factor, such as a password, pin, or something you know</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td7" id="td7_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td7_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) An organization has introduced at least two authentication factors. For example, something you know, like a password and something you have, such as a phone, token, RFID card</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td7" id="td7_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td7_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Look at true multi-factor for the authentication policy. This includes password or pin; something organizations have, like a RFID card or token; and biometric authentication, which includes facial recognition and fingerprint authentication</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td7" id="td7_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td7_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) An organization starts to look at risk mitigation and adaptive policies. For example, can identify contextual factors, such as time of day or the user’s location, and trusted devices to define authentication policies. In addition, organizations at this level support step-up authentication for high-risk access</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td7" id="td7_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td7_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) AI is introduced to look for patterns, such as observing keystrokes and interaction with the keyboard. Behavior patterns are identified by AI and defined as normal, and these patterns are compared against abnormal activity</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">8)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the approach of collecting and sharing citizens data?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td8" id="td8_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td8_1" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);"><h5 id="h4">a) No standardized approach. Data collection is unstructured and inconsistent. Data sharing is informal and limited</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td8" id="td8_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td8_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Initial efforts to standardize data collection and sharing. Data Collection is some what some standardized, but processes not fully defined. Limited formalization in data sharing only occasional sharing</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td8" id="td8_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td8_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Clearly defined processes for collecting and sharing citizens' data. Data Collection is standardized and procedures are documented. Formalized mechanisms for data sharing, within defined limits</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td8" id="td8_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td8_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Managed approach with continuous improvement. Continuous improvement with regular reviews in data collection. Proactive data sharing with monitoring and governance</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td18" id="td8_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td18_5" style="color: var(--bs-emphasis-color);">
                        <h5 id="h4">e) Optimized, efficient, and innovative practices. Continuous optimization with advanced techniques for data collection. Proactive, automated, and secure data sharing mechanisms</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">9)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> How the organization is managing the quality and the reliability of  existing data?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td9" id="td9_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td9_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a)Focused on individuals, therefore tasks are person dependent. Knowledge is lost when individual is not available. Systems in the firm are not maintained regularly. Organization is collecting data from other organizations but does not have a proper mechanism</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td9" id="td9_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td9_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Few emerging technologies are adopted or being considered</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td9" id="td9_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td9_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) Policies, standards and procedures are defined or updated. Earliest success can be repeated, because these are defined accordingly</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td9" id="td9_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td9_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) The data within the organization is standardized. This ensures sharing and reusing and the organization sets quantitative goals for both products and processes with well-defined measurements</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td9" id="td9_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td9_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) The main focus of the organization is to reduce waste. The enterprise standard architecture model of the organization is defined, this can help in the successful development and execution of a strategy. Data collect from the well-defined mechanism and standard. Continuously verify and validate the existing data from various well-established sources. All data been cross functional validated</h5></label>

                </div>

            </div>

            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">10)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%"> How is the organization keep data in digital form to share data in various forms with internally and external parties?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td10" id="td10_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td10_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) The Organization has limited digitalization. Rarely interlinked IT system and data are stored in individual formats. No digitalization strategy are available</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td10" id="td10_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td10_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Digitalization is the focus of only some divisions and their linkage. Data can be converted into standard format and digitalization strategy is planned. Data is sharing with limited internal divisions. There are no proper authentication process </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td10" id="td10_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td10_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) 
                        Digitalization data available in the organization and integrated with other divisions. IT systems are interlinked and data available in digital format for other departments. Digitalization strategy is in development</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td10" id="td10_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td10_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d) Leaders centrally use data for decision making within their organization. However, they also use data for competitive intelligence. In order to accomplish organizational missions and business success, Leaders use third party datasets in addition to their own data</h5></label>

                </div>

            </div>


            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td10" id="td10_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td10_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e) Data is used for more than just analysis and observation. In fact, organizations that are Innovators are using data to create algorithms and predict how they can stay ahead of the game. With data governance being a part of the entire organizational business strategy, Innovators must constantly utilize data in new ways to adapt to the uncertainty of the future. Organization able to share data in various forms with internally and external parties</h5></label>

                </div>

            </div>

            
            <div class="row">

                <div class="col-1" style="margin-top:2%">

                    <h5 id="h4" style="color: #1f2471;">11)</h5>

                </div>

                <div class="col-11">

                    <h5 id="h4" style="color: #1f2471;margin-top:2%;margin-left:-4%">What is the way of accessing to data?</h5>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td11" id="td11_1" value="1">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td11_1" style="color: var(--bs-emphasis-color);"><h5 id="h4">a) Data access involves physical retrieval, either walking to data owners or receiving data via email and drop boxes. Access is not secure, relying on shared passwords</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td11" id="td11_2" value="2">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td11_2" style="color: var(--bs-emphasis-color);"><h5 id="h4">b) Enterprise data is stored in databases, enabling programmatic access. Access is facilitated through APIs, shortening the data request cycle. Hardware devices with one-time passwords (OTP) are introduced for enhanced security</h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td11" id="td11_3" value="3">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td11_3" style="color: var(--bs-emphasis-color);"><h5 id="h4">c) 
                        Data access faces growing pains with increased volume and diverse sources. Data scientists request broad and narrow access, causing backlogs. Traditional databases are supplemented with big data repositories. Hardware devices like smart tokens are introduced </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td11" id="td11_4" value="4">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td11_4" style="color: var(--bs-emphasis-color);"><h5 id="h4">d)Access control is addressed to varying degrees. Enterprise-wide self-service access request applications are introduced, integrated with metadata management tools. Biometric authentication methods, including retina and fingerprint scans, are used </h5></label>

                </div>

            </div>

            <div class="row" style="margin-top: 1%">

                <div class="col-1" style="text-align:right">

                    <input type="radio" name="td11" id="td11_5" value="5">

                </div>

                <div class="col-11" style="text-align:left">

                    <label for="td11_5" style="color: var(--bs-emphasis-color);"><h5 id="h4">e)
                        The organization standardizes identity management and auditing for secure data access. Emphasis shifts to tracking the lineage of data science work products. Contextual authentication, considering signals like geolocation, is introduced for added assurance </h5></label>

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