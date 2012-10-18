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
<div id="divider">Modules</div>

<!-- Content -->
<div id="content">
<center>
<a href="programming/">
<div id="btn-module">Module 1: Programming</div>
</a>
<a href="cracking/">
<div id="btn-module">Module 2: Cracking</div>
</a>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer ?>
</div>
</center>
</body>
</html>
