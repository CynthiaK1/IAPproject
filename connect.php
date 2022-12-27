<?php
$conn= new mysqli("localhost","root","","ecommerce");
if($conn->connect_error)
{
    die("Not connected".$conn->connect_error);
}
else
{
    echo "Connected Successfully";
}
echo"<br>";
?>
