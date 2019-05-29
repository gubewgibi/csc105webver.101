<!DOCTYPE html>
<html>
<head>
	<title>Submit</title>
</head>
<body>
	You ordered<br>
	bicycle amount: <?php echo $_POST["A1"];?> price per each is <?php echo $_POST["A2"];?> baht <br>
	helmet amount: <?php echo $_POST["B1"];?> price per each is <?php echo $_POST["B2"];?> baht <br>
	gloves amount: <?php echo $_POST["C1"];?> price per each is <?php echo $_POST["C2"];?> baht <br>
	total amount: <?php echo ($_POST["A1"]*$_POST["A2"]+$_POST["B1"]*$_POST["B2"]+$_POST["C1"]*$_POST["C2"])*1.07;?> baht
</body>
</html>