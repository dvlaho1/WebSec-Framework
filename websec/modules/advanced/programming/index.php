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
<div id="btn-module">Programming Test 1<br/>
<p id="p-module-text">
MIT Security Stuff wrote an web application using PHP and MySQL. I think they leave a Sql Injection hole but i can't find it. Find it and provide fix for it.</p>
<center>
<form name="start-attack" action="1/" method="post">
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
<form name="start-attack" action="2/" method="post">
<input name="attack2" type="submit" value="Start">
</form>
</center>
</div>

<div id="btn-module">Password Attack 3<br/>
<p id="p-module-text">
I hacked into FBI server last week and i found an LFI vulnerabilitie to /etc/passwd/. Please, try to crack the password and see if you can log in and search for " profile.txt " file. If you find it, deliver it to me.
</p>
<center>
<form name="start-attack" action="3/" method="post">
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
