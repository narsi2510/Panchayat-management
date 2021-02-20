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
      color:blueviolet;
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
<center><strong>Sarpanch</strong></center>
<p1> These are the deatils of Sarpanch. Here you can leave your messages and any type of Suggestion related to Gram Panchayat Devlopment.(24*7)</p1><br/><br/><br/><br/>
<pre>

<strong>Name:           Mohan lal Kumar</strong>
<strong>Panchayat Name: Dumriya </strong>
<strong>Contact:        7004481751</strong>
<strong>Addres:         #444 11th cross Raghuvanahalli
                  kanakpura Road,Bangalore</strong>
<strong>Pincode:        560062</strong>
</pre><br/><br/><br/><br/><br/>


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
    $query="INSERT INTO sarpanch(name,email,suggestion) ";
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

Name:
<input type="text" name="name" placeholder="Enter ur name" required><br/><br/><br/>
Email:
<input type="email" name="email" placeholder="Enter ur email" required><br/>

<p>Suggestion</p>
<textarea name="suggestion" id="" cols="80" rows="6" placeholder="Write here....." required></textarea>
<div class="sub1">
  <input type="submit" name="submit" value="Submit">
</div>

</form>
</body>
</html>










































