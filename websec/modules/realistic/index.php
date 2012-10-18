<?php

include ('../../inc/config.php');
include ("../../inc/menu.php");

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">

<link href="../../css/style.css" rel="stylesheet" type="text/css">
  
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
<div id="divider">Realistic Attacks</div>

<!-- Content -->
<div id="content">
<center>
<div id="btn-module">WebSec Framework<br/>
<p id="p-module-text">
WebSec Framework is written in PHP and Mysql and it's NEVER being tested for vulnerabilities. Try to found at least one vulnerability and report it to our developer.
</p>
<center>
<form name="start-attack" action="1/basic1.php">
<input name="websec" type="submit" value="Start">
</form>
</center>
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
