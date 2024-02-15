@extends('layouts.govofficialusernavbar')

@section('content')
<form method="POST" action="{{ route('change.password') }}">
        @csrf
<div class="container" data-aos="fade-down" data-aos-duration="1000" id="div3" style="font-family:poppins;background: linear-gradient(to top right, #660066 56%, #FF6699 100%);border-radius:10px;padding-bottom:3%;margin-bottom:3%">
    <div class="row" style="text-align:center;">
        <h1 id="h1" style="color:#fff;margin-top:2%">Reset Your Password</h1>
    </div>
    <div class="container" style="background:#fff;border-radius:10px;">
        <div class="row">
            <div class="col-lg-12 col-md-12" style="margin-top:2%">
                    <input id="password" class="form-control-lg" name="current_password" type="password" placeholder="Current Password" style="width:80%;margin-left:10%">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12" style="margin-top:2%">
                    <input class="form-control-lg" id="password" name="password" type="password" placeholder="New Password" style="width:80%;margin-left:10%">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12" style="margin-top:2%">
                    <input class="form-control-lg" id="password" name="new_confirm_password" type="password" placeholder="Confirm Password" style="width:80%;margin-left:10%">
            </div>
        </div>
        <div class="row justify-content-center" style="text-align:center;">
            <div class="col-lg-12 col-md-12" style="margin-top:2%;margin-bottom:2%">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reset" data-aos="fade-down" type="button" style=";font-family: Poppins, sans-serif;border-width: 0px;background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);border-width: 2px;border-color: #ef4323;border-radius: 10px"><h5 id="h4" style="margin-top:2%">Reset Password</h5></button>
            </div>
        </div>
        
    </div>
</div>
<div class="modal fade" style="font-family:poppins" id="reset" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 id="h4" class="modal-title" id="exampleModalLabel">Warning</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to reset password?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                    <button class="btn btn-danger" type="submit" style="font-family: Poppins;border-width:0px;">Yes</button>
                    <form  action="{{ route('change.password') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </div>
            </div>
        </div>
</form>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
