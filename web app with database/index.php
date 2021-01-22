<html>
<head>	 
	 <link type=""text/css" rel="stylesheet" href="css/bootstrap.css"/>
	 <script src="js/bootstrap.js"></script>
	 <script src="js/jquery.min.js"></script>
	 
	 <style>
		#head {
			background-color : MidnightBlue;
			color : PapayaWhip;
		}
	 
	 </style>
	 
</head>

<body>
	<div class="container-fluid">
		<?php 'conn.php'?>
		
		<div id="head" class="row">
			<div class="col-xs-10"><h2>PhP Beadando : blog</h2></div>
			<div class="col-xs-10"></div>			
		</div>
		<br>
		
		<div id=info>
		
		<h2>Belépés</h2>
		<form action="login.php" method="post">
			<label>Felhasználónév: </label>
		<input type="text" name="uname" placeholder="Felhasználónév"><br><br>
			<label>Jelszó:</label>
		<input type="text" name="pass" placeholder="Jelszó"><br><br>
		
			<button style="background-color:#191970;color:PapayaWhip;" type ="submit"><b>Belépés</b></button>

		</form>	
		
		<h2>Regisztráció</h2>
		<form action="signup.php" method="post">
		<label>Felhasználónév: </label>
		<input type="text" name="name" placeholder="Felhasználónév"><br><br>
			
		<label>Jelszó:</label>
		<input type="text" name="pass" placeholder="Jelszó"><br><br>
		
		<button style="background-color:#191970;color:PapayaWhip;" type ="submit"><b>Regisztráció</b></button>

		</form>		
		
	
	</div>	
</body>

</html>