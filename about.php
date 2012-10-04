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
<div id="divider">About</div>
<br/>

<!-- Content -->
<div id="content">
<h2>About</h2>
<p id="content-text">
<h4>Introduction</h4>
<div id="content-text">
Information Security is a huge topic we can disqus about. There's a lot of ways in todays world that can be taken to do our exploitation. Our goal is a Web Application Security and this is why i created this framework.<br/>
Alot of us know about some hacking methods, tools and ways to exploit an web application but a lot of "" hackers "" don't know and don't understand how the attack actualy work.<br/><br/>
<strong>For example:</strong><br/><br/>
In an basic SQL Injection attack, you know that you can insert 'OR1=1-- and if you get lucky you will succes but do you know what happend in the background? How that attack actualy work? Probably no!
<br/><br/>
Training Centers have a lot of books to offer to their students but they, lot of them, don't have an practical example of attacks.<br/>
WebSec Framework is created for training purpose and for practical examples of an attack to show students real-world example and to teach them to understand what is in the background of particular attack.
</div>
<br/>
<h4>What is WebSec Framework</h4>
<div id="content-text">
WebSec is an advanced training-based framework for training centers to show students real-world example of an attack and to teach them to understand what is going on in the background of an particualr attack.<br/>
WebSec Framework have a different modules that represent most known web vulerabilities.<br/>

<br/><br/>
<strong>Modules:</strong><br/><br/>
<ul>
<li>SQL Injection</li>
<li>Cross Site Scripting or XSS</li>
<li>Local File Inclusion or LFI</li>
<li>Remote File Inclusion or RFI</li>
<li>Password Attacks</li>
<li>Javascript Attacks</li>
<li>Realistic Website Attacks</li>
</ul>
</div>
<h4>Installation</h4>
<div id="content-text">
WebSec Framework, at this moment, came without his own installation. When you download it from <strong>GitHub</strong>, put the websec folder to you server. If you use WAMP, MAMP or LAMP it should be:<br/><br/> <strong>http://localhost/websec/ </strong> <br/><br/> Navigate to <strong>websec/inc/menu.php</strong> and set the links to suite your web location. In the <strong>websec/modules/sql-injection/1/sql-data/login.php </strong> change database information to match your database information. That'S it! You ready to go. Use you Firefox browser to see if everything is ok.<br/><br/>
<strong>NOTE</strong><br/>
Installation will be changed depading of updates!
</div>
<br/>
<h4>Team</h4>
<div id="content-text">
WebSec Framework was developed by Dalibor Vlaho
</div>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer; ?>
</div>
</center>
</body>
</html>
