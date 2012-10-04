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
<div id="divider">Referer</div>
<br/>

<!-- Content -->
<div id="content">
<center>

<?php

$referer = $_SERVER['HTTP_REFERER'];

if ($referer=="admin.apple.com")
{
	echo "You gain full access to our server";
	}
	 
else 

{
     echo "Hello Admin! You need to came from this url:";
	 echo "<br/>";
	 echo "admin.apple.com";
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
