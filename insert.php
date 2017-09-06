<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "todo";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$Name = $_POST['Name'];
	$Desc = $_POST['Description'];
	
	$sql = "INSERT INTO Tasks (Name, Description) VALUES ('$Name', '$Desc')";
	
	if ($conn->query($sql) === TRUE)
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
?>