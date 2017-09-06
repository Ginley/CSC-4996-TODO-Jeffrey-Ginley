<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "todo";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$Name = $_POST['Name'];
	
	$sql = "DELETE FROM Tasks WHERE Name = '$Name'";
	
	if ($conn->query($sql) === TRUE)
	{
		echo "Record with the name " . $Name . " has been successfuly deleted.";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
?>