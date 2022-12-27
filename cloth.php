
<!DOCTYPE html>
<html>
<head>
  <title>ADD CLOTHES</title>
  
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
    border-color: solid black;
    border-width: 50px;
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
    <h2>ADD CLOTHES</h2>
  </div>
  <div class="reg">
  <form method="post" action="insertcloth.php">
  

    <div class="input-group">
      <label>Tittle</label>
      <input type="text" name="title" placeholder="Enter name of the cloth" required>
    </div>


    <div class="input-group">
      <label>Category</label>
      <input type="text" name="category" placeholder="What is the Category?" required>
    </div>

    <div class="input-group">
      <label>Price</label>
      <input type="text" name="price" placeholder="Enter the price" required>
    </div>

    <div class="input-group">
      <label>Size</label>
      <input type="text" name="size" placeholder="Enter the Sizes" required>
    </div>


    <div class="input-group">
    <label>Image:</label>
    <input type="file" name="cloth_image" placeholder="Add image image"  required>
    </div>


   
      <div class="input-group">
      
      <button type="submit"  class="btn" name="reg_cloth">ADD</button>
    
    </div>
  </form>
</div>
</body>
</html>