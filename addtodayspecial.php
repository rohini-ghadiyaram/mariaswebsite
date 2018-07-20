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
				<span class='col-md-6 rTableCell'>
  				<input type="button" value="print" onclick="PrintDiv();" />
			</span>
			
				<span class='col-md-6 rTableCell text-right'><a href='logout.php'>Logout</a> </span></div>
		</div>
<div id='divToPrint'>
		<div  class="row"> 
			<div class="col-md-12 logo">
			 <center>TODAY'S  SPECIAL </center>
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
					echo "<span class='col-md-9 offset-md-1'><u><b>$item</b> </u></span>

						<span class='col-md-2  text-left'><b>$$rate</b></span></div>";
					echo "<div class='row'><div class='col-md-11 offset-md-1 '>$descr</div></div>";
					
				}
			}
			if($flag==0){
			echo "<div  class='row'><div class='col-md-12 '>none</div></div>";
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
					echo "<span class='col-md-9 offset-md-1 '><u><b>$item</b> </u></span><span class='col-md-2  text-left'><b>$$rate</b></span></div>";
					echo "<div class='row'><div class='col-md-11 offset-md-1'>$descr</div>";
					echo "</div>";

				}
		
			}
			if($flag==0){
						echo "<div  class='row'><div class='col-md-12 '>none</div></div>";
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
					echo "<span class='col-md-9 offset-md-1'><u><b>$item</b> </u></span><span class='col-md-2  text-left'><b>$$rate</b></span></div>";
					echo "<div class='row'><div class='col-md-11 offset-md-1 '>$descr</div></div>";
					

			}
		}
		if($flag==0){
						echo "<div  class='row'><div class='col-md-12 '>none</div></div>";
		}
		}

		 ?>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=500,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()"><div class="container-fluid">' + divToPrint.innerHTML + '</div></body></html>');
        popupWin.document.close();
            }
 </script>
 </div>

</body>

	</html>