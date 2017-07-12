<?php

$servername='localhost';
$username="root";
$password = "";
$dbname="demoform";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from tableform";
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
	<th>action</th>
</tr>
	<?php while ($sqlres=$result->fetch_assoc()) { ?>
<tr>
	<td><?php echo $sqlres['id']; ?></td>
	<td><?php echo $sqlres['uname']; ?></td>
	<td><?php echo $sqlres['pwd']; ?></td>
	<td><a href="del.php?id=<?php echo $sqlres['id']; ?>">Delete</a></td>
	<td><a href="edit.php?id=<?php echo $sqlres['id']; ?>">Edit</a></td>
</tr>
<?php } ?>
</table>

</body>
</html>