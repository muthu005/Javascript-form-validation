<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demoform";
$val=$_GET['id'];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="Delete from tableform where id='$val'";
// $result=$conn->query($sql);
// echo $_GET['id'];
if ($conn->query($sql) === TRUE) {
    echo "1 record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>