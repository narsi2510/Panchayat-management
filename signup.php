<!doctype html>
<html>
<head>

<style>
body{
   background:url('paddy3.jpg');
   background-size:cover;
    background-repeat:no-repeat;
   margin:0;
   padding:0;
   font-family:Arial;
}




p
{
color:black
; font-size:20px;
}
p1
{
color:black;
}
a
{
color:black; font-size:50px;
}
*{
margin:5px;
padding:8px;
}
input[type=submit]{
width=100%;
margin-left:550px;
backgroung:black;
color:black;
border:0;
padding:9px;
}

</style>
<a><center>Registration page </center></a>

</head>
<body>
<?php
  $connection =mysqli_connect('localhost','root','','panchayat');
  if(!$connection)
  {
    die("Failed");
  }
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $state=$_POST['state'];
    $address=$_POST['address'];
    $district=$_POST['district'];
    $password=$_POST['password'];
    $adhar=$_POST['adhar'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $query="INSERT INTO signup(name,state,address,district,password,adhar,contact,gender,email) ";
    $query .="VALUES('$name','$state','$address','$district','$password','$adhar','$contact','$gender','$email')";
    $result=mysqli_query($connection,$query);
    if($result)
    {
  
      echo '<script> alert(" successfully registered ")</script>';
      header("Location:login.php");
    }
    else{
      die('error' .mysqli_error($connection));
    }
  }

?>


<form action="signup.php" method="post">
<table> 
 <tr><td><p>Name:</p></td><td>
  <input type="text" name="name" placeholder="" required>
  </td>
  <td><p>State:</p></td><td>
  <select name="state" id="">
   <option>Tamil nadu</option>
   <option>Karnataka</option>
   <option>Bihar</option>
   <option>Utterpradesh</option>
   <option>Maharastra</option>
    <option>Rajasthan</option>
    <option>jharkhand</option>
    <option>West bengal</option>
    <option>uttrakhand</option>
    <option>Punjab</option>
    <option>Hariyana</option>
    <option>Assam</option>
    </select>

</td></tr>

<tr><td><p>Address:</p></td><td>
  <input type="address" name="address" placeholder="" required></td>
<td><p>District:</p></td><td>`	
<select name="district" id="">
   <option>Siwan</option>
   <option>Chhapra</option>
   <option>Bangalore</option>
   <option>Gorekhpur</option>
    <option>Rajastan</option>
    <option>Giridih</option>
    <option>Bokaro</option>
    <option >Begusarai</option>
    <option>Hazaribagh</option>
    </select>
</td></tr>
<tr><td><p>Password:</p></td><td>
  <input type="password" name="password" placeholder="" required></td>
  <td><p>Addhar no:</p></td>
<td>
  <input type="text" name="adhar" placeholder="" required></td></tr>
<tr><td><p>Confirm password:</p></td><td>
  <input type="password"  placeholder="" required></td><td><p>Contact no:</p></td><td>
  <select name="" id="">
   <option>+88</option>
   <option>+77</option>
   <option>+91</option>
   <option>+31</option>
    <option>+22</option>
 
<input type="text" name="contact" placeholder="" required></td></tr>
<tr><td><p>Gender:</p></td><td>
  <input type="radio" name="gender" required><p1>male</p1>
   <input type="radio" name="gender" required><p1>female</p1>
   </td></tr><tr><td><p>Email:</p></td><td>
  <input type="mail" name="email" placeholder="" required></td>
  <td colspan="5"><input type="submit" name="submit" value="submit"></td></tr>
  
</table>
</form>
</body>
</html>
