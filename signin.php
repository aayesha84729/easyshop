<?php

require 'dbconfig/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
*{
  width: 350px;
  padding-top: 10;
  padding-right: 10;
  padding-bottom: 20;
  padding-left: 350;
}

body {
  background-image: url(php%20img/photo-1549187805-6079facea88d.jpeg);
  background-position:center top;
  background-size:cover;
  font-family : sans-serif;
  margin-top : 40px;
  background-color: #FFFF33;
  background-attachment: fixed;
  left: auto;
  top: auto;
  right: auto;
  bottom: auto;
  margin-left: 300px;
  margin-right: 300px;
}
.regfrom {
  width:350;
  background-color: rgb(1,0,1,0.3);
  margin:auto;
  color:#FFFFFF;
  text-align: center;
  border-radius : 15px 15px 15px 15px;
  width: 350px;
  border: thick double #000000;
  height: 50px;
}
.main{
background-color:rgb(0,0,0,0.5);
width: 800px;
margin:auto;
}
form{
  padding:10px;
  float: none;
  border: 10px 
}
#name{
width:100%;
height:100px;
}

.style1 {
  color: #330000;
  font-weight: bold;
  text-decoration: blink;
}
.style11 {color: #330000; font-weight: bold; text-decoration: blink; font-size: 24px; }
.style12 {
  font-size: 36px;
  color: #000066;
}
.style13 {color: #FFCC00}

-->
</style>
</head>

<body>
<div class="regfrom"> 
  <div class="style12 style13" align="center"><strong>Sign in here </strong></div>
</div>
<form method="post" action="login.php"> 
 <div id="name" name="form"  align="center">
  <p class="style1" align="center"><img src="php img/IMG-20201003-WA0005.jpg" alt="" width="260" height="258" /></p>
  <p class="style1" align="center">
  <label>
  </label></p><div align="left">
  <div align="left"><span class="style1"><strong>Name:</strong></span>
    <input name="name" type="text" placeholder="enter your name here" width="250">
  </div>
  <label><span class="style1"><strong><br>
  Email Id : </strong></span>
  <input type="text" name="email" placeholder="enter Email id here" width="250">
  </label>
  <p class="style1">
    <label><span class="style1"><strong> Username : 
      </strong></span>
      <input type="text" name="username" placeholder=" enter username here" required="required" width="250">
    </label>
  </p><p class="style1" align="center">
  <label>
  </label></p><div align="left">
  <div align="left"><span class="style1"><strong>Password:</strong></span>
    <input type="password" name="password" placeholder="enter password here" required="required" width="250">
  </div>
  
  <span class="style1">
<label><br><strong>
city:</strong><br>
</label>
  </span>
  <div align="left">
    <label>
    <div align="left">
    <input type="text" name="city" placeholder="enter your city here" width="200">
      
  </div>
  <p class="style1" align="center">
    
    
    <input name="submit_btn" type="submit" value="submit">
  
  </label></div></div></div></form>


<!--<!DOCTYPE html>
<html>

<HEAD>
     <TITLE>Resistratiion form </TITLE>
     </HEAD>

    <body bgcolor="pink">
    	<h1><center>Sign in</center></h1>
    	<form class="myform" action="signin.php" method="post">
    		<center>
    			<TABLE>
        <label> Name:<input type="text" name="name"></label>
        <br>
        
        <label> Email:<input type="email" name="email"></label>
        <br>
        
        <label> Username:<input type="text" name="username"></label>
        <br>
       <label> Password:<input type="Password" name="password"></label>
        <br>
        <label> City:<input type="text" name="city"></label>
        <br>
        
        <input  name="submit_btn" type="submit" value="submit">
        
        </TABLE>
        </center>
  </form>-->
<?php 
      if(isset($_POST['submit_btn']))
      {

        echo '<script type="text/javascript"> alert("submit button clicked")</script>';
            
            $name=$_POST['name'];
            $email=$_POST['email'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $city=$_POST['city']; 
            
            
            $query="select * from signin WHERE username='$username'";
            $query_run=mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {

                echo '<script type="text/javascript"> alert("user already exist")</script>';

            }
             else
             {
                $query="insert into signin (name,email,username,password,city)values ('$name','$email','$username','$password','$city')";
                $query_run=mysqli_query($con,$query);

                if ($query_run) 
                {
                    echo '<script type="text/javascript"> alert("user registered")</script>';


                }
                else
                {
                   echo '<script type="text/javascript"> alert("error")</script>';

                }
             }
            
         }
?>
</div>
</body>
</HTML>


