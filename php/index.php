<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<div>
 INSERT
	<form method="post" action="send.php">
		<input type="text" name="name" placeholder="name"><br><br>
		<input type="password" name="pswd" placeholder="password"><br><br>
		<button type="submit" name="submit">Submit</button>
	</form>
<br>
<br>
<br>
	<form method="post" action="login.php">
		<input type="text" name="name" placeholder="name"><br><br>
		<input type="password" name="pswd" placeholder="password"><br><br>
		<button type="submit" name="submit">Submit</button>
	</form>
	<br>
	<a href="view.php">View records</a>
</div>
</body>
</html>