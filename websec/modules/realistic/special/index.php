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
<div id="btn-module">Password Attack 1<br/>
<p id="p-module-text">
MIT Security Stuff put an restriction on this page.
I'm not sure but i think they use javascript for this.
</p>
<center>
<form name="start-attack" action="1/basic1.php">
<input name="attack1" type="submit" value="Start">
</form>
</center>
</div>

<div id="btn-module">Password Attack 2<br/>
<p id="p-module-text">
MIT Security Stuff once again put an restriction on this page.
You already know that they use javascript for this but this one is different.
</p>
<center>
<form name="start-attack" action="2/basic2.php">
<input name="attack2" type="submit" value="Start">
</form>
</center>
</div>

</center>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer; ?></div>
</center>
</body>
</html>
