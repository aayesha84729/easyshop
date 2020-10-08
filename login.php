<?php

require 'dbconfig/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
*{
  width: 350px;
  padding-top: 50;
  padding-right: 10;
  padding-bottom: 30;
  padding-left: 350;
}
body {
	background-image: url(php%20img/photo-1549187805-6079facea88d.jpeg);
	background-position:center top;
	background-size:cover;
	font-family : sans-serif;
	margin-top : 40px;
	background-color: #99FFFF;
	background-attachment: fixed;
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
	margin-left: 300px;
	margin-right: 300px;
	font-size: 18px;
	text-decoration: blink;
	color: #FFFFFF;
	font-weight: 700;
	background-repeat: no-repeat;
}
.regfrom{
    width:350;
  background-color: rgb(1,0,1,0.3);
  margin:auto;
  color:#FFFFFF;
  text-align: center;
  border-radius : 15px 15px 15px 15px;
  width: 350px;
  border: thick double #000000;
  height: 80px;
}
.style1 {color: #CC3300}
.style2 {
  color: #330000;
  font-weight: bold;
  size:20px;
  text-decoration: blink;
  font-size: 24px;
}
</style>
</head>

<body>
<div class="regfrom"> 
  <div class="style13" align="center">
    <h1 class="style1"> Log in here  </h1>
  </div>
</div>
<form id="form1" name="form1" method="post" action="login.php">
  <p>
    <label><span class="style2"> <strong><strong><strong><strong><img src="php img/IMG-20201003-WA0005.jpg" width="260" height="258" /></strong></strong></strong><br />
    <br />
    Username : </strong>
    </span>
    <input type="text" name="username" required= "required" placeholder="enter your username" />
    </label>
  </p>
  <p>
    <label><span class="style2"><strong>Password : </strong></span>
    <input type="password" name="password" required= "required" placeholder="enter password"/>
    </label>
  </p>
  <p>
    <label> <input  name="submit_btn" type="submit" value="login">
        </label></p>
   <!-- <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="93" height="33">
      <param name="BGCOLOR" value="#999999" />
      <param name="movie" value="button7.swf" />
      <param name="quality" value="high" />
      <embed src="button7.swf" width="93" height="33" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#999999" ></embed>
    </object>
  </p>-->
</form>



<!--<!DOCTYPE html>
<html>

<HEAD>
     <TITLE>Resistratiion form </TITLE>
     </HEAD>

    <body bgcolor="pink">
    	<h1><center>log in</center></h1>
    	<form action="login.php" method="post">
    		<center>
    		
        
        
        
        <label> Username:<input type="text" name="username"></label>
        <br>
       <label> Password:<input type="Password" name="password"></label>
        <br><input  name="submit_btn" type="submit" value="login">
        
        
        </center>
    </form>-->
  <?php 
         if(isset($_POST['submit_btn']))
         {

            echo '<script type="text/javascript"> alert("login button clicked")</script>';
            
            $username=$_POST['username'];
            $password=$_POST['password'];

            
            $query="select * from signin WHERE username='$username' AND password='$password'";
            $query_run=mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
              $query="insert into login (username,password)values ($username','$password')";
              header('location:main.php');
                 
            }
            else
            {
              echo '<script type="text/javascript"> alert("invalid username or password")</script>';
            }
            
        }
  ?>
  </body>
  </html>
    