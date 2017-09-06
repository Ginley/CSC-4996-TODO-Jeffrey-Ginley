<?php
	include ("classes.php");
	
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "todo";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sql = "SELECT Name, Description, Created FROM Tasks";
	$result = $conn->query($sql);

	$tasks = array();
	
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$temp = new Task($row["Name"], $row["Description"], $row["Created"]);
				echo "<b>Name of task:</b> " . $temp->get_name(). " - <b>Description of task: </b>" . $temp->get_desc(). " <b> When task was created: </b>" . $temp->get_datecreated(). "<br>";
			}
		} else {
			echo "0 results";
		}
		$conn->close();
	?>