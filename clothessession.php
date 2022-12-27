<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CLOTHING</title>
	
</head>
<body>
<style>

  html {
    scroll-behavior: smooth;
  }
body {
  background-image: url("https://i.pinimg.com/474x/a8/cf/c3/a8cfc3171155c99aeb35f4256a373a2b.jpg");}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  color:black;
  overflow: hidden;
  background-color: #fce8d4(120,100%,50%,0.3);
  padding-top: 12px;
  padding-right: 30px;
  padding-bottom: 12px;
  padding-left: 0px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #fce8d4;
}
  

.header p{
 font-family: Garamond, serif;
  text-align: center;
  font-size: 25px;

  text-align: center;
  color:  black;
  border: ;
  background-color: #fce8d4;
  padding-top: 12px;
  padding-right: 30px;
  padding-bottom: 12px;
  padding-left: 80px;
}
h1 {
 font-family: Garamond, serif;;
  font-size: 45px;
  text-align: center;
  text-decoration: underline;
  color: white;  
}
h2{
  font-family: Garamond, serif;
  font-size: 20px;
  color: black;
  border: ;
  background-color: #fce8d4;
  text-align: center;
  padding-top: 12px;
  padding-right: 30px;
  padding-bottom: 12px;
  padding-left: 50px;
}
h3{
  font-family: Garamond, serif;
  font-size: 25px;
  color: black;
  text-align: center;
  text-decoration: underline;
  background-color: #fce8d4;
  
}

h4{
  font-family: Arial, sans-serif;
  font-size: 25px;
  color: black;
  text-align: center;
  border: 1px solid black;
  background-color: #fce8d4;
  padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 10px;
  padding-left: 50px;
}
.figure img{
    border: 2px solid black;
    align-items: center, left;
   
}
.p2{color: white;}

.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}

*{
box-sizing: border-box;
}
.column{
float: left;
width: 33.33%;
	padding: 25px;
color: white
	}
.column img{
	height: 350px;
	width: 350px;
}

.row::after{
content: "";
display: table;
clear: both;
	}
h5{
	color: white;
  font-family: 'Times New Roman', serif;
  font-size: 27px;
  text-align: center;
}	
body {font-family: Arial, Helvetica, sans-serif;}

*{
box-sizing: border-box;
}

.column{
 float: left;
 width: 33.33%;
padding: 25px;
color: white
}
.column img{
 height: 350px;
 width: 350px;
 }
.row::after{
 content: "";
  display: table;
 clear: both;
 }


				
</style>
	<div id="header">
		<div id= "navbar">
			<div>
        <h5><?php echo "Welcome ".$_SESSION["User"] ;?></h5>
				<ul>
                 
                    
					<li class="current">
					   <a href="">LOCATIONS</a>
                    </li>
                    <li>
                        <a href="">SHIPPING</a>
                    </li>
                
                    <li>
                        <a href="">BLOG</a> 
                    </li>

                                         <li>
                        <a href="">ABOUT</a>
                    </li>
					<li>
						 <li style="float:right"><a class="active" href="clothes.php">LOG OUT</a></li>
					</li>
				</ul>
			</div>
		</div>
		
	</div>
	<div id="body">
		<div class="header">
			<div>
				 <h1>R E N D E Z V O U S</h1>
                <p>

                   DRESS WITH ELEGANCE 
                </p>
			</div>
			
			<div>
				<h2><a href="##">START SHOPPING</h2>
				<ul>
					<li>
                        <a href=""> <img src="https://i.pinimg.com/474x/97/31/bf/9731bfe43ac85b06d41b2b8f4dbdea97.jpg" alt=""width="350" height="500""> </a>
                    </li>
                    <li>
                        <a href=""> <img src="https://i.pinimg.com/474x/2f/f5/fd/2ff5fd22f48332e95497b8ca01dc41cd.jpg" alt=""width="350" height="500""><span> </span></a>
                    </li>
                    <li>
                        <a href=""> <img src="https://i.pinimg.com/474x/46/c6/ec/46c6ecc8dd829bcc7d6d3b4ff5ac2691.jpg" alt=""width="350" height="500""><span> </span></a>
                    </li>
				</ul>
			</div>
		</div>
		<h3><a href="#">LIMITED EDITIONS</a></h3>
		

</head>
<body>

 <div class="row">
                      <div class="column">
                        <img src="https://i.pinimg.com/474x/a3/2e/e2/a32ee2bcbd0d955655829fc347d73e85.jpg" alt="" style="width:100%">
                        <p>Cropped Low Neck Vest</p><button id="myBtn">Order</button>
                      </div>

                      <div class="column">
                        <img src="https://i.pinimg.com/474x/ba/7a/ef/ba7aef53e6a9f52b2691bb0f1ba933da.jpg" alt="" style="width:100%">
                      <p>Matching Velvet Blazer and Pallazo Suit</p><button id="myBtn">Order</button>
                      </div>
                      <div class="column">
                        <img src="https://i.pinimg.com/474x/be/02/74/be02742bfc4d87959e1350d8b7e4f1ac.jpg" alt="" style="width:100%">
                        <p>Comfy Brown Leather Jacket</p><button id="myBtn">Order</button>
                      </div>
                    </div>


                   


					</div>                
                    
                </div>
            </div>
			</div>
			


				<h3><a href = "https://www.google.com/maps/place/Yaya+Centre/@-1.2926914,36.7852876,17z/data=!3m1!4b1!4m5!3m4!1s0x182f10a3dc8a2425:0x94e48314489213d4!8m2!3d-1.2926914!4d36.7874763">We are located in Yaya center, Argwings Kodhek Rd, Hurlingam.</a></h3>
				
			</div>
                        <p2>Contact us on <a href="ournumber.html">0717015777</p2>
		</div>
	</div>
	<div id="footer">
		<div>
			<div>
				<a href="http://kulavizuri.com/go/instagrap/" target="_blank" id="instagram">Instagram</a>
				<a href="http://kulavizuri.com/go/twitter/" target="_blank" id="twitter">Twitter</a>
				<a href="http://kulavizuri.com/go/facebook/" target="_blank" id="facebook">Facebook</a>
			</div>
			
		</div>
	</div>
</body>
</html>