<?php

$name = filterinput(Input_post, 'name');
$lastname = filterinput(Input_post, 'lastname');

if(!empty($name)) {
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "Check";
//create connection
$conn = new mysqli	($host, $dbusername , $dbpassword , $dbname);
if (mysqli_connect_error()){
	die ('connect Error ('.mysqli_connect_error() .') ' . mysqli_connect_error());
		
}
else {
	$sql = "INSERT INTO account (name , lastname)
	values ('$name' , '$lastname' ) "; 
	if ($conn-> query ($sql )) {
		echo "New Record added successfully"; 
	}
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	
}
}

else {
	echo " Please Enter First Name";
	die();
}
?>