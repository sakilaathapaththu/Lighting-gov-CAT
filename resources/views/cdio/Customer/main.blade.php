@extends('layouts.cdionavbar')

@section('content')
<div class="container" id="div4" style=" margin-bottom: 0%; font-family: Poppins, sans-serif;">
    <div class="row" data-aos="fade-down" data-aos-duration="950">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('userHome')}}"><h10 id="h4">Home</h10></a></li>
                    <li class="breadcrumb-item"><a href="{{route('deepMain')}}"><h10 id="h4">Deep Assessment</h10></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><h10 id="h4">Customer</h10></li>
                </ol>
            </nav>
        </div>
    </div>    
    <div class="row" data-aos="fade-down" data-aos-duration="950">
            <h1 id="h1" style="font-weight: bold; text-align: center; ">Customer</h1>
        </div> 
        
        </div>

    </div>

        <div class="row" style=" margin-top: -1%;">
            <div class="col-lg-6 col-md-6"  style="height: 50%;font-family: Poppins, sans-serif;">
                <div class="container" id="card3" data-aos="fade-right" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;border-radius: 10px;">
                    <div class="row" style="background-color: #52ED59; align-items: center; border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Citizen Experience Strategy</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Citizen Experience Strategy sub dimension.</p>
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
                            <a class="btn btn-primary" id="continue_btn" type="button" href="{{route('deepCusPage01')}}" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; border-radius: 2%;">
                <div class="container" id="card3" data-aos="fade-left" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%;border-radius: 10px;">
                    <div class="row" style="background-color: #52ED59; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Citizen Engagement</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Citizen Engagement sub dimension.</p>
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
                            <a class="btn btn-primary" id="continue_btn" href="{{route('deepCusPage02')}}" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style=" margin-top: 2%;">
            <div class="col-lg-6 col-md-6"  style="   height: 50%;font-family: Poppins, sans-serif; border-radius: 2%;">
                <div class="container" id="card3" data-aos="fade-right" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;border-radius: 10px;">
                    <div class="row" style="background-color: #52ED59; align-items: center;border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Citizen Experience</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Citizen Experience sub dimension.</p>
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
                            <a class="btn btn-primary" id="continue_btn" type="button" href="{{route('deepCusPage03')}}" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; border-radius: 2%; margin-bottom: 7%;">
                <div class="container" id="card3" data-aos="fade-left" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%; border-radius: 10px;">
                    <div class="row" style="background-color: #52ED59; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Citizen Trust & Perception</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Citizen Trust & Perception sub dimension.</p>
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
                            <a class="btn btn-primary" id="continue_btn" type="button" href="{{route('deepCusPage04')}}" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style=" margin-top: -5%;">
            <div class="col-lg-6 col-md-6"  style="   height: 50%;font-family: Poppins, sans-serif; border-radius: 2%;">
                <div class="container" id="card4" data-aos="fade-up" data-aos-duration="950"  style="box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%; border-radius: 10px; margin-bottom: 10%;">
                    <div class="row" style="background-color: #52ED59; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #000; margin-top: 2%;">Citizen Insights & Behavior</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Citizen Insights & Behavior sub dimension.</p>
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
                            <a class="btn btn-primary" id="continue_btn" type="button" href="{{route('deepCusPage05')}}" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>

           
        </div>

        
    </div>
@endsection