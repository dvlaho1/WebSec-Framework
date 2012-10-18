<?php

////////////////////////////////////////////////////////////////////////////
//																		  //
//	Developer: Dalibor Vlaho, vlaho25@gmail.com, Security Consulting	  //
//	Date: 10. September. 2012											  //
//																		  //
//	INFO:																  //
//																		  //
//	WebSec is an Advanced Training-based Web Application Security		  //
//	Platform created for Training Centers with main goal of			 	  //
//	showing and teaching students to understand how WebAppication 		  //
//  Security works.														  //
//																		  //
//	This project is hosted by OWASP as Incubator Project				  //													//																	      //
//																		  //
////////////////////////////////////////////////////////////////////////////

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
<div id="divider">Home</div>
<br/>
<!-- Content -->
<div id="content">
<h2>Welcome to WebSec Framework!</h2>
<p id="content-text">
WebSec framework is an Advanced Training-based Web Application Security Platform.
<br/>
For more information about this please read Documentation in Documentation folder.
<br/> <br/>
This is a Pre-Alpha Release so please keep this in mind.<br/>
BETA and RC coming soon.<br/><br/>
WebSec Framework is hosted by <strong>OWASP</strong> as <strong>Incubator Project</strong>.
<br/><br/>
Thanks!<br/>
WebSec Team
</p>
</div>
<br/> 
<div id="copyrights">
<?php echo $footer; ?></div>
</center>
</body>
</html>
