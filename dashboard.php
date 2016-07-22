<!doctype html>
<html>
<head>
    <title>Dashboard</title>

    <meta charset="utf-8" />
    <style type="text/css">
	
		body {
			margin:0;
			padding:0;
			font-family: Tahoma, Geneva, sans-serif;
		}

		#blackbar {
			width:100%;
			background-color:#20262f;
			height:24px;
		}

		.fixedwidth {

			margin: 0 auto;
			width:1200px;
			background-color:white;
			overflow:hidden;
		}

		#profile {
			background-color: #f5f5f5;
			width:270px;
			float:left;
			overflow:hidden;
		}

		#avatar {
			width:100px;
			margin:50px 0 0 90px;
		}

		#profile h1 {
			margin:10px 0 0 120px;
			font-size:1.3em;

		}

		#profile p {
			margin:5px 0 30px 113px;
			font-size:0.8em;
			color:#b4a59a;
			font-weight:bold;

		}
		
		.profileline {
			border-bottom:1px solid #e1e1e1;
			width:100%;
		}

		#profile button {
			margin:20px 0 20px 85px;
			font-size:0.7em;
			padding:8px;
			border:2px solid #33b6cb;
			border-radius:3px;
			color:#33b6cb;
			background-color:white;
			font-weight:bold;
	
		}

		#dashboard {
			color:#33b6cd;
			background-image: url("images/dashboard.png");
			background-repeat:no-repeat;
			background-position:left center;
			padding:10px 0 10px 24px;
			margin:8px 18px 0 18px;
			font-size:0.7em;
			font-weight:bold;
			letter-spacing:1.5px;
			border-bottom:1px dotted #e1e1e1;
		}

		#code {
			color:#9fb7d7;
			background-image: url("images/code.png");
			background-repeat:no-repeat;
			background-position:left center;
			padding:10px 0 10px 24px;
			margin:8px 18px 0 18px;
			font-size:0.7em;
			font-weight:bold;
			letter-spacing:1.5px;
			border-bottom:1px dotted #e1e1e1;
		}

		#challenges {
			color:#9fb7d7;
			background-image: url("images/challenges.png");
			background-repeat:no-repeat;
			background-position:left center;
			padding:10px 0 10px 24px;
			margin:8px 18px 0 18px;
			font-size:0.7em;
			font-weight:bold;
			letter-spacing:1.5px;
			border-bottom:1px dotted #e1e1e1;
		}

		#prof {
			color:#9fb7d7;
			background-image: url("images/prof.png");
			background-repeat:no-repeat;
			background-position:left center;
			padding:10px 0 10px 24px;
			margin:8px 18px 0 18px;
			font-size:0.7em;
			font-weight:bold;
			letter-spacing:1.5px;
			border-bottom:1px dotted #e1e1e1;
		}

		#password {
			color:#9fb7d7;
			background-image: url("images/pass.png");
			background-repeat:no-repeat;
			background-position:left center;
			padding:10px 0 10px 24px;
			margin:8px 18px 0 18px;
			font-size:0.7em;
			font-weight:bold;
			letter-spacing:1.5px;
			border-bottom:1px dotted #e1e1e1;
		}
		
		#blank {
			height:50px;
			width:100px;

		}

		#welcome {
			float:left;
			border-bottom:1px solid #cccccc;
			margin-left:50px;
			padding:30px 600px 10px 0;
		}

		#welcome h1 {
			font-size:1.6em;
			color:#333333;
		}

		#welcome p {
			font-weight:bold;
			color:#999995;
			letter-spacing:1.5px;
			padding-top:16px;
		}
	</style>

</head>

	<body>

		<div id="container">

			<div id="blackbar"> </div>

			<div class="fixedwidth">

				<div id="profile">

					<img src="images/avatar.png" id="avatar" />

					<h1>Ani</h1>

					<p>Student</p>

					<div class="profileline"> </div>

					<button type="submit">SUBMIT RESUME</button>

					<div class="profileline"> </div>

					<div id="dashboard">Dashboard</div>

					<div id="code">Join a CodeClass</div>

					<div id="challenges">My Challenges</div>

					<div id="prof">Edit Profile</div>

					<div id="password">change password</div>

					<div id="blank"></div>

				</div>

				<div id="welcome">

					<h1>Dashboard</h1>

					<p>Welcome, Ani</p>

				</div>

			</div>

		</div>

	</body>

</html>

