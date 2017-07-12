<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demoform";

$conn = new mysqli($servername, $username, $password, $dbname);
$name = $_POST['name'];
$password = $_POST['pswd'];
$id=$_POST['editid'];

$sql = "UPDATE tableform SET uname='$name',pwd='$password' WHERE id='$id'";


$result=$conn->query($sql);

if ($result==true) {
echo "Updated successfully";
}
else{
echo "Error";
 }

?>