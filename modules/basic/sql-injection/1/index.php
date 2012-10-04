<?php

include ('../../../../inc/config.php');
include ('../../../../inc/menu.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">

<link href="../../../../css/style.css" rel="stylesheet" type="text/css">

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

<!-- Menu -->
<div id="menu">
<a href="index.php">Home</a> - <a href="modules.php">Modules</a> - <a href="team.php">Team</a> - <a href="contact.php">Contact</a> - <a href="about.php">About</a>
</div>

<!-- Divider -->
<div id="divider">SQL Injection</div>

<!-- Content -->
<div id="content">
<center>
MIT Security Stuff setup an login for admin to access restricted area of this website.
As far as i know, they use some kind of database to store login info but i don't know witch database they use.<br/><br/>
<div id="form">

<!-- Form for the login -->
<form action="sql-data/login.php" method="post" name="login">
<label>Username:</label><br/>
<input name="username" type="text" id="username"><br/><br/>
<label>Password:</label><br/>
<input name="password" type="password" id="password"><br/><br/>
<input name="submit" type="submit" value="Login">
</form>
</div>
</center>
</div>

<!-- Copyrights -->
<div id="copyrights">
<?php echo $footer; ?>
</div>
</center>
</body>
</html>
