;<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #fce8d4;
  color: black;
  padding: 25px;
  font-size: 18px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  color: white;
}

.dropdown-content a {
  color: black;
  padding: 20px 20px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

h2{
  text-align: center;
  text-decoration: underline;
  text-decoration: bold;
  font-size: 42px;
}
body{
  text-align: center;
    background-image: url("https://i.pinimg.com/474x/73/8b/4a/738b4a07e3747bcc42b6c54c17e3ec44.jpg");
  color:white;
  background-repeat: repeat;
  font-size: 22px
  


}
</style>
</head>
<body>

<h2>R E N D E V O U S</h2>
<p>Welcome. Are you a buyer or an admin?<br> Select down below...</br></p>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">LOG IN</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="login.php">buyer</a>
    <a href="loginAdmin.php">Admin</a>
   
  </div>
</div>

<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
