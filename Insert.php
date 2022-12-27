<!DOCTYPE html>
<html>
    <head><meta charset="utf-8"></head>
    <title>REGISTRATION INFORMATION</title>
    <link rel="stylesheet" href="">
    <body>
        <style> 
         table
{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse:collapse;
}
table td,table th
{
    border:2px solid black;
    padding:5px;
}

        </style>

   
<?php
require("connect.php");


$sql="CREATE TABLE register_users
(
    record_id INT(10) AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(10) NOT NULL,
    lastName VARCHAR(10) NOT NULL,
    userName VARCHAR(10) NOT NULL,
    email VARCHAR(20) NOT NULL,
    password VARCHAR(15) NOT NULL
    
)";


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



$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$uname=$_POST["user_name"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql_insert="INSERT INTO register_users(firstName,lastName,userName,email,password)VALUES
('$fname','$lname','user_name','$email','$password')";
 
 if($conn->query($sql_insert)===TRUE)
 {
    echo"inserted successfully";
 }
else
{
    echo "error".$conn->error;
}
session_start();
        
        if(isset($_POST["reg_user"]))
        {
            if (empty($_POST["firstname"])|| empty($_POST["password"]))
            {
                header("location:register.php");
                exit();
            }
            else
            {
                $sql_select="SELECT * from register_users where firstname ='".$_POST["first_name"]."' and password =
                '".$_POST["password"]."'";
                $result=$conn->query($sql_select);
        
                if($result->fetch_assoc())
                {
                    $_SESSION["User"]=$_POST["first_name"];
                    header("location:login.php");
                }
            }
        }



?>



</body>
</html>