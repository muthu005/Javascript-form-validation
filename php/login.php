<?php

$servername='localhost';
$username="root";
$password = "";
$dbname="demoform";

$conn = new mysqli($servername, $username, $password, $dbname);
$name=$_POST['name'];
$pswd=$_POST['pswd'];
$sql = "select * from tableform where uname='$name' and pwd='$pswd'";
//echo $sql;
$result = $conn->query($sql);
//echo $result->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
<tr>
	<th>ID</th>
	<th>User name</th>
	<th>Password</th>
</tr>
	<?php while ($sqlres=$result->fetch_assoc()) { ?>
<tr>
	<td><?php echo $sqlres['id']; ?></td>
	<td><?php echo $sqlres['uname']; ?></td>
	<td><?php echo $sqlres['pwd']; ?></td>
</tr>
<?php } ?>
</table>

</body>
</html>