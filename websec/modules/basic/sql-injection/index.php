<?php

include ('../../../inc/config.php');
include ("../../../inc/menu.php");

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">

<link href="../../../css/style.css" rel="stylesheet" type="text/css">
  
</head>

<body>
<center>
<br/>
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
<div id="divider">SQL Injection Attacks</div>

<!-- Content -->
<div id="content">
<center>
<div id="btn-module">SQL Injection 1<br/>
<p id="p-module-text"> MIT Security Stuff setup an login for admin to access restricted area of this website.
As far as i know, they use some kind of database to store login info but i don't know witch database they use.<br/>
</p>
<center>
<form name="start-attack" action="1/" method="post">
<input name="websec" type="submit" value="Start">
</form>
</center>
</div>
</div>
</div>
</div>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer; ?></div>
</center>
</body>
</html>
