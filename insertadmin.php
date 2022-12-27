

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

$sql="CREATE TABLE register_admin
(
    record_id INT(10) AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(10) NOT NULL,
    lastName VARCHAR(10) NOT NULL,
    username VARCHAR (15) NOT NULL,
    phoneNumber VARCHAR(14) NOT NULL,
    email VARCHAR(20) NOT NULL,
    password VARCHAR(15) NOT NULL
    
)";







$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$uname=$_POST["username"];
$phoneNumber=$_POST["phoneNumber"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql_insert="INSERT INTO register_admin(firstName,lastName,username,phoneNumber,email,password)VALUES
('$fname','$lname','$uname','$phoneNumber','$email','$password')";
    if($conn->query($sql_insert)===TRUE)
        {
            echo "Inserted successfully ";
        }
    else
        {
            echo "Error ".$conn->error;
        }
echo"<br>";

session_start();
        
        if(isset($_POST["reg_user"]))
        {
            if (empty($_POST["username"])|| empty($_POST["password"]))
            {
                header("location:RegisterAdmin.php");
                exit();
            }
            else
            {
                $sql_select="SELECT * from register_admin where username ='".$_POST["username"]."' and password =
                '".$_POST["password"]."'";
                $result=$conn->query($sql_select);
        
                if($result->fetch_assoc())
                {
                    $_SESSION["User"]=$_POST["username"];
                    header("location:loginAdmin.html");
                }
            }
        }


?>



</body>
</html>
