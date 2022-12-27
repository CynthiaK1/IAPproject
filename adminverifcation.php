<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN VERIFICATION</title>
</head>
<body>
    <style>
        body {
    font-size: 120%;
    background-image: url("https://i.pinimg.com/474x/73/8b/4a/738b4a07e3747bcc42b6c54c17e3ec44.jpg");
    align-items: center;
    
  }
        form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    color:white;
    border-color: rgb(118, 136, 146);
    background-color: rgba(0,0,0,0.0);
    border-radius: 0px 0px 10px 10px;
    border: 1px solid #B0C4DE;
    align-items: center;
   }

    
    
    </style>
   
    <form method="post" action="RegisterAdmin.php">
        <div>
    <h1>ADMIN VERIFICATION</h1>
    <p>Kindly enter the access code given to continue</p>
    </div>
    <label> Access Code : </label>
    <input type = "text" name = "codeName">
    <input type="submit" value = "SUBMIT">
    </form>

    

    <?php

    $code = $_POST['codeName'];

    if($code === "1234"){
      header('Location: RegisterAdmin.php');}
    else{
       echo "<script>alert('Incorrect')</script>";
    }

    ?>
    

</body>
</html>