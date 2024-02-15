@extends('layouts.cdionavbar')

@section('content')
<form method="POST" action="{{route('govofficials.update',$govofficial->id)}}">
{{csrf_field()}}

@method('PUT')

<div class="container" data-aos="fade-down" data-aos-duration="1000" id="div1" style="font-family:poppins;background: linear-gradient(to top right, #660066 56%, #FF6699 100%);border-radius:10px;padding-bottom:3%;margin-bottom:2%">
    <div class="row" style="text-align:center;" >
        <h1 style="color:#fff;margin-top:2%">Edit Profile</h1>
    </div>
    <div class="container" style="background:#fff;border-radius:10px;width:80%:">
        <div class="row">
            <h5 style="color:#f01f75;margin-top:2%">General Information</h5>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Full Name</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" id="full_name" name="full_name" type="text" placeholder="Enter Full Name" style="width:80%;margin-left:10%" value="{{ Auth::user()->govofficial->full_name}}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Preferred Name</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" id="preferred_name" name="preferred_name" type="text" placeholder="Enter Preferred Name" style="width:80%;margin-left:10%" value="{{Auth::user()->govofficial->preferred_name}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Designation</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" id="designation" name="designation" type="text" placeholder="Enter Designation" style="width:80%;margin-left:10%" value="{{Auth::user()->govofficial->designation}}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Organization Name</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" type="text" placeholder="Select Organization Name" style="width:80%;margin-left:10%" value="{{ Auth::user()->govofficial->govorganizationname->gov_org_name}}" readonly>
                    <input type="hidden" name="gov_org_name" id="gov_org_nameid" value="{{Auth::user()->govofficial->govorganizationname_id}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Contact Number</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" id="contact_number" name="contact_number" type="text" placeholder="Enter the Contact Number" style="width:80%;margin-left:10%" value="{{ Auth::user()->govofficial->contact_number}}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Email address</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" id="email" name="email" type="text" placeholder="Enter the email address" style="width:80%;margin-left:10%" value="{{Auth::user()->govofficial->email}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Employment Layer</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" id="employment_layer" name="employment_layer" type="text" placeholder="Select the Employment Layer" style="width:80%;margin-left:10%" value="{{ Auth::user()->govofficial->employment_layer}}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Date of Birth</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" id="date_of_birth" name="date_of_birth" type="date" style="width:80%;margin-left:10%" value="{{Auth::user()->govofficial->date_of_birth}}">
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:3%">
            <h5 style="color:#f01f75">Social Media</h5>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Linkedin</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" id="linkedin" name="linkedin" type="text" placeholder="Paste Here" style="width:80%;margin-left:10%" value="{{Auth::user()->govofficial->linkedin}}">
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Facebook</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" id="facebook" name="facebook" type="text" placeholder="Paste Here" style="width:80%;margin-left:10%" value="{{Auth::user()->govofficial->facebook}}">
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="row" style="margin-top:1%">
                    <h5 id="h4" style="color:#00000">Instagram</h5>
                </div>
                <div class="row">
                    <input class="form-control-lg" id="instagram" name="instagram" type="text" placeholder="Paste Here" style="width:80%;margin-left:10%" value="{{ Auth::user()->govofficial->instagram}}">
                </div>
                <!-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> -->
            </div>
        </div>
        <div class="row" style="margin-top:3%;padding-bottom:3%">
            <div class="col-6" style="text-align:right">
                <button data-bs-toggle="modal" data-bs-target="#cancel" class="btn btn-primary" type="reset" style="background: rgb(255,255,255);color: rgb(238,110,17);border-color: rgb(238,110,17);">Cancel</button>
            </div>
            <div class="col-6" style="text-align:left">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update" type="button" style="background: linear-gradient(to bottom right, #F44567 0%, #F97B5F 49%);text-align: center;border-color: rgb(254,80,57);">Update</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" style="font-family:poppins" id="cancel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <!-- <h5 id="h4" class="modal-title" id="exampleModalLabel">Warning</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure to cancel?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
            <a class="btn btn-danger" type="button" style="font-family: Poppins;border-width:0px;" href="{{route('userHome')}}">Yes</a>
        </div>
        </div>
    </div>
</div>
<div class="modal fade" style="font-family:poppins" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <!-- <h5 id="h4" class="modal-title" id="exampleModalLabel">Warning</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure to update?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
            <button class="btn btn-success" type="submit" style="font-family: Poppins;border-width:0px;">Yes</button>
            <form  action="{{ route('govofficials.update',$govofficial->id) }}" method="PUT" class="d-none">
                @csrf
            </form>
        </div>
        </div>
    </div>
</div>
</form>
<!-- <section style="height: 1250px;">
    <div class="container-fluid d-table float-none" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 200px;background: #5f2b84;width: 1177px;height: 1200px;border-radius: 10px;">
        <h1 style="font-family: Poppins, sans-serif;text-align: center;font-weight: bold;margin-top: 10px;margin-left: 10px;padding-top: 30px;padding-bottom: 10px;">Register Now</h1>
        <form method="POST" action="">
            {{csrf_field()}}
        <div class="justify-content-center align-items-center" style="width: 1083px;height: 950px;background: #ffffff;font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 10px;margin-left: 33px;border-radius: 10px;border-width: 3px;border-color: rgb(255,106,42);"><span class="text-center text-lg-start text-xxl-center d-flex flex-row" style="color: #f01f75;margin-top: 8px;margin-left: 10px;padding-top: 30px;padding-left: 5px;margin-bottom: 10px;border-radius: 10px;">General Information</span>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 20px;padding-bottom: 30px;">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-bottom: 0;padding-bottom: 0;">Full Name</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="full_name" name="full_name" type="text" placeholder="Enter Full Name" style="width: 500px;" value="{{ old('full_name')}}">
                            @if($errors->has('full_name'))
                            <p class="text-danger"><b>Enter the full name</b></p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span>Preferred Name</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="preferred_name" name="preferred_name" type="text" placeholder="Enter Preferred Name" style="width: 500px;" value="{{ old('preferred_name')}}">
                        @if($errors->has('preferred_name'))
                            <p class="text-danger"><b>Enter the preferred name</b></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Designation</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="designation" name="designation" type="text" placeholder="Enter Designation" style="width: 500px;" value="{{ old('designation')}}">
                            @if($errors->has('designation'))
                            <p class="text-danger"><b>Enter the designation</b></p>
                            @endif</div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span>Organization Name</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="form-control-lg" name="gov_org_name" type="text" placeholder="Select Organization Name" id="gov_org_name" style="width: 500px;" value="{{ old('gov_org_name->gov_org_name')}}">
                            <input type="hidden" name="gov_org_name" id="gov_org_nameid" >
                            @if($errors->has('gov_org_name'))
                            <p class="text-danger"><b>Select the organization name</b></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Contact Number</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="contact_number" name="contact_number" type="text" placeholder="Enter the contact Number" style="width: 500px;" value="{{ old('contact_number')}}">
                            @if($errors->has('contact_number'))
                            <p class="text-danger"><b>{{ $errors->first('contact_number') }}</b></p>
                            @endif   </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span>Email address</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="email" name="email" type="text" placeholder="Enter the email address" style="width: 500px;" value="{{ old('email')}}">
                            @if($errors->has('email'))
                            <p class="text-danger"><b>Invalid email address</b></p>
                            @endif</div>
                    </div>
                </div>

            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Employment Layer</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="employment_layer" name="employment_layer" style="width: 500px;margin-top:10px" value="{{ old('employment_layer')}}" data-toggle="tooltip" data-placement="bottom" title='

                            <span class="top">Top and Second Tier Management</span> - Personnel who direct and control an organization at the highest level. Who holds authority, resources, and decision-making power regarding changes at the company.<br>
                            Eg: Senior – Executive Level (Secretary, Additional Secretary, Director General, etc.) – Top and 2nd in command<br>
                            <hr>
                            <span class="cdio">Chief Digital Information Officer (CDIO)</span> - A person who is responsible for facilitating providing strategic direction and promoting digital transformation initiatives.<br>
                            <hr>
                            <span class="middle">Middle and Junior Management</span> - Subordinate to the top and 2nd tier management and responsible for team leading. Middle management is indirectly (through line management) responsible for junior staff performance and productivity.
                            Eg: Directors, Assistant Directors, etc.<br>
                            <hr>
                            <span class="operational">Operational Staff</span> - Staff executing the strategy which is developed by the organizational leaders.<br>
                            Eg: Development Officer, Technical Officer, Management Service Officer, Staff Officers, Administrative Officers, ICT Officers, etc.<br>
                                '>
                       <script>
                        $(document).ready(function(){
                          $('[data-toggle="tooltip"]').tooltip({
                            html: true,
                            template: '<div class="tooltip custom-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                          });
                        });
                      </script>
                      <option disabled style="font-color: #787474" selected>Select the Employment Layer</option>
                      <option value="top">Top and Second Tier Management</option>
                      <option value="cdio">Chief Digital Information Officer (CDIO)</option>
                      <option value="middle">Middle and Junior Management</option>
                      <option value="operational">Operational Staff</option>
                                </select>
                                @if($errors->has('employment_layer'))
                                <p class="text-danger"><b>Select the type</b></p>
                                @endif
                            </div>
                        </div>

                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Date of Birth</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" id="date_of_birth" name="date_of_birth" type="date" style="width: 500px; color:#000000" value="{{ old('date_of_birth')}}">
                            @if($errors->has('date_of_birth'))
                            <p class="text-danger"><b>Select the birth date</b></p>
                            @endif</div>
                    </div>

                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="color: #f01f75;font-family: Poppins, sans-serif">Social Media</span></div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-left:20px">Linkedin</span></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <input class="form-control-lg" name="linkedin" type="text" placeholder="Paste Here" id="linkedin" style="width: 845px;" value="{{ old('linkedin')}}">
                            @if($errors->has('linkedin'))
                            <p class="text-danger"><b>{{ $errors->first('linkedin') }}</b></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-left:20px">Facebook</span></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <input class="form-control-lg" name="facebook" type="text" placeholder="Paste Here" id="facebook" style="width: 845px;" value="{{ old('facebook')}}">
                            @if($errors->has('facebook'))
                            <p class="text-danger"><b>{{ $errors->first('facebook') }}</b></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-left:20px">Instagram</span></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <input class="form-control-lg" name="instagram" type="text" placeholder="Paste Here" id="instagram" style="width: 845px;" value="{{ old('instagram')}}">
                            @if($errors->has('instagram'))
                            <p class="text-danger"><b>{{ $errors->first('instagram') }}</b></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 50px;padding-bottom: 0px;padding-left: 750px;">
                <div class="col justify-content-center align-items-end align-content-end me-auto" style="height: 48px;"><button class="btn btn-primary btn-lg" type="reset" style="font-family: Poppins, sans-serif;padding-right: 11px;margin-right: 30px;background: rgb(255,255,255);color: rgb(238,110,17);border-color: rgb(238,110,17);">Cancel</button><button class="btn btn-primary btn-lg" type="submit" style="background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);font-family: Poppins, sans-serif;padding-left: 10px;text-align: center;border-color: rgb(254,80,57);">Submit</button></div>
            </div>
        </div>
    </form>
    </div>
</section>
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $( "#gov_org_name" ).autocomplete({
        source: function( request, response ) {
          $.ajax({
            url: path,
            type: 'GET',
            dataType: "json",
            data: {
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },

        select: function (event, ui) {
            // Set selection
            var id = event.target.id
            $('#'+id).val(ui.item.label); // display the selected text
            $('#'+id+'id').val(ui.item.value); // save selected id to input
            //console.log(ui.item.value);
            return false;
        }
      });
</script> -->

@endsection