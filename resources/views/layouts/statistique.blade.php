@include('partials.nav')
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
</head>
<body>
    <h1 class="sub-title">
         Statistiques <span>Quota</span>
    </h1>

    <section>
        <div class="container1" id="skills">
            <h1 class="heading">Quota <span style="color: rgb(255, 123, 0);">Projet fin d'étude</span> disponible par structure d'affectation :</h1>
            <div class="Technical-bars">
                
                @foreach ($affectations as $key => $affectation)
    <div class="bar">
        <i class='bx bxl-html5'></i>
        <div class="indfo">
            <span class="dep"><span style="color:rgb(6, 186, 3);"> {{ $affectation->nom }} :</span><br> Quota: {{ $affectation->quota_pfe }} <br> Quota disponible: {{ $quota_dispos_pfe[$key] }} <br>  </span>
            <br>
        </div>
        <div class="progress-line html">
            <span style="width: {{ $pourcentage_dispos_pfe[$key] }}%; position: absolute;"></span>
            <p style="position:absolute;margin-left:{{ $pourcentage_dispos_pfe[$key] * 4 }}px;margin-top:-33px;" >{{ $pourcentage_dispos_pfe[$key] }}%</p>
        </div>
    </div>
                <br>
                <style>
                   
                     /*.progress-line.html p::after{
                     content: "{{ $quota_dispos_pfe[$key] }} ";
                     position: relative;
                     margin-left: 200px;
                     padding-top: 18px;
                     top: -28px;
                    } */
                </style>
                @endforeach
                
            </div>
        </div>


        <div class="container1">
            <h1 class="heading1">Quota <span style="color:rgb(255, 123, 0);"> Immersion </span>disponible par structure d'affectation :</h1>
            <br>
            <div class="Technical-bars">
                @foreach ($affectations as $key => $affectation)
    <div class="bar">
        <i class='bx bxl-html5'></i>
        <div class="indfo">
            <span class="dep"><span style="color:rgb(6, 186, 3);"> {{ $affectation->nom }} :</span><br> Quota: {{ $affectation->quota_im }} <br> Quota disponible: {{ $quota_dispos_im[$key] }} <br>  </span>
            <br>
        </div>
        <div class="progress-line html">
            <span style="width: {{ $pourcentage_dispos_im[$key] }}%; position: absolute;"></span>
            <p style="position:absolute;margin-left:{{ $pourcentage_dispos_im[$key] * 4 }}px;margin-top:-33px;" >{{ $pourcentage_dispos_im[$key] }}%</p>
        </div>
    </div>
                <br>
                <style>
                    /*.progress-line.css span{
                     width :65%;
                     position: relative;
                    }
                    .progress-line.css span::after{
                     content: "{{ $quota_dispos_im[$key] }}";
                     position: relative;
                     margin-left: 200px;
                     padding-top: 18px;
                     top: -28px;
                    }*/
                </style>
                @endforeach
            </div>
        </div>
    </section>

    <style>
 *{
    font-family: Tahoma, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
    font-family: 'poppins',sans-serif;
}
body
{
    color:#cbc7c7;
    background: #03131f;

}
.sub-title{
  text-align: center;
  font-size: 60px;
  padding-bottom: 60px;
  padding-top: 35px;
}
.sub-title span{
    color: rgb(255, 123, 0);
}
section{
    display: flex;
    flex-wrap: wrap;
}
.container1{
    width: 600px;
    height: 500px;
    padding: 10px 90px;
    margin-left: 100px;
}
.heading{
    margin-bottom: 90px;
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
    height: 10px;
    background-color: #ffffff;
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
    background-color: rgb(255, 123, 0);
    position: absolute;
    border-radius: 10px;
    animation: animate 1s 1s cubic-bezier(1,0,0.5,1) forwards;
    transform: scaleX(0);
    transform-origin: left;
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
    animation :showText 0.5s 1.5s linear forwards;
    opacity: 0;
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

.heading1{
    margin-bottom: 65px;
}
.text{
    margin-left:10%;
}

    </style>


</body>
</html>