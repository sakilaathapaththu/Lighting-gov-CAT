@extends('layouts.govofficialnavbar')

@section('content')

<div class="container" id="div4"  style="background: linear-gradient(to top right, #660066 56%, #FF6699 100%);  text-align:center; margin-bottom:5%; border-radius:1%;padding-bottom:3%">
        <div class="row"  style="text-align:center">
            <h1  id="h1" style="text-align: center;font-family: Poppins, sans-serif;padding-top: 3%;">Create Account</h1>
        </div>
        <form id="form" method="POST" action="{{ route('register') }}" onsubmit="return submitForm(this);">
                {{csrf_field()}}
        <div class="container" style=" background-color:#fff; border-radius:1%; font-family: Poppins, sans-serif;">
            <div class="row" style="margin-top:5%;">
                <div class="col-lg-6 col-md-6" style="margin-top:4%;">
                    <div class="row">
                         <h5 id="h5" style="margin-top:5%; color: #5F2B84; text-align:left;"> Username</h5>
                    </div>
                    <div class="row">
                    <input class="form-control-lg" id="username" name="username" type="text" placeholder="Enter Username" style="width:80%;margin-left:10%;" value="{{ old('username')}}">
                    @if($errors->has('username'))
                                    <p class="text-danger" style="font-weight: bold">{{ $errors->first('username') }}</p>
                                    @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" style="margin-top:4%;">
                    <div class="row">
                         <h5 id="h5" style="margin-top:5%; color: #5F2B84; text-align:left;"> Email</h5>
                    </div>
                    <div class="row">
                    <input class="form-control-lg" id="email" name="email" type="email" placeholder="Enter Email" style="width:80%;margin-left:10%" value="{{ old('email')}}">
                    @if($errors->has('email'))
                                    <p class="text-danger" style="font-weight: bold">{{ $errors->first('email') }}</p>
                                    @endif
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6" style="margin-top:3%;">
                    <div class="row">
                         <h5 id="h5" style="margin-top:6%; color: #5F2B84; text-align:left;"> Create Password</h5>
                    </div>
                    <div class="row">
                    <input class="form-control-lg" id="password" name="password" type="password" placeholder="Enter the Password" style="width:80%;margin-left:10%" value="{{ old('password')}}">
                    @if($errors->has('password'))
                                    <p class="text-danger" style="font-weight: bold">{{ $errors->first('password') }}</p>
                                    @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" style="margin-top:3%;">
                    <div class="row">
                         <h5 id="h5" style="margin-top:6%; color: #5F2B84;text-align:left;"> Confirm Password</h5>
                    </div>
                    <div class="row">
                    <input class="form-control-lg" id="confirm-password" name="confirm-password" type="password" placeholder="Confirm Password" style="width:80%;margin-left:10%" value="{{ old('confirm-password')}}">
                    @if($errors->has('confirm-password'))
                                    <p class="text-danger" style="margin-left: 50px;font-weight: bold">{{ $errors->first('confirm-password') }}</p>
                                    @endif
                    </div>
                </div>
            </div>
            <div class="row" style="border-radius:1%; background: #D9D9D9; width:90%; margin-top:4%; margin-left:4%;">
                <h6 id="h6" style="color:#000; margin-top:3%; margin-bottum:3%;">Password must be at least&nbsp; 6 characters and contain at least one letter and one number. Password are case-sensitive.</h6>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center align-items-center" style="margin-top:5%;"><button id="button-1" class="btn btn-primary btn-lg" type="submit" style="border-width:0px;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);" onclick="function3()">Continue</button></div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center align-items-center align-content-center" style="margin-top: 5%;"><h5 id="h5" class="align-content-center" style="color: rgb(0,0,0);text-align: center;padding-bottom: 0px;">Existing user? Click here to&nbsp;<a href="{{ route('login') }}" style="color: #5F2B84;"><span style="color: rgb(0, 0, 0);">log in</h5><br><br></a></span></div>
            </div>
        </div>
        </form>
    
</div>
    <script>
        function submitForm(form) {
            swal({
                title: "Are you sure?",
                text: "This form will be submitted",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then(function (isOkay) {
                if (isOkay) {
                    form.submit();
                }
            });

            return false;
        }
    </script>

    @if(Session::has('message'))

    <script>
        toastr.success("{{ Session::get('message') }}");
    </script>

    @endif

    @endsection
