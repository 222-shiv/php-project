<?php
if(isset($_POST['name']))
{
  //set connection variables
  $server="localhost";
  $username="root";
  $password="";
  //create a database connection
  $con=mysqli_connect($server,$username,$password);
  
  //check for connection success
  
  if(!$con)
  {
      die("Connection to this database failed due to". mysqli_connect_error());
  }
 
  //echo "success connecting to the db";

  //collect post variables

  $name=$_POST['name'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $desc=$_POST['desc'];
  $sql="INSERT INTO `trip`.`tt` (`name`, `age`, `gender`, `phone`, `email`, `desc`, `dt`) 
  VALUES ('$name', '$age', '$gender', '$phone', '$email', '$desc', CURRENT_DATE())";
  
  //echo $sql;

  //execute the querry

 if($con->query($sql) == true)
  {
     // echo"Successfully Inserted";

     //flag for successful insertion
     $insert = true;
  }
  else
  {
      echo "ERROR:$sql<br>$con->error";
  }

  //close the database connection 

  $con->close();
  }

 ?>
 <!DOCTYPE html>
  <html lang="en">
      <head>
          <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Php Tutorial</title>
      <link rel="stylesheet" href="style.css">
 </head>
  <body>
          <div class="container">
              <h1>Welcome here kindly provide your information</h1>
          <p>Thanks for filling the form</p>
          <div class="form">
              <form  action="index.php" method="post"> 
              <input type="text" name="name" id="name" placeholder="Enter your name">
          <input type="text" name="age" id="age" placeholder="Enter your Age">
          <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
          <input type="text" name="Phone " id="phone" placeholder="Enter your Phone no.">
          <input type="email"name="email" id="email" placeholder="Enter your Email">
          <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter some more details"></textarea> 
          <button class="btn">Submit</button>
         </form>
         </div>
     </div>
 </body>
  </html>