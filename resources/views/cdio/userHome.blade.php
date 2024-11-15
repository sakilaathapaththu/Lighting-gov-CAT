@extends('layouts.cdionavbar')

@section('content')

<body>

        <div class="container" id="div1" data-aos="fade-up" data-aos-duration="1000"  style="margin-bottom: 5%;">
            <div class="row">
                <div class="col-lg-8 col-sm-8" style="border-radius: 0px;border: 2px solid #5f2b84;">
                    <div class="row">
                        <h1 style="font-family: Poppins, sans-serif;color: #1f2471;font-weight: bold;text-align: center;margin-top:2%">User Profile</h1>
                    </div>
                    <div class="row">
                        <h3  style="color: #f01f75;font-weight: bold;font-family: Poppins, sans-serif;">General Information</h3>
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6"><img id="img"  src="{{ asset('img/User.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">Full name</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="h4"  style="font-family: Poppins;text-align: left;">{{Auth::user()->govofficial->full_name}}</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6"><img id="img"  src="{{ asset('img/Leader.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">Preferred Name</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="h4"  style="font-family: Poppins;text-align: left;">{{Auth::user()->govofficial->preferred_name}}</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6"><img id="img"  src="{{ asset('img/Group.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">Designation</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="h4"  style="font-family: Poppins;text-align: left;">{{Auth::user()->govofficial->designation}}</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6"><img id="img"  src="{{ asset('img/Building.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">Organization Name</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="h4"  style="font-family: Poppins;text-align: left;">{{Auth::user()->govofficial->govorganizationname->gov_org_name}}</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6"><img id="img"  src="{{ asset('img/Viber.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">Contact Number</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="h4"  style="font-family: Poppins;text-align: left;">{{Auth::user()->govofficial->contact_number}}</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6"><img id="img"  src="{{ asset('img/Email.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">E-mail address</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="gmail"  style="font-family: Poppins;text-align: left;">{{Auth::user()->govofficial->email}}</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6"><img id="img"  src="{{ asset('img/Menu.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">Employment Layer</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="h4"  style="font-family: Poppins;text-align: left;">{{ucfirst(Auth::user()->govofficial->employment_layer)}} Layer</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6"><img id="img"  src="{{ asset('img/Calendar.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">Date of Birthday</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="h4"  style="font-family: Poppins;text-align: left;">{{Auth::user()->govofficial->date_of_birth}}</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%"> 
                        <div class="col-6"><img id="img"  src="{{ asset('img/Email.png') }}"></div>
                        <div class="col-8" style="margin-left:-42.5%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">Social Media Links</h4></div>    
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row" style="margin-left:5%">
                                <div class="col-6"><img id="img"  src="{{ asset('img/Linkedin.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">LinkedIn</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="h4-2"  style="font-family: Poppins;text-align: left;word-break: break-all;">{{Auth::user()->govofficial->linkedin}}</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row" style="margin-left:5%">
                                <div class="col-6"><img id="img"  src="{{ asset('img/Facebook.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">Facebook</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="h4-2"  style="font-family: Poppins;text-align: left;word-break: break-all;">{{Auth::user()->govofficial->facebook}}</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%">
                        <div class="col-6">
                            <div class="row" style="margin-left:5%">
                                <div class="col-6"><img id="img"  src="{{ asset('img/Instagram.png') }}"></div>
                                <div class="col-8" style="margin-left:-35%"><h4 id="h4"   style="font-family: Poppins, sans-serif;color: rgb(0,0,0);">Instagram</h4></div>
                            </div>   
                        </div>
                        <div class="col-6">
                            <h4 id="h4-2"  style="font-family: Poppins;text-align: left;word-break: break-all;">{{Auth::user()->govofficial->instagram}}</h4>
                        </div>
                    </div>
                    <div class="row" style="margin-top:2%;margin-bottom:3%">
                        <div class="col-4" style="text-align:center">
                        @if($layer=='operational')
                            @if($ictDataExists && $digitalGovDataExists && $managementDataExists)
                            <a class="btn btn-primary" href="{{ route('operationalOveral') }}"  type="button" style="font-family: Poppins, sans-serif;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323; border-radius: 10px"><h4 id="h4" style="margin-top:2%">View Results</h4></a>
                            @else
                            <a class="btn btn-primary"  type="button" style="font-family: Poppins, sans-serif;color: #ABABAB;background: rgb(255,255,255);border-width: 2px;border-color: #ABABAB; border-radius: 10px"><h4 id="h4" style="margin-top:2%">View Results</h4></a>
                            @endif
                        @endif
                        </div>
                        <div class="col-4" style="text-align:center">
                            <a class="btn btn-primary" href="{{route('govofficials.edit',$govofficial->id)}}" id="edit"  type="button" style=";font-family: Poppins, sans-serif;border-width: 0px;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);border-width: 2px;border-color: #ef4323;border-radius: 10px"><h4 id="h4" style="margin-top:2%">Edit Profile</h4></a>
                        </div>
                        <div class="col-4" style="text-align:center">
                            <a class="btn btn-primary" href="{{route('changePassword')}}" id="edit"  type="button" style=";font-family: Poppins, sans-serif;border-width: 0px;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);border-width: 2px;border-color: #ef4323;border-radius: 10px"><h4 id="h4" style="margin-top:2%">Reset Password</h4></a>
                        </div>
                    </div>
                </div>
                <div id="div2" class="col-lg-4 col-sm-4" style="background: linear-gradient(to top right, #660066 56%, #FF6699 100%);">
                    <div class="row" >
                        <h3  id="click" style="font-family: Poppins, sans-serif;color:#fff;text-align: center;">Click on the 'Assessments' button to start the <br>Competency Assessment.&nbsp;</h3>
                    </div>
                    <div class="row" style="text-align:center">  
                        <a class="btn btn-primary" id="layerButton" href="{{route('deepMain')}}" type="button" style="margin-left:30%;margin-top:10%;text-align:center;width:40%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);border-width: 0px;font-family: Poppins, sans-serif;"><h5>Deep Assessment</h5></a>
                    </div>
                    <div class="row" style="text-align:center">  
                        <a class="btn btn-primary" id="layerButton" href="{{route('cdioAssessments')}}" type="button" style="margin-left:30%;margin-top:10%;text-align:center;width:40%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);border-width: 0px;font-family: Poppins, sans-serif;"><h5>Assessments</h5></a>
                    </div>
                </div>
            </div>
        </div>
</body>
@endsection
