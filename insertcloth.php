<!DOCTYPE html>
<html>
    <head><meta charset="utf-8"></head>
    <title>CLOTHES INFORMATION</title>
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

$sql="CREATE TABLE register_clothes
(
    record_id INT(10) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (15) NOT NULL,
    category VARCHAR(14) NOT NULL,
    price VARCHAR(20) NOT NULL,
    size VARCHAR(15) NOT NULL
    
)";





$fname=$_POST["title"];
$category=$_POST["category"];
$price=$_POST["price"];
$size=$_POST["size"];

$sql_insert="INSERT INTO register_clothes(title,category,price,size)VALUES
('$fname','$category','$price','$size')";


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
        
        if(isset($_POST["reg_cloth"]))
        {
            if (empty($_POST["Name"])|| empty($_POST["price"]))
            {
                header("location:cloth.php");
                exit();
            }
            else
            {
                $sql_select="SELECT * from cloth where clothName ='".$_POST["clothName"]."' and price =
                '".$_POST["price"]."'";
                $result=$conn->query($sql_select);
        
                if($result->fetch_assoc())
                {
                    $_SESSION["User"]=$_POST["clothName"];
                    header("");
                }
            }
        }


?>



</body>
</html>