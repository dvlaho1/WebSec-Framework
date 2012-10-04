<?php

include ('../../../../inc/config.php');
include ("../../../../inc/menu.php");

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">

<link href="../../../../css/style.css" rel="stylesheet" type="text/css">

<script language="JavaScript">
function checkWord(readersEntry) {
   if (readersEntry.toUpperCase() == "VLAHO") {
alert ("Well Done! ... But this is a lame one :) !!!")
   }else{
      alert ("Bad password, access denied!!!")
   }
}
  </script>
  
</head>

<body>
<center>
<div id="header-top">
<div id="social">
<?php echo $social; ?>
</div>
</div>

<br/><br/>
<!-- Menu -->
<div id="menu">
<?php echo $menu; ?>
</div>
<br/>

<!-- Header Image -->
<div id="header-content"></div>

<!-- Divider -->
<div id="divider">Password</div>

<!-- Content -->
<div id="content">
<center>
MIT Security Stuff put an restriction on this page.<br/> I'm not sure but i think they use javascript for this.<br/><br/>
<form action="" method="post" name="passform">
<label>Password:</label><br/>
<input name="password" type="text">
<br/><br/>
<input name="submit" type="submit" value="Login" onclick="checkWord(document.passform.password.value)">
</form>
</center>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer; ?></div>
</center>
</body>
</html>
