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
<div id="divider">User Agent</div>
<br/>

<!-- Content -->
<div id="content">
<center>

<?php
$agent = $_SERVER['HTTP_USER_AGENT'];

if  ($agent == "vlaho")
{
	echo "Welcome to admin area!";
	echo "<br/>";
	echo "You just bypass User-Agent Restriction!";
}
else
{
	echo "You DO NOT have premission to view this page!";
}
?>


</center>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer; ?>
</div>
</center>
</body>
</html>
