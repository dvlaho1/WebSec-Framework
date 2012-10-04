<?php

include ('inc/config.php');
include ("inc/menu.php");

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">

<link href="css/style.css" rel="stylesheet" type="text/css">

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
<div id="divider">Docs</div>
<br/>
<!-- Content -->
<div id="content">
<h2>Documents and Whitepapers</h2>
<p id="content-text">
Here you will find documents and whitepapers dedicated to web application security.
<br/><br/>

<!-- Docs -->

<a href="#">
<div id="btn-docs">[Croatian] Phishing: The Art Of Fooling End User</div>
</a>
</p>
</div>
<div id="copyrights">
<?php echo $footer; ?></div>
</center>
</body>
</html>
