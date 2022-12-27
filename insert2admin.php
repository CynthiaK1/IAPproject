<?php
session_start();
require_once("connect.php");

if(isset($_POST["LOGIN"]))
{
    if (empty($_POST["email"])|| empty($_POST["password"]))
    {
        header("location:admin.php");//?error=Emptyinput
        exit();
    }
    else
    {
        $sql_select="SELECT * from register_table where email ='".$_POST["email"]."' and password ='".$_POST["password"]."'";
        $result=$conn->query($sql_select);

        if($result->fetch_assoc())
        {
            $_SESSION["User"]=$_POST["first_name"];
            header("location:admin.php");
        }
        else
        {
            header("location:login.php?error=Incorrect firstname or password");
        }
    }
}
?>
            

         