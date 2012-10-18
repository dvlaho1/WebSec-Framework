<?php

include ('../../inc/config.php');
include ('../../inc/menu.php');

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
<?php echo $menu; ?></div>
<br/>

<!-- Header Image -->
<div id="header-content"></div>

<!-- Divider -->
<div id="divider">Real World Hacking</div>

<!-- Content -->
<div id="content">
<center>
In Development!
</center>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer ?>
</div>
</center>
</body>
</html>
