<?php

////////////////////////////////////////////////////////////////////////////
//																		  //
//	Developer: Dalibor Vlaho, vlaho25@gmail.com, Security Consulting	  //
//	Date: 12. September. 2012											  //
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
<div id="divider">Faq</div>
<br/>

<!-- Content -->
<div id="content">
<h2>Faq</h2>
<h4>Questions</h4>
<ol>
<li>What is WebSec Framework</li>
<li>Who can use it</li>
<li>Can i host it on production server</li>
<li>How to become contributor</li>
<li>Is WebSec Open Source</li>
<li>What is Module</li>
</ol>
<br/><br/>

<div id="faq-title">
What is WebSec Framework?
</div>
<div id="faq-answer">
WebSec Framework is an Advanced Training-based Web Application Security Framework written in PHP.
</div>
<br/><br/>

<div id="faq-title">
Who can use it?
</div>
<div id="faq-answer">
WebSec Framework can be used by anyone. It is made for educators and Training Centers. So, again, anyone can use it.
</div>
<br/><br/>
<div id="faq-title">
Can i host it on production server?<br/>
</div>
<div id="faq-answer">
Yes! But IT'S NOT RECOMMANDED! Host it on a private server. Example of this would be WAMP for Windows, MAMP for Mac and LAMP for Linux.
</div>
<br/><br/>
<div id="faq-title">
How to become contributor?
</div>
<div id="faq-answer">
You can become contributor by doing one of the following:
<ul>
<li>Suggest modification that are recognized and implemented</li>
<li>Create a new module attack or improve an existing one</li>
<li>Create a whitepaper to describe an attack and explain it from ground-up.</li>
</ul>
</div>
<br/><br/>
<div id="faq-title">
Is WebSec Open Source?
</div>
<div id="faq-answer">
Yep! This is an Open Source Application. We hosted it on GitHub.
</div>
<br/><br/>
<div id="faq-title">
What is Module?
</div>
<div id="faq-answer">
Each Module represent an <strong>Attack Method</strong> ( e.g. Sql Injectio or Cross Site Scripting). Every module consist of one or more <strong>Tests</strong> that student need to accomplish.</div>

</div>
<div id="copyrights">
<?php echo $footer; ?></div>

</center>
</body>
</html>
