<?php

include ('inc/config.php');
include ('inc/menu.php');

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
<?php echo $menu; ?></div>
<br/>

<!-- Header Image -->
<div id="header-content"></div>

<!-- Divider -->
<div id="divider">Modules</div>

<!-- Content -->
<div id="content">
<center>
<div id="btn-module">Basic Skills<br/>
<p id="p-module-text">Here are some basic tests to learn entry-level of Web Application Security</p>
<center>
<form name="start-attack" action="modules/basic/" method="post">
<input name="attack1" type="submit" value="Start">
</form>
</center>
</div>
<center>
<div id="btn-module">Advanced Skills<br/>
<p id="p-module-text">Here are some advanced tests to learn some advanced methods of Web Application Security</p>
<center>
<form name="start-attack" action="modules/advanced/" method="post">
<input name="attack1" type="submit" value="Start">
</form>
</center>
</div>

<center>
<div id="btn-module">Realistic Attacks<br/>
<p id="p-module-text">Here is some realistic Website attacks. Break into websites and learn real Web Application Security</p>
<center>
<form name="start-attack" action="modules/realistic/" method="post">
<input name="attack1" type="submit" value="Start">
</form>
</center>
</div>

<center>
<div id="btn-module">Real World Attack<br/>
<p id="p-module-text">Are you a Professional? Take this tests to TEST your knowledge</p>
<center>
<form name="start-attack" action="modules/real-world/" method="post">
<input name="attack1" type="submit" value="Start">
</form>
</center>
</div>
</center>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer ?>
</div>
</center>
</body>
</html>
