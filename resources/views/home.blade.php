<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jodhana</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            /background: black;/ filter: brightness(50%);
            background: url("images/jod.jpg");
            color: #fff;
            opacity: 0.9;
            min-width: 90vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 100vh;
            /* background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7,url('image/home-page.jpg'))); */
        }

        ul {
            list-style: none;
        }

        .icon img {
            width: 100px;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        /* .right a{
        position: absolute;
        right: 34px; 
         top: 34px; 
        display: inline-block;
         border: none;
   
    opacity: 0.3;
    background: rgb(221 206 255);
    padding: 11px 25px;
     border-radius: 5px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    }
    .right a:active{
        opacity: 0.1;
    }
    .right a:hover{
        background: blueviolet;
    }
    .right2 a:hover{
         background: blueviolet;
    }
    .right2 a{
        position: absolute;
        right: 34px;
        top: 84px;
        display: inline-block;
         border: none;
       opacity: 0.3;
    background: rgb(221 206 255);
    padding: 11px 25px;
    border-radius: 5px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    }
    .right2 a:active{
        opacity: 0.1;
    }
    .right1 a:hover{
        background: blueviolet;
   }
   .right1 a{
       position: absolute;
       right: 34px;
       top: 145px;
       display: inline-block;
        border: none;
      opacity: 0.3;
   background: rgb(221 206 255);
   padding: 11px 25px;
      border-radius: 5px;
   font-weight: 600;
   cursor: pointer;
   text-decoration: none;
   }
   .right1 a:active{
       opacity: 0.1;
   } */
        .navbar a {
            /* color: rgb(197, 198, 233); */
            color: #fff;
            text-decoration: none;
            /* padding: 10px; */
            background: transparent;
        }

        .navbar li a:hover,
        .navbar li a:active {
            text-decoration: underline;
            color: grey;
        }

        .navbar ul li a{
            /* display: inline-block; */
            padding-inline-start: 20px;
            padding: 20px;
        }

        .navbar li {

            /* display: inline-block; */
            color: whitesmoke;
            font-size: 20px;
        }

        .mid {
            position: absolute;
            right: 345px;
            top: 10px;
            display: flex;
            width: 100;
            margin: 22px auto;
            align-items: center;
            padding-inline-start: 40px;
        }

        .contaier h1 {
            text-align: center;
            width: 90%;
            color: #fff;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 70px;
        }

        .contaier p {
            text-align: center;
            width: 90%;
            color: #fff;
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .container p {
            text-align: center;
            width: 90%;
            color: #fff;
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: bolder;
            font-size: 20px;
            /line-height: 50px;/
        }

        /* section .place{
            color: #fff;
        }
        section .tab .artcon{
            border: 2px solid #f47205;
            background-color: #efeacc;
        }
        section .tab{
            display: flex;
        }        
        section .tab .artimg img{
            /*padding: 10px;
            margin: 10px;
        }
        .artcon h4{
            width: 100%;
            min-height: 100px;
            text-align: center;
            font-size: 25px;
            padding: 10px;
            margin: 10px;
            color: darkgoldenrod;
        }
        .artcon p{
            width: 100%;
            min-height: 100px;
            text-align: center;
            font-size: 25px;
            padding: 10px;
            margin: 10px;
            color: #f47205;
            /*border: 2px solid #f47205;
        }
        .artimg{
            border: 2px solid gold;
            background-color: #f3db9f;
            /*position: absolute;
        }*/
        footer .footer-top {
            width: 100%;
            height: 400px;
            background: url("images/testimonials-bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        footer .footer-top div {
            color: #fff;
            font-size: 25px;
            height: 300px;
            line-height: 40px;
            text-align: center;
            display: flex;
            align-items: center;
            width: 50%;
            margin: auto;
        }

        footer .footer-top {
            text-align: center;
            color: #fff;
            font-size: 25px;
        }

        footer .footer-last {
            background: #CCCCCC;
            color: #000;
        }

        footer .footer-main {
            display: flex;
            justify-content: space-around;
            width: 100%;
            padding: 10px 0;
        }

        footer .footer-main h4 a {
            color: #000;
            padding-bottom: 10px;
        }

        footer .footer-middler {
            padding-bottom: 10px;
        }

        footer .footer-middler ul li {
            padding-bottom: 5px;
            padding-top: 5px;
        }

        footer .footer-middler ul li a,
        footer .footer-last-first ul li i a {
            color: #000;
        }

        footer .footer-last-3 ul {
            display: flex;
        }

        footer .footer-last-3 i {
            background: #501A8C;
            padding: 5px;
            color: #fff;
            margin: 10px 5px;
        }

        .map img {
            width: 100px;
            position: relative;
            bottom: 5px;
            right: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
    </div>
    <div class="icon">
        <img src="images/icon-bus.jpg">
    </div>
    <section>
        <div class="contaier">
            <h1>JODHANA TRIP ADVISOR</h1>
            <p>Take only pictures Leave only footprints</p>
        </div>
        <div class="container">
            <p>Jodhpur is the second-largest city in the Indian state of Rajasthan and officially the second metropolitan city of the state. It was formerly the seat of the princely state of Jodhpur State. Jodhpur was historically the capital of the Kingdom of Marwar, which is now part of Rajasthan. Jodhpur is a popular tourist destination, featuring many palaces, fort, and temples</p>
        </div>
        <div class="navbar navbar-expand-sm mid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ url('/places') }}">Places</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/details') }}">Cabs And Bus Service</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/hotel') }}">Hotels</a></li>
                @if(isset(Auth::user()->name))
                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form> 
                @else
                <li class="nav-item"><a class="nav-link" href="{{ url('/signin') }}">Signin</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Signup</a></li>
                @endif
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
        <!-- <div class="right">
                <a href="login.html">Login</a>
            </div>
            <div class="right2">
                <a href="registration.html">Sign up</a>
            </div>
            <div class="right1">
                <a href="places.html">Places</a>
            </div> -->
    </section>
    <footer>

        <div class="footer-last">
            <div class="footer-main">
                <div class="footer-last-first">
                    <h4><a href="#">Get In Touch</a></h4>
                    <ul>
                        <li><i class="fa fa-phone"><a href="#">+91-7014265827</a></i></li>
                        <li><i class="fa fa-facebook"><a href="#"> manisha seervi</a></i></li>
                    </ul>
                </div>
                <div class="footer-middler">
                    <h4><a href="#">About us:</a></h4>
                    <ul>
                        <li><a href="#">Plot No. 345,<br> Sukhram Nagar, <br>Jodhpur.</a></li>

                    </ul>
                </div>

                <div class="footer-last-3">
                    <h4><a href="#">Social Links</a></h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                    </ul>
                </div>
                <div class="map">
                    <ul>
                        <li><img src="images/map.jpg"></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
</body>

</html>