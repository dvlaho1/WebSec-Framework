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
This .rar archive is password protected. I need the content of it, can please try to crack it?
<br/><br/>
<form action="data/report.rar" method="post" name="download">
<input name="submit" type="submit" value="Download">
</form>
</center>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer; ?></div>
</center>
</body>
</html>
