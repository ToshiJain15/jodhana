<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Buses</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('images/home-page.jpg'); */
            height: 100vh;
            background-position: center;
            position: relative;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            justify-content: center;
            align-items: center;
        }

        .di{
            width: 300px;
            background-color: rgba(255,255,255,0.4);
            padding: 15px 25px;
            backdrop-filter: blur(5px);
            border-radius: 10px;
            position: absolute;
            top: 20%;
            left:40%;
        }
        .icon img {
            width: 100px;
            position: absolute;
            top: 10px;
            left: 10px;
        }
        ul {
            list-style: none;
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
        .mid ul{
         display: flex;
        }
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
        .header{
            width: 100%;
            height: 500px;
            min-width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            box-shadow: 0px 2px 10px;
            animation: slider 40s linear infinite;
            filter: brightness(80%);
        }
        @keyframes slider {
            0% {
                background-image: url("images/mehrangarh.jpg");
                
            }

            20% {
                background-image: url("images/kailana.jpg");
            }

            40% {
                background-image: url("images/masuria.jpg");
            }

            80% {
                background-image: url("images/mandore.jpg");
            }

            100% {
                background-image: url("images/umaid.jpg");
            }
        }
        .icon img {
            width: 100px;
            position: absolute;
            top: 10px;
            left: 10px;
        }
        .icon div {
            line-height: 19px;
            font-size: 20px;
            text-align: center;
            position: absolute;
            left: 120px;
            top: 40px;
            display: inline-block;
            color: #ffbc00;
        }
        .name{
            position: absolute;
            top: 200px;
            right: 350px;
            font-size: 60px;
            color: whitesmoke;
        }

        .heading{
            text-align: center;
            font-size: 50px;
        }

        .detail1 {
            padding: 10px;
            font-size: 25px;
        }

        .detail2 {
            padding: 10px;
            font-size: 25px;
        }

        .detail1 input {
            padding: 10px;
        }

        .detail2 input {
            padding: 10px;
        }

        .downimg {
            background-image: url("images/selectimg.jpg");
            width: 100%;
            height: 500px;
            min-width: 100%;
            color: whitesmoke;
            /* background-size: cover   ; */
            /* filter: blur(5px); */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: bottom;
            box-shadow: 0px 2px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .downimg2 {
            background-image: url("images/selectimgg.jpg");
            width: 100%;
            height: 500px;
            min-width: 100%;
            color: whitesmoke;
            /* background-size: cover   ; */
            /* filter: blur(5px); */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: bottom;
            box-shadow: 0px 2px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .select {
            width: 300px;
            height: 350px;
            display: flex;
            justify-content: center;
            /* background-image: url("image/map.jpg/100/100"); */
            background-color: rgba(255, 255, 255, 0.2);
            /* color: whitesmoke; */
            backdrop-filter: blur(9px);
        }

        .select form {
            padding: 15px;
        }

        .select form input {
            width: 100%;
            background-color: rgba(206, 197, 197, 0.8);
            padding: 10px;
            margin: 10px 0;
            outline: none;
            border: none;

        }
        .card1{
            display: flex;
            padding: 23px 12px;
        margin: 23px 12px;
        box-shadow: 0px 2px 10px;
        }
        .card1 img{
            width: 20%;
            position: absolute;
            right: 40px;
        }
        .infobus1 h1{
            /* text-align: center; */
            font-size: 40px;
            color: blueviolet;
        }
        .infobus1 ul{
            list-style-type: circle;
            margin: 20px;
            font-size: 23px;
        }
        .infobus1 p{
            text-align: center;
            font-size: 23px;
        }
        .card2{
            display: flex;
            padding: 23px 12px;
        margin: 23px 12px;
        box-shadow: 0px 2px 10px;
        }
        .card2 img{
            width: 20%;
            position: absolute;
            right: 40px;
        }
        .infobus2 h1{
            /* text-align: center; */
            /* position: absolute; */
            /* left: 50%; */
            font-size: 40px;
            color: blueviolet;
        }
        .infobus2 ul{
            list-style-type: circle;
            margin: 20px;
            font-size: 23px;
        }
        .infobus2 p{
            text-align: center;
            font-size: 23px;
        }
        .card3{
            display: flex;
            padding: 23px 12px;
        margin: 23px 12px;
        box-shadow: 0px 2px 10px;
        }
       
        .card3 img{
            width: 20%;
        }
        .infocar1 h1{
            /* text-align: center; */
            font-size: 40px;
            color: blueviolet;
        }
        
        .infocar1 p{
            text-align: left;
            font-size: 23px;
        }
        .card4{
            display: flex;
            padding: 23px 12px;
        margin: 23px 12px;
        box-shadow: 0px 2px 10px;
        }
       
        .card4 img{
            width: 20%;
        }
        .infocar2 h1{
            /* text-align: center; */
            font-size: 40px;
            color: blueviolet;
        }
        
        .infocar2 p{
            text-align: left;
            font-size: 23px;
        }
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
            list-style: none;
        }
     
        footer .footer-last-3 i {
            background: #501A8C;
            padding: 5px;
            color: #fff;
            margin: 10px 5px;
        }
        footer .map ul{
            list-style: none;
        }
        .map img {
            width: 100px;
            position: relative;
            bottom: 5px;
            right: 10px;
        }
        /* background-repeat: no-repeat; */
        /* background-position: center; */
        /* min-height: 50vh; 
}*/

    </style>
    </head>
    <body >
    <div class="icon">
        <img src="images/icon-bus.jpg">
    </div>

    <div class="header">
        <div class="name">TRANSPORTATION SERVICES</div>
    </div>
    <div class="heading">
        <h1>Bus Services</h1>
    </div>
    <div class="card1">
        <div class="infobus1">
            <h1>Tempo Traveller:</h1>
            <p>Book a tempo traveller in Jodhpur from us where we offer 4 models with below mentioned fare:</p>
            <ul>
                <li>9-12 seater tempo for ₹ 14 per km</li>
                <li>16 seater tempo for ₹ 16 per km</li>
                <li>20 seater tempo for ₹ 18 per km</li>
                <li>Maharaja tempo for ₹ 20 per km</li>
            </ul>
        </div>
        <img src="images/bus1.jpg" alt="">
    </div>
    <div class="card2">
        <div class="infobus2">
            <h1>Bus rental:</h1>
            <p>Book a Bus in Jodhpur from Rajputana Cabs. We offer:</p>
            <ul>
                <li>Mini (18 & 21) bus</li>
                <li>27, 21 & 35 seater bus</li>
                <li>41 & 45 seater Volvo</li>
                <li>50, 52, 56 seater non-ac bus</li>
            </ul>
        </div>
        <img src="images/bus2.jpg" alt="">
        </div>
    <div class="downimg">

        <div class="select">
            <form action="">

                <div class="detail1">
                    <p id="first">Bus Name:
                        <input type="text" placeholder="Enter your Bus Name">
                    </p>
                </div>
                <div class="detail2">

                    <p id="second">Number of Passengers
                        <input type="text" placeholder="Enter Number of Passengers">
                    </p>
                </div>
                <div class="submit">
                    <input type="submit" value="Book">
                </div>
            </form>

        </div>
    </div>
    <div class="heading">
        <h1>Cab Services</h1>
    </div>
    <div class="card3">
        <div class="infocar1">
            <h1>Sedan Car:</h1>
            <p>Book a sedan car for your client/ corporate from us. Our B2C taxi fare is ₹ 10 per km & ₹ 1600 for 8 hour/ 80 km local Jodhpur, and B2B fare is ₹ 10 per km & ₹ 1400.</p>
        </div>
        <img src="images/car1.jpg" alt="">

    </div>
    <div class="card4">
        <div class="infocar2">
            <h1>Innova Cab:</h1>
            <p>Book our Toyota Innova, which we offer for ₹ 14 per km & ₹ 2000 for local Jodhpur & the B2B rates for the same is ₹ 10 per km & ₹ 1800, best for 5-6 pax.</p>
        </div>
        <img src="images/car2.jpg" alt="">

    </div>
    <div class="downimg2">
        <div class="select">
            <form action="">
                <div class="detail1">
                    <p id="first">Cab Name:
                        <input type="text" placeholder="Enter your Bus Name">
                    </p>
                </div>
                <div class="detail2">
                    <p id="second">Number of Passengers
                        <input type="text" placeholder="Enter Number of Passengers">
                    </p>
                </div>
                <div class="submit">
                    <input type="submit" value="Book">
                </div>
            </form>

        </div>
    </div>
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
    </div>
    </footer>
</body>

</html>

