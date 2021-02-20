<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

g
{
color:green; font-size:50px;
}
a{color:black}
body{
   background:url('background.jpg');
   background-size:cover;
    background-repeat:no-repeat;
   margin:0;
   padding:0;
   font-family:Arial;
}
.login{
  margin:auto;
   width:0px;
   box-shadow:0px 0px 0px 0px rgba(0,0,0,0.9);
  padding:0px 0px;
   margin-top:0px;
   background:linear-gradient(top,#3c3c3c 0%, #222222 60%);
background:-webkit-linear-gradient(top,#3c3c3c 0%, #222222 50%);
}
 </style>      
</head>
<body>
<center><marquee><g>Welcome to Panchayati raj System. After login of this page, you can easily 
knows the value of panchayat.it also helps in to kown the right of villager.</g></marquee></center>
    <div class="login">
    
    <h2><a><center>Login to your account</center></a></h2>
<?php
   $connection=mysqli_connect('localhost','root','','panchayat');
 if(!$connection)
    {
      die("error");
     }
if(isset($_POST['submit']))
{
      $email=$_POST['email'];
      $password=$_POST['password'];

      $query="SELECT * FROM signup WHERE email ='{$email}'";
      $result=mysqli_query($connection,$query);
      if(!$result)
      {
        die('error' .mysqli_error($connection));
      }

    while($row=mysqli_fetch_assoc($result))
    {
      $db_email=$row[email];
      $db_password=$row[password];
    }
    if($password==$db_password && $email==$db_email)
    {
     header("Location:../panchayat/homepage.php");
    }
    else{
      echo '<script> alert("Please enter your valid data")</script>';
    }
  }
    
?>
<form action="" method="post">
<p>Email</p>
  <input type="email" name="email" placeholder="Enter Email" required>
  <p>password</p>
<input type="password" name="password" placeholder="Enter password" required>
<input type="submit" name="submit" value="login"/>

</form>
</body>
</html>
