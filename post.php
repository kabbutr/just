<?php 
	include_once'post_details.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">

	<form method="post" action="post_details.php" enctype="multipart/form-data">
		<div class="header1">
			<center>
	    	<h1>JUstSend</h1>
		
		<div class="input">
			<br><input type="text" name="name" placeholder="Your name"></br>
		</div>
		<div class="input">
			<br><input type="text" name="email" placeholder="Your email or phone"></br>
		</div>
		<div class="input">
			<br><input type="text" name="subject" placeholder="Subject"></br>
		</div>
		<div class="input">
			<br><textarea name="msg" cols="32" rows="10" placeholder="Your message"></textarea></br>
		</div>

		<div class="selectfiles">
	 		<br><input type="file" name="image" id="fileSelect" ></br>
	 <!--<input type="file" name="file" id="fileSelect" >-->

		</div>
<!-- 		<button name="send" type="button">send</button>-->		
<br><input type="submit" name="submit" value="submit"></br>
	</form>
</div>

</center>


</body>

</html>

