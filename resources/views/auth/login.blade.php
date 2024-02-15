@extends('layouts.govofficialnavbar')

@section('content')

<body>
    
        {{--  @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif  --}}
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="container" id="div1" data-aos="fade-down" data-aos-duration="1000"  style="width: 80%;margin-bottom:5%">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-6" style="background: linear-gradient(to top right, #660066 56%, #FF6699 100%);">
                    <!-- <div class="flex-column justify-content-center align-items-center align-content-center align-self-center order-first" style="border-radius: 10px;background: #ffffff;color: rgb(0,0,0);margin-top: 50px;width: 402px;height: 369px;margin-left: 34px;text-align: center;"> -->
                    <div class="container" style="background-color:#fff;border-radius: 10px;width:85%;margin-top:10%;height:80%">  
                        <div class="row">
                            <h4 id="h3-1" style="text-align: center;font-family: Poppins, sans-serif;margin-top: 10%;color: #5f2b84;font-weight:bold">Don't have an account?</h4>
                        </div>
                        <div class="row">
                            <h6 id="h4" style="font-family: Poppins, sans-serif;text-align: center;color: #000;margin-top:10%"><br>Register Now and assess the Digital <br>Maturity level of organization.</h6>
                        </div>
                        <div class="row">
                            <a class="btn btn-primary justify-content-center align-items-center" href="{{ route('register') }}" style="margin-left:25%;width:50%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);border-width: 0px;font-family: Poppins, sans-serif;text-align: center;margin-top:15%;margin-bottom:30%">Signup</a>
                        </div>

                        

                    </div>
                </div>
                <div class="col-lg-6 col-sm-6" style="border-color: rgb(0,10,255);border-style: solid;border-color: #5f2b84;">
                    <h3 id="h3-1" style="color: #f01f75;text-align: center;font-family: Poppins, sans-serif;margin-top: 5%;font-weight:bold">Login Your Account</h3>
                    <div class="container justify-content-center" style="margin-left:8%">
                        <div class="row">
                            <input class="form-control-lg @error('username') is-invalid @enderror" id="username" type="text" style="font-family: Poppins, sans-serif; width: 80%; height: 10%; margin-top: 10%;" name="username" value="{{ old('username') }}" placeholder="Username" required>
                            @error('username')
                                <span class="invalid-feedback" role="alert" style="font-family: Poppins, sans-serif;">
                                    <b>{{ $message }}</b>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <input class="form-control-lg @error('password') is-invalid @enderror" id="password" type="password" style="font-family: Poppins, sans-serif; width: 80%; height: 10%; margin-top: 10%;" name="password" placeholder="Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert" style="font-family: Poppins, sans-serif;">
                                    <b>{{ $message }}</b>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <a href="" style="color: rgb(0,0,0);margin-top:10%">Forgot Password</a>
                        </div>  
                        <div class="row">
                            <button type="submit" class="btn btn-primary"  style="margin-left:30%;width:40%;margin-bottom:5%;border-width: 0px;margin-top: 10%;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);font-family: Poppins, sans-serif;">{{ __('Login') }}</button>
                        </div>                  
                        
                    </div>
                        
                </div>
            </div>
        </div>
        </form>
   
</body>
@endsection
