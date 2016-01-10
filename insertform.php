<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<title>Insert data into database form</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

<H1>Insert data into database</H1><br><br>


<form action="insertdata.php" method="POST">
<table class="datatable">
<tr>
<td>First Name:</td>
<td><input type="text" name="FirstName"></td>
<td>Last Name:</td>
<td><input type="text" name="LastName"></td>
<td>Age:</td>
<td><input type="Integer" name="Age"></td>
<td>Address:</td>
<td><input type="text" name="Address"></td>
</tr>
</table>
<br>
<br>
<input type="submit" value="Send"> <input Type="button" VALUE="Back" onClick="history.go(-1);return true;">
</form>

</body>
</html>
