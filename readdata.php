<?php

	//DBServer Connection
    include ("db_connect.php");

?>

<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">	
<title>Read Data From Database</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

<?php

	
	//Only the first name is filled
	if (($_GET['FirstName'] <> "") && ($_GET['LastName'] == ""))
	{
		$FirstName = $_GET['FirstName'];
		$query1 = mysqli_query($connection, "select * from person where FirstName='$FirstName'") or die("SQL Query Error: ".mysqli_error());
			
?>
		
		<table class="datatable">
		<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Address</th>
		
<?php
		while ($row1 = mysqli_fetch_array($query1))
		{
?>

			<tr>
			<td><?php echo $row1['FirstName']; ?></td>
			<td><?php echo $row1['LastName']; ?></td>
			<td><?php echo $row1['Age']; ?></td>
			<td><?php echo $row1['Address']; ?></td>
			</tr>
			
<?php
		}
?>

		</table>
		<br><br><input Type="button" VALUE="Back" onClick="history.go(-1);return true;">
		
<?php		
	}//ENDIF

	
	//Only the last name is filled
	if (($_GET['LastName'] <> "") && ($_GET['FirstName'] == ""))
	{
		$LastName = $_GET['LastName'];
		$query1 = mysqli_query($connection, "select * from person where LastName='$LastName'") or die("SQL Query Error: ".mysqli_error());
?>
		
		<table class="datatable">
		<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Address</th>
		
<?php
		while ($row1 = mysqli_fetch_array($query1))
		{
?>

			<tr>
			<td><?php echo $row1['FirstName']; ?></td>
			<td><?php echo $row1['LastName']; ?></td>
			<td><?php echo $row1['Age']; ?></td>
			<td><?php echo $row1['Address']; ?></td>
			</tr>
			
<?php
		}
?>

		</table>
		<br><br><input Type="button" VALUE="Back" onClick="history.go(-1);return true;">
		
<?php		
	}//ENDIF
	
	//First Name and Last Name are filled
	if (($_GET['FirstName'] <> "") && ($_GET['LastName'] <> ""))
	{
		$FirstName = $_GET['FirstName'];
		$LastName = $_GET['LastName'];
		$query1 = mysqli_query($connection, "select * from person where FirstName='$FirstName' AND LastName='$LastName'") or die("SQL Query Error: ".mysqli_error());
		

?>
		
		<table class="datatable">
		<tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Address</th>
		
<?php		
		while ($row1 = mysqli_fetch_array($query1))
		{
?>

			<tr>
			<td><?php echo $row1['FirstName']; ?></td>
			<td><?php echo $row1['LastName']; ?></td>
			<td><?php echo $row1['Age']; ?></td>
			<td><?php echo $row1['Address']; ?></td>
			</tr>
			
<?php
		}
?>

		</table>
		<br><br><input Type="button" VALUE="Back" onClick="history.go(-1);return true;">
		
<?php		
	}//ENDIF
	
	//None are filled
	if (($_GET['FirstName'] == "") && ($_GET['LastName'] == "")) 
	{
?>
		
		<p>Please, insert First Name or Last Name</p>
		<br><br><input Type="button" VALUE="Back" onClick="history.go(-1);return true;">
		
<?php		
	}//ENDIF

	// Closing Connection with DBServer
	mysqli_close($connection);
?>


</body>
</html>