
<?php

 require 'function.php';
 
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = trim($_POST['name']);
	$year = trim($_POST['year']);
	
	if(empty($name))
		echo "Please provide a name";
	else {
		addmovie($name, $year);
	}
 }
 
?>

<!DOCTYPE html>
<html>
<head>
<style>
	body {
		font-family: Arial;
	}
	.form {
	    width: 30%;
		border: 5px solid lightblue;
		border-radius: 30px;
		margin: 50px auto;
		padding: 20px 20px 20px 20px;
	}
	
	.result {
	    width: 30%;
		border: 5px solid lightblue;
		border-radius: 30px;
		margin: 0px auto;
		padding: 20px 20px 20px 20px;
	}
	
	p {
		font-size: 20px;
		font-weight: bold;
	}
	
</style>
</head>
<body>
	
	<form class="form" action="" method="post">
		<p>Input the movies:</p>
		<label for="name">Movie's Name:</label>
		<input size="30" type="text" name="name">
		<br><br>
		<label for="year">Movie's Year:</label>
		<input size="8" type="text" name="year">
		<br><br>
		<input type="submit" value="Input">
	</form>
	<br>
	<div class="result">
		<p>If you want to check the result: </p>
		<button type="button" onclick="load()">View the list</button>
		<br>
		<br>
		<p id="results"></p>
	</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script>
	function load(){
		$.ajax({
			url: "inputmovies.php",
			cache: false
		})
		.done(function( html ) {
			$( "#results" ).replaceWith( html );
		});
	}
</script>
  
  
</body>
</html>



