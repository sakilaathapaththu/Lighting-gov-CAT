@extends('layouts.cdionavbar')

@section('content')
<div class="container" id="div4" style=" margin-bottom: 0%; font-family: Poppins, sans-serif;">
    <div class="row" data-aos="fade-down" data-aos-duration="950">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('userHome')}}"><h10 id="h4">Home</h10></a></li>
                    <li class="breadcrumb-item"><a href="{{route('deepMain')}}"><h10 id="h4">Deep Assessment</h10></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><h10 id="h4">Operation</h10></li>
                </ol>
            </nav>
        </div>
    </div> 
    <div class="row" data-aos="fade-down" data-aos-duration="950">
            <h1 id="h1" style="font-weight: bold; text-align: center; ">Operation</h1>
        </div> 
        
        </div>

    </div>

        <div class="row" style=" margin-top: 2%;">
            <div class="col-lg-6 col-md-6"  style="height: 50%;font-family: Poppins, sans-serif; ">
                <div class="container" id="card3" data-aos="fade-right" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;">
                    <div class="row" style="background-color: #5F2B84; align-items: center;border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Agile Change Management</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Agile Change Management sub dimension.</p>
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
                            <a class="btn btn-primary" href="{{route('deepOpPage01')}}" id="btn2" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; ">
                <div class="container" id="card3" data-aos="fade-left" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%;">
                    <div class="row" style="background-color: #5F2B84; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Integrated Service Management</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Integrated Service Management sub dimension.</p>
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
                            <a class="btn btn-primary" id="btn2" href="{{route('deepOpPage02')}}" type="button" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style=" margin-top: 5%;">
            <div class="col-lg-6 col-md-6"  style="height: 50%;font-family: Poppins, sans-serif;">
                <div class="container" id="card3" data-aos="fade-right" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color);border-color: #5F2B84; text-align: center; margin-top: 5%;">
                    <div class="row" style="background-color: #5F2B84; align-items: center;border-radius: 10px 10px 0px 0px; ">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Real Time Insights and Analytics</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 40% under the Real Time Insights and Analytics sub dimension.</p>
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
                            <a class="btn btn-primary" id="btn2" type="button" href="{{route('deepOpPage03')}}" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6"  style=" height: 50%;font-family: Poppins, sans-serif; margin-bottom: 7%;">
                <div class="container" id="card3" data-aos="fade-left" data-aos-duration="950"  style="border-radius: 10px;box-shadow: 0px 10px 10px 1px var(--bs-body-color); border-color: #5F2B84; text-align: center; margin-top: 5%;">
                    <div class="row" style="background-color: #5F2B84; align-items: center; border-radius: 10px 10px 0px 0px;">
                          <h4 id="h4" style="font-family: Poppins, sans-serif; color: #fff; margin-top: 2%;">Smart Process Management</h4>
                    </div>
                    <div class="row">
                        <p id="para" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 3%;">Your organization has completed 76% under the Smart Process Management sub dimension.</p>
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
                            <a class="btn btn-primary" id="btn2" type="button" href="{{route('deepOpPage04')}}" style="font-family: 'Poppins';border-style: none;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);">Continue</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection