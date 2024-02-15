<!DOCTYPE html>
<html data-bs-theme="light" lang="en" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <title>Competency Framework</title>
    <link rel="stylesheet" href="{{ asset('cssfile/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('cssfile/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/Bold-BS4-Footer-Big-Logo.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/Navbar-Right-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/styles.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <nav class="navbar navbar-expand-md fixed-top" data-aos="slide-down" data-aos-duration="1000" style="background: #C1C2DA;">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2" style="text-align: left;font-family: Poppins, sans-serif;"><img src="{{ asset('img/duallogo-white-icta 1(1).png') }}">
                <ul class="navbar-nav ms-auto"></ul>
            </div>

        </div>
    </nav>
    <section>
            @yield('content')
    </section>
    <footer data-aos="slide-up" data-aos-duration="1000" id="myFooter" style="background: #C1C2DA;">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <span style="text-align: center;font-family: Poppins, sans-serif;color: #000;"><br>Aiming at a digitally competent society and an empowered Government workforce with required competencies.<br><br></span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h5 style="font-family: Poppins, sans-serif;color: #000;">Links</h5>
                    <ul class="list-inline" style="text-align: left;margin-left: 79px;color: #000;">
                        <li class="list-inline-item"><img src="{{ asset('img/Group 281.png') }}" style="margin-top: 10px;"><a href="#" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);margin-left: 10px;margin-top: 18px;">&gt; Home</a></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h5 style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);color: #000;">Contact Us</h5>
                    <ul style="text-align: left;font-family: Poppins, sans-serif;font-size: 14px;color: #000;">
                        <li style="color: var(--bs-emphasis-color);"><img src="{{ asset('img/Group 277.png') }}">&nbsp;94 112-369-099</li>
                        <li style="color: var(--bs-emphasis-color);"><img src="{{ asset('img/Group 278.png') }}" style="margin-top: 2%;">&nbsp;info@lightningdigital.gov.lk</li>
                        <li style="color: var(--bs-emphasis-color);"><img src="{{ asset('img/Group 279.png') }}" style="margin-top: 2%;">&nbsp;490 R.A. De Mel Mawatha, Colombo, 00300,Sri Lanka.</li>
                    </ul>
                </div>
            </div>
            <div class="row footer-copyright" style="background: #8D8E9D;">
                <div class="col" style="background: #8D8E9D;">
                    <p style="text-align: left;font-family: Poppins, sans-serif;font-size: 14px;color: #000;">Copyright @ 2023 <span style="color: rgb(255, 0, 0);">ICT Agency of Sri Lanka</span>. All rights reserved&nbsp;</p>
                </div>
            </div>
        </div>
    </footer>
    <footer class="text-white bg-dark"></footer>
    <script src="{{ asset('jsfile/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jsfile/aos.min.js') }}"></script>
    <script src="{{ asset('jsfile/bs-init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
