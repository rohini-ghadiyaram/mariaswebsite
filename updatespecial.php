
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
			UPDATE TODAY'S  SPECIAL 
			</div>
		</div>

<?php 


		echo "<div  class='row'><span class='col-md-12 rTableCell align='right'><a href='logout.php'>Logout</a> </span></div>";
		session_start();
if (!isset($_SESSION['user']))
{
	echo "<script> location.href='login.php'</script>";
}
else{

if (isset($_REQUEST['Add2']))
{
			if (empty($_REQUEST['id'])){
				 echo "None selected";
			}else
			{
			$ids=$_REQUEST['id'];
			$counter=count($ids);

			$i=0;
		if($counter>$i){
				include "db.php"; 
				$sql="DELETE FROM special_today";
				if ($conn->query($sql) === TRUE) {
				
			while($counter>0)
			{
				$mid=$ids[$i];
				$i=$i+1;
				$resultset=$conn->query("SELECT * from special_master where mid=$mid");
				
					if($resultset->num_rows!=0)
					{
						
					while($rows=$resultset->fetch_assoc())
					{
							$id=$rows['mid'];
							$item_type=$rows['item_type'];
							$item=$rows['Item_name'];
							$descr=$rows['Description'];
							$rate=$rows['Rate'];
								$sql="INSERT INTO special_today(tid,t_item_type,t_item_name, t_description, t_rate) VALUES ('$id','$item_type', '$item', '$descr', '$rate')";

								if ($conn->query($sql) === TRUE) {
									
							echo "<script> location.href='addtodayspecial.php'</script>";
										
									}
									else{
										echo "error";
										echo $conn->error;
									}
									
					}
								
					}	
				$counter=$counter-1;			
			}
		}
		}}		
}	
else{
		
			
		echo "<div  class='row col-md-12'><b>Main Specials</b></div><br>";
		
		include "db.php"; 

		$resultset=$conn->query("SELECT * from special_master");

		echo "<form><div  class='row'>
		
		<span class='col-md-2 rTableCell'><b>TODAY SPECIAL</b> </span>
		<span class='col-md-2 rTableCell'><b>ITEM</b> </span>
		<span class='col-md-3 rTableCell'>	<b>DESCRIPTION</b> </span>
		<span class='col-md-1 rTableCell'> <b>RATE</b></span>
		<span class='col-md-2 rTableCell'> <b>UPDATE</b></span>
		<span class='col-md-2 rTableCell'><b> DELETE</b></span>";
		echo "</div><br>";
		$flag=0;
		if($resultset->num_rows!=0)
		{ 
			while($rows=$resultset->fetch_assoc())
			{
				$id=$rows['mid'];
				$item_type=$rows['item_type'];
				$item=$rows['Item_name'];
				$descr=$rows['Description'];
				$rate=$rows['Rate'];
				
								
				if($item_type=='main'){
				$flag=1;
				echo "<div  class='row'>";
				echo"<span class='col-md-2 rTableCell'><input type='checkbox'  name='id[]' value='$id'  /> </span>";
				echo "<span class='col-md-2 rTableCell'>$item</span>";
				echo "<span class='col-md-3 rTableCell'>$descr</span>";
				echo "<span class='col-md-1 rTableCell'>$rate</span>";
				echo "<span class='col-md-2 rTableCell'><a href='editspecial.php?id=$id'>	<input type='button' name='Update' value='Update'></a></span>";
				echo "<span class='col-md-2 rTableCell'><a href='deletespecial.php?id=$id'>	<input type='button' name='Delete' value='Delete'></a></span></div>";
				echo "<br>";
				}
			}
			
			}
		if($flag==0){
			echo "no results";
		}
		echo "<div  class='row'>
		 <div  class='row col-md-12'><b>Soup du Jour</b></div><br>
		
		<span class='col-md-2 rTableCell'><b>TODAY SPECIAL</b> </span>
		<span class='col-md-2 rTableCell'><b>ITEM</b> </span>
		<span class='col-md-3 rTableCell'>	<b>DESCRIPTION</b> </span>
		<span class='col-md-1 rTableCell'> <b>RATE</b></span>
		<span class='col-md-2 rTableCell'> <b>UPDATE</b></span>
		<span class='col-md-2 rTableCell'><b> DELETE</b></span>";
		echo "</div><br>";
		$flag=0;

		$resultset=$conn->query("SELECT * from special_master");
		while($rows=$resultset->fetch_assoc())
			{

				$id=$rows['mid'];
				$item_type=$rows['item_type'];
				$item=$rows['Item_name'];
				$descr=$rows['Description'];
				$rate=$rows['Rate'];
				
								
				if($item_type=='soup'){
					$flag=1;
					echo "<div  class='row'>";
					echo"<span class='col-md-2 rTableCell'><input type='checkbox'  name='id[]' value='$id'  /> </span>";
					echo "<span class='col-md-2 rTableCell'>$item</span>";
					echo "<span class='col-md-3 rTableCell'>$descr</span>";
					echo "<span class='col-md-1 rTableCell'>$rate</span>";
					echo "<span class='col-md-2 rTableCell'><a href='editspecial.php?id=$id'>	<input type='button' name='Update' value='Update'></a></span>";
					echo "<span class='col-md-2 rTableCell'><a href='deletespecial.php?id=$id'>	<input type='button' name='Delete' value='Delete'></a></span></div>";
					echo "<br>";
				}
			}
			if($flag==0){
			echo "no results";
			}

			echo "<div  class='row'>
		 <div  class='row col-md-12'><b>Cocktail Special</b></div><br>
		
		<span class='col-md-2 rTableCell'><b>TODAY SPECIAL</b> </span>
		<span class='col-md-2 rTableCell'><b>ITEM</b> </span>
		<span class='col-md-3 rTableCell'>	<b>DESCRIPTION</b> </span>
		<span class='col-md-1 rTableCell'> <b>RATE</b></span>
		<span class='col-md-2 rTableCell'> <b>UPDATE</b></span>
		<span class='col-md-2 rTableCell'><b> DELETE</b></span>";
		echo "</div><br>";
		$flag=0;

		$resultset=$conn->query("SELECT * from special_master");
		while($rows=$resultset->fetch_assoc())
			{
				$id=$rows['mid'];
				$item_type=$rows['item_type'];
				$item=$rows['Item_name'];
				$descr=$rows['Description'];
				$rate=$rows['Rate'];
				
							
				if($item_type=='cocktail'){
					$flag=1;
				echo "<div  class='row'>";
				echo"<span class='col-md-2 rTableCell'><input type='checkbox'  name='id[]' value='$id'  /> </span>";
				echo "<span class='col-md-2 rTableCell'>$item</span>";
				echo "<span class='col-md-3 rTableCell'>$descr</span>";
				echo "<span class='col-md-1 rTableCell'>$rate</span>";
				echo "<span class='col-md-2 rTableCell'><a href='editspecial.php?id=$id'>	<input type='button' name='Update' value='Update'></a></span>";
				echo "<span class='col-md-2 rTableCell'><a href='deletespecial.php?id=$id'>	<input type='button' name='Delete' value='Delete'></a></span></div>";
				echo "<br>";
				}
			}
			if($flag==0){
			echo "no results";
			}
		echo "<div><span class='col-md-2 rTableCell'><a href='addspecial.php'><input type='button' name='Add' value='Add New Item'></a></span></div>";
		echo "<div><span class='col-md-2 rTableCell'><input type='submit' name='Add2' value='Add to Todays Special'></a></span></div></form>";
	
	}	
}	
{
}
?>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

	</html>
