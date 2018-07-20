
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Marias  Special </title>
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
		
		include "db.php"; 
		$sql1="SELECT * FROM special_master  WHERE mid='$id'";


		$check=$conn->query($sql1);

		while($rows=$check->fetch_assoc())
			{	$item_type=$rows['item_type'];
		$item=$rows['Item_name'];
		$descr=$rows['Description'];
		$rate=$rows['Rate'];
	}
	if(isset($_POST['CANCEL'])){
		header("location:updatespecial.php");
	}

	else if(isset($_POST['UPDATE'])){
		$item_type=$_POST['item_type'];
		$item=$_POST['item'];
		$descr=$_POST['descr'];
		$rate=$_POST['rate'];

		$sql="UPDATE special_master SET item_type='$item_type', Item_name='$item',Description='$descr',Rate='$rate' WHERE mid='$id'";

		if ($conn->query($sql) === TRUE) {
			echo "updated";

		}
		else{
			echo "error";
			echo $conn->error;
		}
		header("location:updatespecial.php");
	}

}
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
					</span>
				</div>
				<div  class='row'>
					<span class='col-md-12 rTableCell'>Edit Special
					</span>
				</div>
				<div  class='row'>
					<span class='col-md-2 rTableCell'>
						<?php 
						echo $item_type;
						if ($item_type=='main')
						{
						echo "<select name='item_type'>
							<option value='main' SELECTED >Main</option>
							<option value='soup'>Soup</option>
							<option value='cocktail'>Cocktail</option>
						</select></span>";
					}else if  ($item_type=='soup')
						{
						echo "<select name='item_type'>
							<option value='main' >Main</option>
							<option value='soup' SELECTED>Soup</option>
							<option value='cocktail'>Cocktail</option>
						</select></span>";}
						else if  ($item_type=='cocktail')
						{
						echo "<select name='item_type'>
							<option value='main' >Main</option>
							<option value='soup' >Soup</option>
							<option value='cocktail' SELECTED>Cocktail</option>
						</select></span>";}
						?>
						<span class='col-md-2 rTableCell'><input type='text' name='item' value="<?php echo $item ?>"></span>
						<span class='col-md-3 rTableCell'><input type='text' name='descr' size='80' value="<?php echo $descr ?>"></span>
						<span class='col-md-1 rTableCell'><input type='text' name='rate' value="<?php echo $rate ?>"></span>
						<span class='col-md-2 rTableCell'><input type='submit' name='UPDATE' value='UPDATE'></span>
						<span class='col-md-2 rTableCell'><input type='submit' name='CANCEL' value='CANCEL'></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>