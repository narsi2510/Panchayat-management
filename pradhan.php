<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    margin:0px;
    padding:0px;
    
    body
    {
    background-color:yellow;
    }
    
    body{
    
    background-color:pink;
    }
    
    p
    {
    color:blue; font-size:20px;
    }
    
    text{
    width = 100%;
    margin-left:1000px;
    background:blue;
    color:black;
    border:0;
    padding:9px;
    }
    pre{
      color:blue;
      font-size: 20px;
    }
    p1{
      float: margin left 50px;
    }
    .sub1{
      margin-left: 1300px;
    }
    
    
    </style>
</head>
<body>
<center><h1>Pradhan</h1></center>
<p1>These are the deatils Pradhan. Here you can leave your messages and any type of Suggestion related to Gram Panchayat Devlopment.(24*7)</p1>


<?php

$connection =mysqli_connect('localhost','root','','panchayat');
if(!$connection)
{
  die("Failed");
}
$query="SELECT * FROM admin";
$result=mysqli_query($connection,$query);
if(!$result)
{
  die('error' .mysqli_error($connection));
}

while($row=mysqli_fetch_assoc($result))
{
  $pradhan=$row['pradhan'];
   echo "<table>";
   echo "<tr>";
   
   echo "</tr>";
   echo "</table>";

}

?>
<pre>

Name:          Sandeep Kumar
Panchayat Name: Dumri
Contact:        70044817701
Addres:         #444 11th cross Raghuvanahalli
                  kanakpura Road,Bangalore
                  Pincode:        560062
</pre>




<?php
 
  $connection =mysqli_connect('localhost','root','','panchayat');
  if(!$connection)
  {
    die("Failed");
  }
  
  if(isset($_POST['submit']))
  {
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $suggestion=$_POST['suggestion'];
    $query="INSERT INTO pradhan(name,email,suggestion) ";
    $query .="VALUES('$name','$email','$suggestion')";
    $result=mysqli_query($connection,$query);
    if($result)
    {
      echo '<script> alert("Your suggestion has been successfully send")</script>';
    }
    else{
      die("error");

    }
  }
  

?>


<form action="" method="post">
<p>Suggestion</p>
<textarea name="suggestion" id="" cols="50" rows="6" placeholder="Write here....." required></textarea><br/><br/><br/>
Name:
<input type="text" name="name" placeholder="Enter ur name" required><br/><br/><br/>
Email:
<input type="email" name="email" placeholder="Enter ur email" required><br/>
<div class="sub1">
  <input type="submit" name="submit" value="Submit">
</div>

</form>
</body>
</html>










































