<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman UI Antrian</title>

    <link rel="shortcut icon" href="{{ env('APP_URL') }}/assets/media/logos/favicon.ico" />
    <link href="{{ env('APP_URL') }}/assets/font/font.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->

    <link href="{{ env('APP_URL') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ env('APP_URL') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ env('APP_URL') }}/assets/css/tabel/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_URL') }}/assets/css/tabel/style-tabel.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-light col-9"
                style="border: 1px solid coral; height: 125px; background-color: rgba(255,0,0,0.1);">
                <a class="navbar-brand" href="#">LOGO</a>
            </nav>
            <div class="col-3 float-right"
                style="border: 1px solid coral; height: 125px; background-color: rgba(255,255,255,0.1); ">
                <div class="row" style=" height: 125px;">
                    <div style="margin: auto 10px;">
                        <a> Pukul </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="card col-5" style="width: 40%;">
                <div class="card-header row" style="height: 180px;">
                    <span style="margin: auto;"><h1 class="display-1">P O L I - 1</h1></span>
                </div>
                <ul class="list-group list-group-flush" style="height: 280px;">
                    <li class="list-group-item" style="margin: 2px auto;">
                        <span style="font-size: 40px; ">NOMOR ANTRIAN</spam>
                    </li>
                    <li class="list-group-item" style="margin-top: -22px; margin-bottom: 0px; margin-left: auto; margin-right: auto; padding-top: -20px;">
                        <h1 style="font-size: 150px; color:firebrick">A-001</h1>
                    </li>
                </ul>
            </div>
            <div class="col-7 embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wgg9Rk7kZ_Q?rel=0" allowfullscreen></iframe>
              </div>
        </div>
        <div class="row">
            <div class="col-4 card" style="height: 250px;">
                This is some text within a card body.
            </div>
            <div class="col-4 card" style="height: 250px;">
                This is some text within a card body.
            </div>
            <div class="col-4 card" style="height: 250px;">
                This is some text within a card body.
            </div>
        </div>
        <div class="row" style="background-color: rgba(200,106,80,0.5); height: 63px;">
            <div style="margin: auto 1px;">
                <marquee style="width: 1539px;"><h2>text berjalan</h2></marquee>
            </div>
        </div>
    </div>


    <script src="{{ env('APP_URL') }}/assets/js/tabel/jquery.min.js"></script>
    {{-- <script src="{{ env('APP_URL') }}/assets/js/tabel/popper.js"></script> --}}
    <script src="{{ env('APP_URL') }}/assets/js/tabel/bootstrap.min.js"></script>
    {{-- <script src="{{ env('APP_URL') }}/assets/js/tabel/main.js"></script> --}}
</body>

</html>
