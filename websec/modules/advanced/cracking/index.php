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
<div id="divider">Cracking</div>

<!-- Content -->
<div id="content">
<center>
<div id="btn-module">Cracking Test 1<br/>
<p id="p-module-text">
MIT Security Stuff hoste .rar file on their server. You need to download it and crack it. File contain hash code inside, crack that too and send it to us. </p>
<center>
<form name="start-attack" action="1/" method="post">
<input name="attack1" type="submit" value="Start">
</form>
</center>
</div>
<div id="btn-module">Cracking Test 2<br/>
<p id="p-module-text">
MIT Security Stuff wrote an win32 application that requires a password to enter. Can you try to crack it? </p>
<center>
<form name="start-attack" action="2/" method="post">
<input name="attack1" type="submit" value="Start">
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
