
<!DOCTYPE html>
<html>
<head>
  <title>LOG IN</title>
  
</head>
<body>

	 <style>
    * {
    margin: 0px;
    padding: 0px;
  }
  body {
    font-size: 120%;
    background-image: url("https://i.pinimg.com/474x/73/8b/4a/738b4a07e3747bcc42b6c54c17e3ec44.jpg");
    
  }
  
  .header {
    width: 30%;
    margin: 50px auto 0px;
    color: black;
    background: #fce8d4;
    text-align: center;
    border: 1px solid black;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
  }
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    color:black;
    border-color: rgb(118, 136, 146);
    background-color: rgba(0,0,0,0.0);
    border-radius: 0px 0px 10px 10px;
    border: 1px solid black;
  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    display: block;
    text-align: left;
    margin: 3px;
  }
  .input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn {
    padding: 10px;
    font-size: 15px;
    color: black;
    background: #fce8d4;
    border: none;
    border-radius: 5px;
  }
  .error {
    width: 92%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;
  }
  .success {
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    margin-bottom: 20px;
  }
 
  </style>
  
  <div class="header">
  	<h2>LOGIN</h2>
  </div>
	 
  <form method="post" action="Insert2.php">
  	<div class="input-group">
  		<label>Email</label>
  		<input type="email" name="Email" placeholder="Enter your email" required >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" placeholder="Enter your password" required>
  	</div>
   
  		<button type="submit" class="btn" name="LOGIN">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>