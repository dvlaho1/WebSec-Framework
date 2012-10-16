<?php

include ('inc/config.php');
include ('inc/menu.php');
include ('inc/social.php');

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
<div id="divider">Contact</div>
<br/>
<!-- Content -->
<div id="content">
<h2>Contact Us</h2>
<div id="content-text">
If you have aby questions or maybe some feedback about our Framework ( new modules or any other suggestions)<br/><br/>
<strong>
Dalibor Vlaho
</strong><br/>
Computer Security Specialist<br/>
Security Consulting<br/><br/>
<?php echo $dalibor_vlaho; ?>
<br/><br/>
Coulibaly Laïcana
</strong><br/>
Wise President<br/>
COJI International<br/>
<br/>
<?php echo $coji_internacional; ?>
</div>

</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer; ?>
</div>
</center>
</body>
</html>
