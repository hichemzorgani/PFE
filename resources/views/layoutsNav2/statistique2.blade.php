@include('partials.nav2')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" >
    <title>Statistiques</title>
    <style>
        body {
            color: #cbc7c7;
            background: #03131f;
        }
        .sub-title {
            text-align: center;
            font-size: 60px;
            padding-bottom: 60px;
            padding-top: 35px;
        }
        .sub-title span {
            color: rgb(255, 123, 0);
        }
        .bar {
            font-size: 23px;
            position: relative;
        }
        .Technical-bars .bar {
            margin: 40px 0;
        }
        .Technical-bars .bar:first-child {
            margin-top: 0;
        }
        .Technical-bars .bar:last-child {
            margin-bottom: 0;
        }
        .Technical-bars .bar .info {
            margin-bottom: 5px;
        }
        .Technical-bars .bar .info span {
            font-size: 17px;
            font-weight: 500;
            animation: showText 0.5s 1s linear forwards;
            opacity: 0;
        }
        .Technical-bars .bar .progress-line {
            position: relative;
            border-radius: 10px;
            width: 100%;
            height: 10px;
            background-color: #ffffff;
            animation: animate 1s cubic-bezier(1, 0, 0.5, 1) forwards;
            transform: scaleX(0);
            transform-origin: left;
        }
        @keyframes animate {
            100% {
                transform: scaleX(1);
            }
        }
        .Technical-bars .bar .progress-line span {
            height: 100%;
            background-color: rgb(255, 123, 0);
            position: absolute;
            border-radius: 10px;
            animation: animate 1s 1s cubic-bezier(1, 0, 0.5, 1) forwards;
            transform: scaleX(0);
            transform-origin: left;
        }
        .progress-line span::after {
            position: absolute;
            padding: 1px 8px;
            background-color: #000;
            color: #fff;
            font-size: 12px;
            border-radius: 3px;
            top: -28px;
            right: 0;
            animation: showText 0.5s 1.5s linear forwards;
            opacity: 0;
        }
        .progress-line span::before {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            border: 7px solid transparent;
            border-bottom-width: 0px;
            border-right-width: 0px;
            border-top-color: #000;
            top: -10px;
            right: 0;
            animation: showText 0.5s 1.5s linear forwards;
            opacity: 0;
        }
        @keyframes showText {
            100% {
                opacity: 1;
            }
        }
        @media (max-width: 768px) {
            .container1 {
                padding: 10px 30px;
                margin-left: 0;
            }
            .heading, .heading1 {
                margin-bottom: 50px;
            }
        }
    </style>
</head>
<body>
    <h1 class="sub-title">
        Statistiques <span>Stages</span>
    </h1>

    <section>
        <div class="container" id="skills">
            <h1 class="heading text-center">Stages<br><span style="color: rgb(255, 123, 0);">Projet fin d'étude</span></h1>
            <div class="Technical-bars">
                <div class="bar">
                    <i class='bx bxl-html5'></i>
                    <div class="info">
                        <span class="dep"><span style="text-align: center;">Nombre stages PFE : {{$count_pfe}}</span><br></span>
                        <br>
                    </div>
                    <div class="progress-line html">
                        <span style="width: {{$pourcentage_pfe[0]}}%; position: absolute;"></span>
                        <p style="position: absolute; margin-left: {{ $pourcentage_pfe[0] * 4 }}px; margin-top: -33px;">{{$pourcentage_pfe[0]}}%</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h1 class="heading text-center">Stages<br><span style="color: rgb(255, 123, 0);">Immersion</span></h1>
            <br>
            <div class="Technical-bars">
                <div class="bar">
                    <i class='bx bxl-html5'></i>
                    <div class="info">
                        <span class="dep"><span style="color: rgb(226, 232, 226);">Nombre stages immersion : {{$count_im}}</span><br></span>
                        <br>
                    </div>
                    <div class="progress-line html">
                        <span style="width: {{$pourcentage_im[0]}}%; position: absolute;"></span>
                        <p style="position: absolute; margin-left: {{ $pourcentage_im[0] * 4 }}px; margin-top: -33px;">{{$pourcentage_im[0]}}%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-oBqDVmMz4fnFO9gybqD5ymfNf5cfDBo6bBovkXkk+0kflPLbXEr2E92mV2Kf5Dxk" crossorigin="anonymous"></script>
</body>
</html>
