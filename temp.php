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

		echo "<div  class='row'>
		
		<span class='col-md-12 rTableCell align='right'><a href='logout.php'>Logout</a> </span></div>";
		

			session_start();
		if (isset($_SESSION['user'])){


		echo "<div  class='row col-md-12'><b>Specials</b></div><br>";
		Select the one you want to update/add
		<select>
  		 <option value="volvo">Main</option>
		  <option value="saab">Soup du Jour</option>
 		 <option value="audi">Cocktail Special</option>
		</select>

