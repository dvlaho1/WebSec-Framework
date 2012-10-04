<?php

$con = mysql_connect("server","user","pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db_name", $con);

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysql_query("SELECT * FROM users
WHERE username='$username' AND password='$password'");

while($row = mysql_fetch_array($result))
$count=mysql_num_rows($result);

 if($count==1){
  
  echo "You are logged in!";
 }
  else
  {
	  echo "Wrong username or password!";
  
  }

?> 