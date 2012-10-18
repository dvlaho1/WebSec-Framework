<?php

include ('../inc/config.php');
include ("../inc/menu.php");

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">

<link href="../css/style.css" rel="stylesheet" type="text/css">

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
<div id="divider">Dalibor Vlaho</div>
<br/>
<!-- Content -->
<div id="content">
<h2>About me</h2>
<p id="content-text">
Hello,<br/>
as far as i can tell, my name is Dalibor Vlaho and i am 26 years old Computer Security Specialist ( Security Consulting ).<br/>
Reason i've started this project came from fact that students don't have  clear understanding of how web application seurity works.<br/><br/>
This web app can be used by individual educators or training centers if, of course, this app meet their needs.
<br/><br/>
If you'd like to contact me, here is some links
<br/><br/>
<?php echo $dalibor_vlaho; ?>

</p>
</div>
 
<div id="copyrights">
<?php echo $footer; ?></div>
</center>
</body>
</html>
