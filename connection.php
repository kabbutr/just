
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="justsend";

$db = mysqli_connect($servername,$username,$password,$dbname);
	if($db->connect_error){
        	die("connection failed:".$db);
    }
    else{
        	echo"connected";
    	}
?>