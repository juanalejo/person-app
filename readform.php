<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<title>Read data from database form</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

<H1>Read data from database</H1><br><br>

<form action="readdata.php" method="GET">
	
<table class="datatable">
<tr>
<td>First Name:</td>
<td><input type="text" name="FirstName"></td>
<td>Last Name:</td>
<td><input type="text" name="LastName"></td>
</tr>
</table>

<br>
<br>
<input type="submit" value="Send"> <input Type="button" VALUE="Back" onClick="history.go(-1);return true;">
</form>

</body>
</html>
