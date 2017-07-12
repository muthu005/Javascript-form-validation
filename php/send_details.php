<?php

$server="localhost";
$username="root";
$password="";
$database="valDb";

$conn= new mysqli($server, $username, $password, $database);

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$comment=$_POST["comment"];

$sql= "INSERT into formtable(name, email, phone, comment) VALUES ('$name', '$email', '$phone', '$comment')";

if ($conn->query($sql) === TRUE) {
    $id = $conn->insert_id;
    echo "<script type=\"text/javascript\">window.alert('Record inserted sucessfully.');
      window.location.href = 'validate.php';</script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
