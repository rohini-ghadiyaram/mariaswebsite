
<!DOCTYPE html>
		<html lang="en">
		  <head>
		  	  <title> Marias  Menu </title>
		    <meta charset="utf-8">

		 <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		  <link href="css/mariasstyles2.css" rel='stylesheet'>
		 <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
		</head>
		<body>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
		<div id="header">
			<h3> WELCOME TO</h3> <br> <h1>MARIA'S RESTAURANT</h1> <br> <h2>Finest Italian-American-Greek Cuisine</h2>
		</div>
	</div>
	</div>
<?php
 
		
		session_start();
		
		$user="admin";
		$pwd="marias";

			
			if(isset($_SESSION['user']) AND isset($_SESSION['pwd']))
			{
				
				
				echo "<script>location.href='updatespecial.php'</script>";
				
			}
			else
			{
				if($_POST['user']==$user && $_POST['pwd']==$pwd)
				{
					$_SESSION['user']=$user;
					$_SESSION['pwd']=$pwd;
					echo "<script>location.href='logincheck.php'</script>";
				}
				else
				{
				echo "<script>alert('username or passsword incorrect!')</script>";
				echo "<script>location.href='login.php'</script>";
				
				}
			}
		
			

?>
	</div>
		</head>
		<body>

	
</body>
</html>