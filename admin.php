<html>
<body>
    <style>
        body{
            color: black;
            background-image: url("https://i.pinimg.com/474x/a8/cf/c3/a8cfc3171155c99aeb35f4256a373a2b.jpg");
        }
        table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #fce8d4;}
h1{
    text-align: center;
    text-decoration: underline;
    font-size: 38px;
    color: white

}

h3{
  font-family: Arial, sans-serif;
  font-size: 20px;
  color: black;
  border: 1px solid black;
  background-color: #fce8d4;
  text-align: center;
  padding-top: 12px;
  padding-right: 30px;
  padding-bottom: 12px;
  padding-left: 50px;}


h4{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #fce8d4(120,100%,50%,0.3);
  padding-top: 12px;
  padding-right: 30px;
  padding-bottom: 12px;
  padding-left: 0px;
}  
</style>
<h4>
<ul>
<li>
             <li style="float:right"><a class="active" href="KulavizuriProject.html">LOG OUT</a></li>
          </li></ul></h4>

          <h1>CUSTOMERS TABLE</h1>

<?php
require("connect.php");







$sql_select="SELECT record_id,firstName,lastName,username,email,password FROM register_table";
$result=$conn->query($sql_select);
if($result->num_rows>0)
    {
         echo"<table>";
                 echo"<tr>";
                    echo"<th>Record ID</th>";
                    echo"<th>First name</th>";           																
                    echo"<th>Last name</th>";
                    echo"<th>Username</th>";
                    echo"<th>Email</th>";
                    echo"<th>Password</th>";
                    echo"<th>Operation<th>";
                    
                echo"</tr>";
        while($rows=$result->fetch_assoc())
            {
                 echo"<tr>";
                    echo"<td>".$rows['record_id']."</td>";
                    echo"<td>".$rows['firstName']."</td>";
                    echo"<td>".$rows['lastName']."</td>";
                    echo"<td>".$rows['username']."</td>";
                    echo"<td>".$rows['email']."</td>";
                    echo"<td>".$rows['password']."</td>";
                    echo"<td>";
                    ?>
                    <a href="edit2.php?id=<?php echo $rows['record_id']?>">EDIT</a>
                    <a href="delete.php?id=<?php echo $rows['record_id']?>">DELETE</a>
                    <?php
                   echo "</td>";
               echo "</tr>";
            }
         echo"</table>";
    }
else
    {
        echo"No records matching your query were found";
    }

    $sql_select="SELECT record_id,firstName,lastName,username,email,password FROM register_admin";
$result=$conn->query($sql_select);


echo "<h1>ADMIN TABLE</h1>";
if($result->num_rows>0)
    {
         echo"<table>";
                 echo"<tr>";
                    echo"<th>RECORD ID</th>";
                    echo"<th>First name</th>";           															
                    echo"<th>Last name</th>";
                    echo"<th>Username</th>";
                    echo"<th>Email</th>";
                    echo"<th>Password</th>";
                    echo"<th>Operation<th>";
                    
                echo"</tr>";
        while($rows=$result->fetch_assoc())
            {
                 echo"<tr>";
                    echo"<td>".$rows['record_id']."</td>";
                    echo"<td>".$rows['firstName']."</td>";
                    echo"<td>".$rows['lastName']."</td>";
                    echo"<td>".$rows['username']."</td>";
                    echo"<td>".$rows['email']."</td>";
                    echo"<td>".$rows['password']."</td>";
                    echo"<td>";
                    ?>
                    <a href="edit3.php?id=<?php echo $rows['record_id']?>">EDIT</a>
                    <a href="delete2.php?id=<?php echo $rows['record_id']?>">DELETE</a>
                    <?php
               echo "</td>";
                echo"</tr>";
            }
        echo "</table>";
    }
else
    {
        echo"No records matching your query were found";
    }




?>

<h3><a href="cloth.php">CLICK TO ADD CLOTHES </a></h3>
      

 
</body>
</html>