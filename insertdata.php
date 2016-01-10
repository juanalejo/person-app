<?php

	//DBServer Connection
	include ("db_connect.php");
	


	//Checking if all the fields are set
	If ( ($_POST['FirstName'] <> "") && ($_POST['LastName'] <> "") && ($_POST['Age'] <> 0) && ($_POST['Address'] <> "") )
	{

		$FirstName = $_POST['FirstName'];   
		$LastName = $_POST['LastName'];   
		$Age = $_POST['Age'];   
		$Address = $_POST['Address'];   

		//SQL query
		mysqli_query($connection, "INSERT INTO Person (FirstName,LastName,Age,Address) 
									VALUES ('$FirstName','$LastName','$Age','$Address')") or die("SQL Query Error: ".mysqli_error());
		
	}

	mysqli_close($connection); // Closing Connection with DBServer
?>

<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<title>Insert data into database</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>
<H1>The following information has been recorded in the database:</H1>

<table class="datatable">
	
<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Address</th>
<tr>
<td><?php echo $FirstName; ?></td>
<td><?php echo $LastName; ?></td>
<td><?php echo $Age; ?></td>
<td><?php echo $Address; ?></td>
</tr>

</table>

<br><br>
<input Type="button" VALUE="Back" onClick="history.go(-1);return true;">

</body>

</html>
