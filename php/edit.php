<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demoform";

$edit=$_GET['id'];

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="select * from tableform where id='$edit'";

$result=$conn->query($sql);

$output = $result->fetch_assoc();

print_r($output);

// echo $output['uname'];
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
    </head>

    <body>
        <form method="post" action="update.php">

            <input type="text" name="name" placeholder="name" value="<?php echo $output['uname'];?>">
            <br>
            <input type="password" name="pswd" placeholder="password" value="<?php echo $output['pwd'];?>">
            <br>
            <input type="hidden" name="editid"  value="<?php echo $output['id'];?>">
            <button type="submit" name="submit">Submit</button>
        </form>
    </body>

    </html>
