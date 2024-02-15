<!DOCTYPE html>
<html data-bs-theme="light" lang="en" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competency Framework</title>
    <link rel="stylesheet" href="{{ asset('cssfile/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('cssfile/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/Bold-BS4-Footer-Big-Logo.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/Navbar-Right-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top " data-aos="slide-down" data-aos-duration="1000" style="background: #161A55;">
        <div class="container-fluid">
            <!-- <a class="navbar-brand d-flex align-items-center" href="#"></a> -->
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2" style="text-align: left;font-family: Poppins, sans-serif;">
                <img src="{{ asset('img/duallogo-white-icta 1(1).png') }}">
                
            </div>
            <!-- <img src="{{ asset('img/Mask group 276.png') }}" style="margin-right: 2%;"> -->
            <!-- <a class="btn btn-primary" style="border-width:0px;font-family: Poppins,san-serif;background: url(&quot;{{ asset('img/Mask group 276.png') }}&quot;);" href="{{route('userHome')}}"></a>   -->
            <a class="btn btn-primary" style="font-family: Poppins,san-serif;margin-right:1%;border-width:0px;background: linear-gradient(to bottom, #660066 70%, #FF6699 100%);" href="{{route('userHome')}}"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
            
            <!-- <a class="btn btn-danger" type="button" style="font-family: Poppins;border-width:0px;background: linear-gradient(to bottom, #F44567 0%, #F97B5F 49%)" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form> -->
            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-family: Poppins;border-width:0px;background: linear-gradient(to bottom, #F44567 0%, #F97B5F 49%)" href="{{ route('logout') }}">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
            </button>
            
            <!-- <div class="dropdown" style="margin-right:10%"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgb(255,255,255);"></a>
                <div class="dropdown-menu" style="font-family: Popins;margin-right:10%">
                    <a class="dropdown-item" style="font-family: Poppins,san-serif" href="{{route('userHome')}}">Profile</a>
                    <a class="dropdown-item" style="font-family: Poppins" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div> -->
        </div>
    </nav>
    <div class="container">
    <div class="modal fade" style="font-family:poppins" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 id="h4" class="modal-title" id="exampleModalLabel">Warning</h5> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                        <a class="btn btn-danger" type="button" style="font-family: Poppins;border-width:0px;" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        @yield('content')
    </div>
    <footer data-aos="slide-up" data-aos-duration="1000" id="myFooter" style="background: #161A55;">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <span style="text-align: center;font-family: Poppins, sans-serif;color: #fffff;"><br>Aiming at a digitally competent society and an empowered Government workforce with required competencies.<br><br></span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h5 style="font-family: Poppins, sans-serif;color: #fffff;">Links</h5>
                    <ul class="list-inline" style="text-align: center;color: #fffff">
                        <li class="list-inline-item"><i class="fa fa-home fa-lg" aria-hidden="true"></i><a href="#" style="font-family: Poppins, sans-serif;color: #fffff;margin-left: 10px;margin-top: 18px;">&gt; Home</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h5 style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);color: #fffff;">Contact Us</h5>
                    <ul style="text-align: left;font-family: Poppins, sans-serif;font-size: 14px;color: #fffff;">
                        <li style="color: var(--bs-emphasis-color);"><h6><i class="fa fa-phone fa-lg" aria-hidden="true"></i>&nbsp;94 112-369-099</h6></li>
                        <li style="color: var(--bs-emphasis-color);"><h6><i class="fa fa-envelope fa-lg" aria-hidden="true"></i>&nbsp;info@lightningdigital.gov.lk</h6></li>
                        <li style="color: var(--bs-emphasis-color);"><h6><i class="fa fa-map-pin fa-lg" aria-hidden="true"></i>&nbsp;490 R.A. De Mel Mawatha, Colombo, 00300,Sri Lanka.</h6></li>
                    </ul>
                </div>
            </div>
            <div class="row footer-copyright" style="background: #660066;">
                <div class="col" style="background: #660066;">
                    <p style="text-align: left;font-family: Poppins, sans-serif;font-size: 14px;color: #fffff;">Copyright @ 2023 <span style="color: rgb(255, 0, 0);">ICT Agency of Sri Lanka</span>. All rights reserved&nbsp;</p>
                </div>
            </div>
        </div>
    </footer>
    <footer class="text-black bg-dark"></footer>
    <script src="{{ asset('jsfile/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jsfile/aos.min.js') }}"></script>
    <script src="{{ asset('jsfile/bs-init.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <!-- <script>
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
    </script> -->
</body>

</html>
