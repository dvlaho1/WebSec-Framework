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
<div id="divider">Spoofing Attacks</div>

<!-- Content -->
<div id="content">
<center>
<div id="btn-module">User-Agent<br/>
<p id="p-module-text">
There is an user-agent restriction on this page. I need you to bypass this restriction and get me the code from that page.</p>
<center>
<form name="start-attack" action="1/" method="post">
<input name="websec" type="submit" value="Start">
</form>
</center>
</div>

<div id="btn-module">HTTP Referer<br/>
<p id="p-module-text">
I'm not quite sure if you are an Apple admin but this is what i need. Only admin from Apple Inc. can access this page - Please bypass this!<center>
<form name="start-attack" action="2/" method="post">
<input name="websec" type="submit" value="Start">
</form>
</center>
</div>
</div>
</div>
</div>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer; ?></div>
</center>
</body>
</html>
