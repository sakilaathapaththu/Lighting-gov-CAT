@extends('layouts.cdionavbar')

@section('content')
<div class="container" id="div4" style=" margin-bottom: 0%; font-family: Poppins, sans-serif;">
    <div class="row" data-aos="fade-down" data-aos-duration="950">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('userHome')}}"><h10 id="h4">Home</h10></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><h10 id="h4">Deep Assessment</h10></li>
                </ol>
            </nav>
        </div>
    </div> 
    <div class="row" data-aos="fade-down" data-aos-duration="950">
        <h1 id="h1" style="font-weight: bold; text-align: center;">Deep Assessment</h1>
    </div>

    <div class="container" data-aos="fade-down" data-aos-duration="950" style="margin-top: 2%; height: 50%;">
       <div class="row" style="border: 1px solid;border-color:#000; border-radius:10px">
            <div class="col-lg-8 col-md-8">
                <h5 id="h5" style="text-align: center; margin-top: 5%; margin-bottom: 5%; ">Here you can download Deep Assessment Questionnaire</h5>
            </div>
            <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                <button class="btn btn-primary" id="continue_btn" type="button" style="background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);text-align: center;border-style: none;text-align: center; margin-top: 9%; width: 60%; height: 40%;"><h5 id="h5">Download</h5></button>
            </div>
        </div> 
        
        </div>

    </div>

        <div class="row">
            <div class="col-lg-6 col-md-6"  style="height: 50%;font-family: Poppins, sans-serif;margin-top: 5%; ">
                <div class="container" id="card3" data-aos="fade-right" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;">
                    <div class="row" style="background-color: #5F2B84; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Technology & Data</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the technology and data main dimension.</p>
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

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif;margin-top: 5%; ">
                <div class="container" id="card3" data-aos="fade-left" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%;">
                    <div class="row" style="background-color: #5F2B84; align-items: center;border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Customer</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Customer main dimension.</p>
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
                    <div class="row" style="background-color: #5F2B84; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Operation</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Operation main dimension.</p>
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
                    <div class="row" style="background-color: #5F2B84; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Strategy</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Strategy main dimension.</p>
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
                    <div class="row" style="background-color: #5F2B84; align-items: center;border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Organization & Culture</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Organization & Culture main dimension.</p>
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
                            <a class="btn btn-primary" id="continue_btn" href="{{route('deepOrganization')}}" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);"><h6 id="h5">Continue</h6></a>
                        </div>
                        
                    </div>
                </div>
            </div>

    </div>
@endsection