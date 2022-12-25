<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jodhana</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"  />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap'); 
		*{
			margin: 0;
			padding: 0;
		   font-family: 'poppins',sans-serif;
		}
		body{
			background: url('images/regback.jpg');
			min-height: 90vh;
			background-position:center;
			position: relative;
			background-size: cover;
		  background-position: center;
		  background-repeat: no-repeat;
		}
		div.main{
			width: 400px;
			margin: 30px auto 0px auto;
		}
		h2{
			text-align: center;
			padding: 10px;

		}
		div .register{
			background-color: rgba(0, 0, 0, 0.4);
			width: 100%;
			font-size: 18px;
			border-radius: 20px;
			border: none;
			outline: none;
			box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.7);
			color: #fff;
		}
		form#register{
			margin: 10px;
		}
		label{
			font-size: 18px;
			font-style: italic;
		}
		input#name{
			width: 300px;
			border: 1px solid #ddd;
			border-radius: 3px;
			outline: none;
			padding: 5px;
			background-color: #fff;
			box-shadow: inset 1px 1px 5px rgba(0, 0, 0, 0.3);
		}
		input#submit{
			width: 150px;
			padding: 5px;
			font-size: 16px;
			border: none;
			margin: 13px;
			cursor: pointer;
		}

    </style>
</head>
<body>
<div class="main">


		<div class="register">
			<h2>Register Here</h2>
			<form id="register" action="{{ route('register') }}" method="post">
			@csrf
				<label>NAME :</label>
				<br>
                 <input type="text" name="name" id="name" placeholder="enter your name" required >
				 @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                 <br><br>

				<label> Email :</label>
				<br>
				<input type="Email" name="email" id="name" placeholder="enter your Email" required>
				@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                    </span>
                @enderror
				<br><br>
				 <label >Phone-no :</label>
				 <br>
                <input type="tel" id="name" name="phone_no" placeholder="enter your phone-no" required>
				@error('phone_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br><br>
                <label>Aadhar-number :</label>
                <br>
                <input type="text" data-type="adhaar-number" maxLength="19" id="name" name="aadhar_no" placeholder="enter adhar-no" required>
				@error('aadhar_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br><br>
                <label>Password :</label>
                <br>
                <input type="password" id="name" name="password" placeholder="enter password" required>
				@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <br><br>
                <label>Confirm Password:</label>
                <br>
                <input type="password" name="password_confirmation" id="name" placeholder="confirm password" required>
                 <br>
                 <button id="submit">{{ __('Register') }}</button>
			</form>
	</div>
</body>
</html>