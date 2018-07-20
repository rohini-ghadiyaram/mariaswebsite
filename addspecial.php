
<!DOCTYPE html>
		<html lang="en">
		  <head>
		  	  <title> Marias Lunch Menu </title>
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
			if(isset($_POST['CANCEL'])){
				header("location:updatespecial.php");
			}

			if(isset($_POST['ADD'])){

				$item_type=$_POST['item_type'];
				
				$item=$_POST['item'];
				$descr=$_POST['descr'];
				$rate=$_POST['rate'];

				include "db.php"; 

				$sql="INSERT INTO special_master(item_type,Item_name, Description, Rate) VALUES ('$item_type', '$item', '$descr', '$rate')";

			if ($conn->query($sql) === TRUE) {
				echo "inserted";
					
				}
				else{
					echo "error";
					echo $conn->error;
				}
				header("location:updatespecial.php");
			}

		}
		else
			header("location:login.php");
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
		<div id="header">
			<h3> WELCOME TO</h3> <br> <h1>MARIA'S RESTAURANT</h1> <br> <h2>Finest Italian-American-Greek Cuisine</h2>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form method="POST">
				<div  class='row'>
				<div class='col-md-12 rTableCell'><a href='logout.php'>Logout</a> </div></div>
				<div  class='row'>
				<div class='col-md-12 rTableCell'>Add  Special</div>
		</div>
				<div  class='row'>
  		 <span class='col-md-2 rTableCell'>
  		 	<select name='item_type'>
  		 	<option value='main' SELECTED >Main</option>
		  <option value='soup'>Soup</option>
 		 <option value='cocktail'>Cocktail</option></span>
		</select></span>
				<span class='col-md-2 rTableCell'><input type='text' name='item' placeholder='Item'></span>
				<span class='col-md-3 rTableCell'><input type='text' name='descr' placeholder='Desription' size='80'></span>
				<span class='col-md-1 rTableCell'><input type='text' name='rate' placeholder='Rate'></span>
				<span class='col-md-2 rTableCell'><input type='submit' name='ADD' value='ADD'></span>
				<span class='col-md-2 rTableCell'><input type='submit' name='CANCEL' value='CANCEL'></span>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>