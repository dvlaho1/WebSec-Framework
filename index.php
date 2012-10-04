<?php

////////////////////////////////////////////////////////////////////////////
//																		  //
//	Developer: Dalibor Vlaho, vlaho25@gmail.com, Security Consulting	  //
//	Date: 10. September. 2012											  //
//																		  //
//	INFO:																  //
//																		  //
//	WebSec is an Advanced Training-based Web Application Security		  //
//	framework created for Training Centers with main goal of			  //
//	showing and teaching students to understand how an attack works.	  //
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
<center>
<div id="tweet">
@dvlaho<br/>
Last tweet from @dvlaho</div>
</center>
<p id="content-text">
WebSec framework is an Advanced Training-based Web Application Security Framework.
<br/>
This is an Pre-Alpha Release so please keep this in mind!
<br/><br/>
Thanks!<br/>
WebSec Team
</p>
</div>
<br/>

<!-- Twitter -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function ()
{
 $.getJSON("http://twitter.com/statuses/user_timeline/dvlaho.json?callback=?", function(data) {
  $(".tweet").html(data[0].text);
 });
});
</script>
 
<div id="copyrights">
<?php echo $footer; ?></div>
</center>
</body>
</html>
