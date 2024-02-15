@extends('layouts.cdionavbar')

@section('content')
<div class="container" id="div4" style=" margin-bottom: 0%; font-family: Poppins, sans-serif;">
        <!-- <div class="row" id="links">
            <div class="col-xl-2" id="link1" style="margin-top: 5%;margin-left: 5%;width: 20%;"><a href="#" style="color: var(--bs-gray-500);">Deep Assessment &gt;&nbsp;&nbsp;</a></div>
            <div class="col-xxl-2" id="link2" style="margin-top: 5%;"><a href="#" style="color: var(--bs-emphasis-color);">Technology & Data</a></div>
        </div> -->
    <div class="row" data-aos="fade-down" data-aos-duration="950">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('userHome')}}"><h10 id="h4">Home</h10></a></li>
                    <li class="breadcrumb-item"><a href="{{route('deepMain')}}"><h10 id="h4">Deep Assessment</h10></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><h10 id="h4">Technology & Data</h10></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container" data-aos="fade-down" data-aos-duration="950" style=" margin-bottom: 0%; font-family: Poppins, sans-serif;">
        <div class="row">
            <h1 id="h1" style="font-weight: bold; text-align: center;">Technology & Data</h1>
        </div>     
    </div>

    </div>

        <div class="row" style=" margin-top: -1%;">
            <div class="col-lg-6 col-md-6"  style="   height: 50%;font-family: Poppins, sans-serif;">
                <div class="container" id="card1" data-aos="fade-right" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;border-radius: 10px;">
                    <div class="row" style="background-color: #64CDDB; align-items: center; border-radius: 10px 10px 0px 0px; ">
                          <h5 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Emerging Technology and Applications</h5>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Emerging Technology and Applications sub dimension.</p>
                    </div>
                    <div class="row" id="img" style=" align-items: center;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% Complete
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                           <p id="para" style="margin-top: 2%;">You can continue the assessment</p>
                        </div>
                        <div class="col-xs-6 col-md-4" id="continue_btn">
                            <a class="btn btn-primary" href="{{route('deepTdPage01')}}" id="btn2" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; border-radius: 2%;">
                <div class="container" id="card2" data-aos="fade-left" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%;border-radius: 10px;">
                    <div class="row" style="background-color: #64CDDB; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Data Management</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Data Management sub dimension.</p>
                    </div>
                    <div class="row" id="img" style=" align-items: center;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% Complete
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                           <p id="para" style="margin-top: 2%;">You can continue the assessment</p>
                        </div>
                        <div class="col-xs-6 col-md-4" id="continue_btn">
                            <a class="btn btn-primary" href="{{route('deepTdPage02')}}" id="btn2" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style=" margin-top: 2%;">
            <div class="col-lg-6 col-md-6"  style="   height: 50%;font-family: Poppins, sans-serif; border-radius: 2%;">
                <div class="container" id="card1" data-aos="fade-right" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;border-radius: 10px;">
                    <div class="row" style="background-color: #64CDDB; align-items: center;border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Delivery Governance</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Delivery Governance sub dimension.</p>
                    </div>
                    <div class="row" id="img" style=" align-items: center;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% Complete
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                           <p id="para" style="margin-top: 2%;">You can continue the assessment</p>
                        </div>
                        <div class="col-xs-6 col-md-4" id="continue_btn">
                            <a class="btn btn-primary" href="{{route('deepTdPage03')}}" id="btn2" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; border-radius: 2%; margin-bottom: 7%;">
                <div class="container" id="card2" data-aos="fade-left" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%; border-radius: 10px;">
                    <div class="row" style="background-color: #64CDDB; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Connectivity / Network</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Connectivity / Network sub dimension.</p>
                    </div>
                    <div class="row" id="img" style=" align-items: center;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% Complete
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                           <p id="para" style="margin-top: 2%;">You can continue the assessment</p>
                        </div>
                        <div class="col-xs-6 col-md-4" id="continue_btn">
                            <a class="btn btn-primary" href="{{route('deepTdPage04')}}" id="btn2" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style=" margin-top: -5%;">
            <div class="col-lg-6 col-md-6"  style="   height: 50%;font-family: Poppins, sans-serif; border-radius: 2%;">
                <div class="container" id="card1" data-aos="fade-right" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%; border-radius: 10px;">
                    <div class="row" style="background-color: #64CDDB; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Security</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Security sub dimension.</p>
                    </div>
                    <div class="row" id="img" style=" align-items: center;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% Complete
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                           <p id="para" style="margin-top: 2%;">You can continue the assessment</p>
                        </div>
                        <div class="col-xs-6 col-md-4" id="continue_btn">
                            <a class="btn btn-primary" href="{{route('deepTdPage05')}}" id="btn2" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; border-radius: 2%; margin-bottom: 7%;">
                <div class="container" id="card2" data-aos="fade-left" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%; border-radius: 10px;">
                    <div class="row" style="background-color: #64CDDB; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Technology Architecture</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Technology Architecture sub dimension.</p>
                    </div>
                    <div class="row" id="img" style=" align-items: center;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% Complete
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                           <p id="para" style="margin-top: 2%;">You can continue the assessment</p>
                        </div>
                        <div class="col-xs-6 col-md-4" id="continue_btn">
                            <a class="btn btn-primary" href="{{route('deepTdPage06')}}" id="btn2" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style=" margin-top: -5%;">
            <div class="col-lg-6 col-md-6"  style="   height: 50%;font-family: Poppins, sans-serif; border-radius: 2%;">
                <div class="container" id="card1" data-aos="fade-right" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;border-radius: 10px;">
                    <div class="row" style="background-color: #64CDDB; align-items: center;border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">  Data Governance</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the  Data Governance sub dimension.</p>
                    </div>
                    <div class="row" id="img" style=" align-items: center;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% Complete
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                           <p id="para" style="margin-top: 2%;">You can continue the assessment</p>
                        </div>
                        <div class="col-xs-6 col-md-4" id="continue_btn">
                            <a class="btn btn-primary" href="{{route('deepTdPage07')}}" id="btn2" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; border-radius: 2%; margin-bottom: 7%;">
                <div class="container" id="card2" data-aos="fade-left" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%;border-radius: 10px;">
                    <div class="row" style="background-color: #64CDDB; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">  Data Engineering</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the  Data Engineering sub dimension.</p>
                    </div>
                    <div class="row" id="img" style=" align-items: center;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% Complete
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                           <p id="para" style="margin-top: 2%;">You can continue the assessment</p>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <a class="btn btn-primary" href="{{route('deepTdPage08')}}" id="continue_btn" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style=" margin-top: -5%;">
            <div class="col-lg-6 col-md-6"  style="   height: 50%;font-family: Poppins, sans-serif; border-radius: 2%;">
                <div class="container" id="card1" data-aos="fade-right" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;border-radius: 10px;">
                    <div class="row" style="background-color: #64CDDB; align-items: center;border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">   Interoperability</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the   Interoperability sub dimension.</p>
                    </div>
                    <div class="row" id="img" style=" align-items: center;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% Complete
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                           <p id="para" style="margin-top: 2%;">You can continue the assessment</p>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <a class="btn btn-primary" href="{{route('deepTdPage09')}}" id="continue_btn" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; border-radius: 2%; margin-bottom: 7%;">
                <div class="container" id="card2" data-aos="fade-left" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%;border-radius: 10px;">
                    <div class="row" style="background-color: #64CDDB; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">   Application for Users</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the   Application for Users sub dimension.</p>
                    </div>
                    <div class="row" id="img" style=" align-items: center;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                40% Complete
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 3%;">
                        <div class="col-xs-12 col-sm-6 col-md-8">
                           <p id="para" style="margin-top: 2%;">You can continue the assessment</p>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <a class="btn btn-primary" href="{{route('deepTdPage10')}}" id="continue_btn" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        
    </div>
@endsection