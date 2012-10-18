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
<?php echo $menu; ?>
</div>
<br/>

<!-- Header Image -->
<div id="header-content"></div>

<!-- Divider -->
<div id="divider">Team</div>

<!-- Content -->
<div id="content">
<h2>Team Behind WebSec Project</h2>
<p id="content-text">
This project was started because of the fact that most of the students don't have clear understanding of how web application security works. This web app can be used by individual educators or training centers if this meet their needs.<br/><br/>
We growth day by day so if you looking to join us, please feel free to contact us.<br/><br/>
Dalibor Vlaho<br/><br/>
Thanks!<br/>
WebSec Team
</p>

</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer; ?>
</div>
</center>
</body>
</html>
