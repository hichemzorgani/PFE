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
    <title>La page de l'admin 2</title>
</head>
<body>
    <h1 class="sub-title">
         Statist<span>iques </span>
    </h1>

    <section>
        <div class="container1" id="skills">
            <h1 class="heading">Nombre quota disponible par département :</h1>
            <div class="Technical-bars">
                <div class="bar"><i style="color: #c95d2e" class='bx bxl-html5'></i>
                    <div class="indfo">
                       <span class="dep">Département 01 :</span>
                    </div>
                    <div class="progress-line html">
                      <span></span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container1">
            <h1 class="heading1">Pourcentage quota disponible par département :</h1>
            <div class="radial-bars">

                <div class="radial-bar">
                    <svg x="0px" y="0px" viewBox="0 0 200 200">
                       <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                       <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage" style="color:#fff">90%</div>
                    <div class="text">Département 01 :</div>
                </div>
                <style>
                    .path-1{animation: animate-path1 1s 1s linear forwards;}

                     @keyframes animate-path1{
                      100%{
                       stroke-dashoffset: 200;
                       }
                      }
                </style>

            </div>
        </div>
    </section>

    <style>
        *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
    font-family: 'poppins',sans-serif;
}
body
{
    color:#fff;
    background: #081b29;

}
.sub-title{
    text-align: center;
  font-size: 60px;
  padding-bottom: 0px;
  padding-top: 0px;
}
.sub-title span{
    color: #0ef;
}
section{
    display: flex;
    flex-wrap: wrap;
}
.container1{
    width: 600px;
    height: 500px;
   /* padding: 75px 90px;*/
   padding: 10px 90px;
    margin-left: 120px;
}
.heading{
    /*text-align:center;
    text-decoration: underline;
    text-underline-offset: 10px;
    text-decoration-thickness: 5px;*/
    margin-bottom: 50px;
}
.bar{
    font-size :23px;
    position: relative;

}
.Technical-bars .bar{
    margin:40px 0;
}
.Technical-bars .bar:first-child{
    margin-top: 0;
}
.Technical-bars .bar:last-child{
    margin-bottom: 0;
}
.Technical-bars .bar .info{
    margin-bottom: 5px;
}

.Technical-bars .bar .info span{
    font-size: 17px;
    font-weight: 500;
    animation:showText 0.5s 1s linear forwards;
    opacity:0;
}

.Technical-bars .bar .progress-line{
    position: relative;
    border-radius: 10px;
    width: 100%;
    height: 5px;
    background-color: #000;
    animation: animate 1s cubic-bezier(1,0,0.5,1) forwards;
    transform: scaleX(0);
    transform-origin: left;
}
@keyframes animate{
    100%{
        transform: scaleX(1);
    }
}
.Technical-bars .bar .progress-line span{
    height: 100%;
    background-color: #0ef;
    position: absolute;
    border-radius: 10px;
    animation: animate 1s 1s cubic-bezier(1,0,0.5,1) forwards;
    transform: scaleX(0);
    transform-origin: left;
}
.progress-line.html span{
    width :90%;
    position: relative;
}

.progess-line span::after{
    position: absolute;
    padding: 1px 8px;
    background-color: #000;
    color: #fff;
    font-size: 12px;
    border-radius: 3px;
    top: -28px;
    right:0 ;
   /* right: -20px;*/
    animation :showText 0.5s 1.5s linear forwards;
    opacity: 0;
}

.progress-line.html span::after{
    content: "9";
  position: relative;
  margin-left: 360px;
  padding-top: 18px;
  top: -28px;
}
.progress-line span::before{
    content:"";
    position: absolute;
    width: 0;
    height: 0;
    border: 7px solid transparent;
    border-bottom-width: 0px;
    border-right-width: 0px;
    border-top-color: #000;
    top:-10px;
    right:0;
    animation: showText 0.5s 1.5s linear forwards;
    opacity: 0;


}
@keyframes showText{
    100%{
        opacity: 1;
    }
}

.radial-bars{
    width:100%;
    display: flex;
    flex-wrap:wrap;
    justify-content: space-evenly;
    align-items: flex-start;
}
.radial-bars .radial-bar{
    width: 50%;
    height: 180px;
    margin-bottom: 10px;
    position: relative;
}
.radial-bars .radial-bar svg{
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%) rotate(-90deg);
    width: 120px;
    height:160px;
}
.radial-bars .radial-bar .progress-bar{
    stroke-width:10;
    stroke:black;
    fill:transparent;
    stroke-dasharray: 502;
    stroke-dashoffset: 502;
    stroke-linecap: round;
    animation: animate-bar 1s linear forwards;
}
@keyframes animate-bar{
    100%{
        stroke-dashoffset: -1;
    }
}
.path{
    stroke-width: 10;
    stroke: #0ef;
    fill:transparent;
    stroke-dasharray: 502;
    stroke-dashoffset: 502;
    stroke-linecap: round;
}



.radial-bar .percentage{
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);
    font-size: 17px;
    font-weight: 500;
    animation: showText 0.5 1s linear forwards;
    opacity: 0;
    color: #fff;
}
.progress-bar .text{
    width: 100%;
    position: absolute;
    text-align: center;
    left: 50%;
    bottom: -5px;
    transform: translateX(-50%);
    font-size: 17px;
    font-weight: 500;
    animation: showText 0.5s 1s linear forwards;
    opacity: 0;
}
.heading1{
    margin-bottom: 25px;
}
.text{
    margin-left:20%;
}
    </style>


</body>
</html>