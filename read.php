<?php
   include('read_details.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Read</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 

</head>
<body>
	<form method="post" action="read_details.php">

		<div class="header">
			<h2>JUstSend</h2>
		</div>
		<div class="header1">
			<h3>Type The Code</h3>
		</div>
		<div class="content">
			<input type="text" name="code" placeholder="Code">
			<input type="submit" name="submit" value="submit">
			
</body>
</html>