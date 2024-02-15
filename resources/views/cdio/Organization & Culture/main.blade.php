@extends('layouts.cdionavbar')

@section('content')
<div class="container" id="div4" style=" margin-bottom: 0%; font-family: Poppins, sans-serif;">
    <div class="row" data-aos="fade-down" data-aos-duration="950">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('userHome')}}"><h10 id="h4">Home</h10></a></li>
                    <li class="breadcrumb-item"><a href="{{route('deepMain')}}"><h10 id="h4">Deep Assessment</h10></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><h10 id="h4">Organizations & Culture</h10></li>
                </ol>
            </nav>
        </div>
    </div> 
    <div class="row" data-aos="fade-down" data-aos-duration="950">
            <h1 id="h1" style="font-weight: bold; text-align: center; ">Organizations & Culture</h1>
        </div> 
        
        </div>

    </div>
    <div class="row">
            <div class="col-lg-6 col-md-6"  style="height: 50%;font-family: Poppins, sans-serif; ">
                <div class="container" id="card3" data-aos="fade-right" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;">
                    <div class="row" style="background-color: #037774; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Leadership and Culture</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the leadership and culture sub dimension.</p>
                    </div>
                    <div class="row" style=" align-items: center;">
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
                            <a class="btn btn-primary" id="continue_btn" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);" href="{{route('deepTechnology')}}"><h6 id="h5">Continue</h6></a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; ">
                <div class="container" id="card3" data-aos="fade-left" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%;">
                    <div class="row" style="background-color: #037774; align-items: center;border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Standards and Governance</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Standards and Governance sub dimension.</p>
                    </div>
                    <div class="row" style="align-items: center;">
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
                            <a class="btn btn-primary" id="continue_btn" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);" href="{{route('deepCustomer')}}"><h6 id="h5">Continue</h6></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 col-md-6"  style="height: 50%;font-family: Poppins, sans-serif;margin-top: 5%;">
                <div class="container" id="card3" data-aos="fade-right" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;">
                    <div class="row" style="background-color: #037774; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Employee Enablement / Employee Engagement</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Employee Enablement / Employee Engagement sub dimension.</p>
                    </div>
                    <div class="row" style="align-items: center;">
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
                            <a class="btn btn-primary" id="continue_btn" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);" href="{{route('deepOperation')}}"><h6 id="h5">Continue</h6></a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; margin-top: 5%;">
                <div class="container" id="card3" data-aos="fade-left" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%;">
                    <div class="row" style="background-color: #037774; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Level of Skill</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Level of Skill sub dimension.</p>
                    </div>
                    <div class="row" style=" align-items: center;">
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
                            <a class="btn btn-primary" id="continue_btn" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);" href="{{route('deepStrategy')}}"><h6 id="h5">Continue</h6></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6"  style="height: 50%;font-family: Poppins, sans-serif; margin-top: 8%;">
                <div class="container" id="card4" data-aos="fade-right" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center;">
                    <div class="row" style="background-color: #037774; align-items: center;border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Organization design and Talent management </h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Organization design and Talent management sub dimension.</p>
                    </div>
                    <div class="row" style="align-items: center;">
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
                            <a class="btn btn-primary" id="continue_btn" href="" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);"><h6 id="h5">Continue</h6></a>
                        </div>
                        
                    </div>
                </div>
            </div>

    </div>
@endsection