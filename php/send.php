<?php

$servername='localhost';
$username="root";
$password = "";
$dbname="demoform";

$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['name'];
$pswd = $_POST['pswd'];

$sql = "INSERT INTO tableform (uname, pwd) VALUES ('$name', '$pswd')";

if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">window.alert('Record inserted sucessfully.');
      window.location.href = 'index.php';</script>"; 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>