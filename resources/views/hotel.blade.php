<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		ul{
			list-style: none;
		}
		a{
			text-decoration: none;
		}
		
		
		header .header-top .header-content ul li a{
			color: #000;
		}
		header .header-last{
			background: url("images/hotels1.jpg");
			width: 100%;
			height: 550px;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
		}
		header .header-last-content{
			width: 80%;
			margin: auto;
			display: flex;
			height: inherit;
			align-items: center;
		}
		header .header-last-content ul{
			font-size: 35px;
			display: flex;
			color: #fff;
		}
		header .header-last-content ul li{
			padding: 20px;
		}
	
			
		section .section-last{
			display: flex;
			padding: 10px;
			margin: auto 10px;
			width: 100%;
			justify-content: space-around;
		}
		section .section-last-card{
			width: 300px;
			height: 320px;
			background: #EBEBEB;
		}
		section .section-last-card img{
			width: 300px;
			
		}
		
		footer .footer-top{
			width: 100%;
			height: 500px;
			background: url("images/background2.jpg");
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
		}
		footer .footer-top div{
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

		footer .footer-top h1{
			text-align: center;
			color: #000;
			font-size: 25px;
			font-size:35px;
			position:absolute;
			left:40%;
		}
		footer .footer-last{
			background: #CCCCCC;
			color: #000;
		}
		footer .footer-main{
			display: flex;
			justify-content: space-around;
			width: 100%;
			padding: 10px 0;
		}
		footer .footer-main h4 a{
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
		footer .footer-last-first ul li i a{
			color: #000;
		}
		footer .footer-last-3 ul{
			display: flex;
		}
		footer .footer-last-3 i{
			background: #501A8C;
			padding: 5px;
			color: #fff;
			margin: 10px 5px;
		}



		@media(max-width:400px){
              header .header-top{
              	display: block;
              }
		}
		@media(min-width:400px){
                header .header-top{
              	display: block;
              }
		}
		@media(min-width:768px){
            
		}
		@media(min-width:1050px){
			header .header-top{
				display: flex;
			}

		}
	</style>
</head>
<body>
	<header>
		
		<div class="header-last">
			<div class="header-last-content">
				<ul>
					<li><b>JODHPUR</b></li>
					<li><b>HOTELS</b></li>
				</ul>
			</div>
		</div>    
	</header>
	<main>
		<section>
			
				<div class="section-last">
					<div class="section-last-card">
						<img src="images/hotels2.jpg">
						<h2>haveli</h2>
						<p>Ideally set in the Clock Tower district of Jodhpur,
						Haveli is located 1.2 miles from Mehrangarh Fort, a 19-minute walk from Jaswant 
						Thada and 2.4 miles from Jodhpur.</p>
					</div>
					<div class="section-last-card">
						<img src="images/hotels4.jpg">
						<h2>Cosy Guest House</h2>
						<p>“The hotel was amazing for the price. My friend and I were given an odd shaped room under the 
						staircase with two twin beds,
						and we felt like we were living like Harry Potter.</p>
					</div>
					<div class="section-last-card">
						<img src="images/hotels5.jpg">
						<h2>Deodurg Jodhpur</h2>
						
						<p>Located in Jodhpur in the Rajasthan region, Deodurg Jodhpur - A Holiday Home has a balcony.</p>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="footer-top">
			<div>
				<h1>THANK YOU TO VISIT</h1>
			</div>
			
		</div>
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
					<h4><a href="#">Extra Links</a></h4>
					<ul>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Terms & Condition</a></li>
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
			</div>
		</div>
	</footer>
</body>
</html>