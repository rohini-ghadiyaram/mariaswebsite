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

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
		<div id="header">
			<h3> WELCOME TO</h3> <br> <h1>MARIA'S RESTAURANT</h1> <br> <h2>Finest Italian-American-Greek Cuisine</h2>
		</div>
	</div>
	</div>
	


		<div  class="row"> 
			<div class="col-md-12 logo">
			TODAY'S  SPECIAL 
			</div>
		</div>

<?php 

		echo "<div  class='row'><span class='col-md-12 rTableCell align='right'><a href='logout.php'>Logout</a> </span></div>";
		

			session_start();
		if (isset($_SESSION['user'])){
		echo "<div  class='row col-md-12'><b>Specials</b></div><br>";
		
		include "db.php"; 

		$resultset=$conn->query("SELECT * from special_master");

		echo "<div  class='row'>
		
		<span class='col-md-1 rTableCell'><b>ITEM TYPE</b> </span>
		<span class='col-md-2 rTableCell'><b>ITEM</b> </span>
		<span class='col-md-4 rTableCell'>	<b>DESCRIPTION</b> </span>
		<span class='col-md-1 rTableCell'> <b>RATE</b></span>
		<span class='col-md-2 rTableCell'> <b>UPDATE</b></span>
		<span class='col-md-2 rTableCell'><b> DELETE</b></span>";
		echo "</div><br>";

		if($resultset->num_rows!=0)
		{
			while($rows=$resultset->fetch_assoc())
			{
				$id=$rows['mid'];
				$item_type=$rows['item_type'];
				$item=$rows['Item_name'];
				$descr=$rows['Description'];
				$rate=$rows['Rate'];

				

				echo "<div  class='row'>";
				echo"<span class='col-md-1 rTableCell'><input type='checkbox' id='$id' name='feature' value='$item_type'  />  $item_type</span>";
				echo "<span class='col-md-2 rTableCell'>$item</span>";
				echo "<span class='col-md-4 rTableCell'>$descr</span>";
				echo "<span class='col-md-1 rTableCell'>$rate</span>";
				echo "<span class='col-md-2 rTableCell'><a href='editlunchmain.php?id=$id'>	<input type='submit' name='Update' value='Update'></a></span>";
				echo "<span class='col-md-2 rTableCell'><a href='deletelunchmain.php?id=$id'>	<input type='submit' name='Delete' value='Delete'></a></span></div>";
				echo "<br>";

			}
		}else
		echo "no results";
		echo "<div><span class='col-md-2 rTableCell'><a href='addlunchmain.php'><input type='submit' name='Add' value='Add New Item'></a></span></div>";
		echo "<div><span class='col-md-2 rTableCell'><a href='addtodaymain.php'><input type='submit' name='Add2' value='Add to Todays Special'></a></span></div>";
	
		
	}	
else{
	echo "<script> location.href='login.php'</script>";
}
?>
<div  class="row" > 
			<div class="col-md-12 logo" id="php_code">
			
			</div>
		</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

	</html>
