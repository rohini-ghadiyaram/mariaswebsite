
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
<?php 
session_start();
		if (isset($_SESSION['user'])){

				$id=$_GET['id'];
				
		echo "<div  class='row col-md-12'><b>Delete Special</b></div><br>";
		
		include "db.php"; 

				$sql="DELETE FROM special_master WHERE mid='$id'";

			if ($conn->query($sql) === TRUE) {
				echo "deleted";
					
				}
				else{
					echo "error";
					echo $mysqli->error;
				}
				header("location:updatespecial.php");
			
		}
	
		
?>
	
</div>
</body>
</html>