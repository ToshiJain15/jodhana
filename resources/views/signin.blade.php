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
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=ABeeZee&family=Quicksand:wght@400;500&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'ABeeZee&family', sans-serif;
		}

		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: url('images/log.jpg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			position: relative;
			height: 100%;
			width: 100%;
		}

		.box {
			position: relative;
			width: 380px;
			height: 420px;
			background-color: #8a4242;
			border-radius: 9px;
			overflow: hidden;
		}

		.box::before {
			content: '';
			position: absolute;
			top: -50%;
			left: -50%;
			width: 380px;
			height: 420px;
			background: linear-gradient(0deg, transparent, #4347c6, #7d8296);
			transform-origin: bottom right;
			animation: animate 6s linear infinite;
		}

		.box::after {
			content: '';
			position: absolute;
			top: -50%;
			left: -50%;
			width: 380px;
			height: 420px;
			background: linear-gradient(0deg, transparent, #4347c6, #7d8296);
			transform-origin: bottom right;
			animation: animate 6s linear infinite;
			animation-delay: -3s;
		}

		@keyframes animate {
			0% {
				transform: rotate(0deg);
			}

			100% {
				transform: rotate(360deg);
			}
		}

		.form {
			position: absolute;
			inset: 7px;
			background: #23242a;
			z-index: 10;
			border-radius: 9px;
			padding: 50px 40px;
			display: flex;
			flex-direction: column;
		}

		.form h2 {
			color: #fcc99e;
			font-weight: 500;
			text-align: center;
			letter-spacing: 0.1em;
		}

		.inputbox {
			position: relative;
			width: 300px;
			margin-top: 35px;
		}

		.inputbox input {
			position: relative;
			width: 100%;
			padding: 10px 0px 10px;
			background: transparent;
			color: #23242a;
			border: none;
			outline: none;
			z-index: 10;
			letter-spacing: 0.05em;
		}

		.inputbox span {
			position: absolute;
			color: #8f8f8f;
			left: 0;
			padding: 10px 0px 10px;
			font-size: 1em;
			pointer-events: none;
			transition: 0.5s;
			letter-spacing: 0.05s;

		}

		.inputbox input:valid~span,
		.inputbox input:focus~span {
			color: #fcc99e;
			transform: translatex(0px) translateY(-34px);
			font-size: 0.75em;
		}

		.inputbox i {
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 2px;
			background: #fcc99e;
			border-radius: 4px;
			transition: 1s;
			pointer-events: none;
			z-index: 9;
		}

		.inputbox input:valid~i,
		.inputbox input:focus~i {

			height: 44px;
		}

		.links {
			display: flex;
			justify-content: space-between;
		}

		.links a {
			margin: 10px 0;
			color: #8f8f8f;
			text-decoration: none;
		}

		.links a:hover,
		.links a:nth-child(1) {
			color: #fcc99e;
		}

		input[type="submit"] {
			border: none;
			outline: none;
			background: #fcc99e;
			width: 100px;
			border-radius: 5px;
			padding: 11px 11px;
			margin-top: 10px;
			font-weight: 600;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<div class="box">
		<form class="form" method="POST" action="{{ route('login') }}">
			@csrf
			<h2>Sign in</h2>
			<div class="inputbox">
				<input type="text" name="email" required>
				<span>username</span>
				<i></i>
			</div>
			<div class="inputbox">
				<input type="password" name="password" required>
				<span>password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">signup</a>
			</div>
			<input type="submit" name="" value="login">
			<br>
			@if ($errors->any())
			@foreach ($errors->all() as $error)
			<p class="text-white text-center" style="font-size:12px;">{{$error}}</p>
			@endforeach
			@endif
	</div>
	</form>
</body>

</html>