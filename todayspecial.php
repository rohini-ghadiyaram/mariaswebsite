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
	<div class="row">
						<div class="col-md-3">
							<a href='marias.html' class="btn btn-primary btn-block">HOME</a>
						</div>
						<div class="col-md-3">
							<a href='about.html' class="btn btn-primary btn-block">ABOUT US</a>
						</div>
						<div class="col-md-3">	
							<div class="btn-group btn-block">
								<button data-toggle="dropdown" class="btn btn-primary btn-block dropdown-toggle">
									MENU
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
										<li><a href='lunch.html' class="btn btn-primary btn-block">LUNCH MENU</a></li>
										<li><a href='dinner.html' class="btn btn-primary btn-block">DINNER MENU</a></li>
										<li><a href='catering.html' class="btn btn-primary btn-block">CATERING MENU</a></li>
										<li><a href='tuesday.html' class="btn btn-primary btn-block">TUESDAY NIGHT SPECIAL MENU</a></li>
										<li><a href='earlybird.html' class="btn btn-primary btn-block">EARLY BIRD SPECIALS MENU</a></li>
										<li><a href='todayspecial.php' class="btn btn-primary btn-block">TODAY's SPECIAL</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<a href='location.html' class="btn btn-primary btn-block">CONTACT</a>
						</div>

	</div>

		<div  class="row"> 
			<div class="col-md-12 logo">
			TODAY'S  SPECIALS
			</div>
		</div>

		<?php 
		echo " <div  class='row'><div class='col-md-12'> <b><u><center> Main specials</center></u></b></div></div>";
		include "db.php";
		$resultset=$conn->query("SELECT * from special_today");
		$flag=0;
		if($resultset->num_rows!=0)
		{
			while($rows=$resultset->fetch_assoc())
			{
					$item_type=$rows['t_item_type'];
					$item=$rows['t_item_name'];
					$descr=$rows['t_description'];
					$rate=$rows['t_rate'];
					if($item_type=='main'){
						$flag=1;
					echo "<div  class='row'>";
					echo "<span class='col-md-9 offset-md-1  rTableCell'><u><b>$item</b> </u></span><span class='col-md-1 offset-right-md-1 rTableCell text-left'><b>$$rate</b></span>";
					echo "<div class='col-md-11 offset-md-1 '>$descr</div>";
					echo "</div>";
				}
			}
			if($flag==0){
			echo "<br>none<br>";
		}
		}
		

		echo "<div  class='row'><div class='col-md-12'> <b><u><center>Soup du Jour</center></u></b></div></div>";
		include "db.php";
		$resultset=$conn->query("SELECT * from special_today");
		$flag=0;
		if($resultset->num_rows!=0)
		{
			while($rows=$resultset->fetch_assoc())
			{
				
					$item_type=$rows['t_item_type'];
					$item=$rows['t_item_name'];
					$descr=$rows['t_description'];
					$rate=$rows['t_rate'];
					if($item_type=='soup'){
						$flag=1;
					echo "<div  class='row'>";
					echo "<span class='col-md-9 offset-md-1 rTableCell'><u><b>$item</b> </u></span><span class='col-md-1 offset-right-md-1 rTableCell'><b>$$rate</b></span>";
					echo "<div class='col-md-11 offset-md-1'>$descr</div>";
					echo "</div>";

				}
		
			}
			if($flag==0){
			echo "<br>none<br>";
		}

		}
	echo "<div  class='row'><div class='col-md-12'> <b><u><center>Cocktail Special</center></u></b></div></div>";
		include "db.php";
		$resultset=$conn->query("SELECT * from special_today");
		$flag=0;
		if($resultset->num_rows!=0)
		{
			while($rows=$resultset->fetch_assoc())
			{
					$item_type=$rows['t_item_type'];
					$item=$rows['t_item_name'];
					$descr=$rows['t_description'];
					$rate=$rows['t_rate'];
					if($item_type=='cocktail'){
						$flag=1;
					echo "<div  class='row'>";
					echo "<span class='col-md-9 offset-md-1 rTableCell'><u><b>$item</b> </u></span><span class='col-md-1 offset-right-md-1 rTableCell'><b>$$rate</b></span>";
					echo "<div class='col-md-11 offset-md-1 '>$descr</div>";
					echo "</div>";

			}
		}
		if($flag==0){
			echo "<br>none<br>";
		}
		}

		 ?>
</div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>

	</html>
