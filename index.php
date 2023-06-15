<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
?>
<html>
<head>
<style>
	body {
		background-color:white;
		font-family: Arial, sans-serif;
	}

	.container {
		width: 80%;
		margin: 0 auto;
	}

	.navbar {
		background-color: #333;
		border: 1px solid #222;
		border-radius: 4px;
		padding: 15px;
		margin-bottom: 20px;
		color: #fff;
	}

	.navbar h3 {
		margin: 0;
		padding: 0;
		font-size: 24px;
	}

	.content {
		width: 50%;
		margin: 0 auto;
		padding: 20px;
		border: 1px solid #ccc;
		border-radius: 4px;
		background-color: #fff;
		box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
	}

	.form legend {
		font-size: 18px;
		font-weight: bold;
		margin-bottom: 10px;
		color: #333;
	}

	.form-group {
		margin-bottom: 20px;
	}

	.form-group label {
		display: block;
		font-weight: bold;
		margin-bottom: 5px;
		color: #333;
	}

	.form-group .form-control {
		width: 100%;
		padding: 8px;
		border: 1px solid #ccc;
		border-radius: 4px;
	}

	.form-group .btn {
		padding: 8px 15px;
		background-color: #ff6600;
		border: none;
		border-radius: 4px;
		color: #fff;
		cursor: pointer;
		transition: background-color 0.3s ease;
	}

	.form-group .btn:hover {
		background-color: #ff8533;
	}

	.form-group a {
		color: #666;
		text-decoration: none;
		transition: color 0.3s ease;
	}

	.form-group a:hover {
		color: #999;
	}
</style>


</head>

<body>

	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
	  <h3>Comlab Utilization System</h3>
	  </div>
	</nav>
	
	<div class="content">
		<div class="form">
		<form class="form-horizontal" method="post" action="login.php">
			<fieldset>

			<legend>Login Here</legend>

			
			<br><div class="form-group">
			  <label class="col-md-4 control-label" for="username">Username</label>  
			  <div class="col-md-5">
			  <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Password</label>
			  <div class="col-md-5">
				<input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			
			<div class="form-group" align="right">
			  <label class="col-md-4 control-label" for="login"></label>
			  <div class="col-md-5">
				<input type="submit" name="lgn" class="btn btn-success " value="Login">
			  </div>
			</div>

			</fieldset>
		</form>
		</div>
	

		<br><font color="grey">Don't have an acount?</font> <a href="Register.php">Register here </a>
		</div>
	</div>
</body>
</html>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>
