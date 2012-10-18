<?php

// Some basic settings
// This is pre-set by author so please leave it as it is.

$title = 'WebSec Framework';
$description = 'Advanced Training-based Web Application Security Platform';
$footer = '&copy;2012 WebSec Framework <br/> Powered by Security Consulting and OWASP';

// Social Links
// Change the PATH ONLY, BUT NO the web link

$facebook = '<a href="http://facebook.com/dalibor.vlaho"><img src="http://localhost/websec/images/social/facebook.png" alt="Facebook" title="Facebook" /></a>';
$twitter = '<a href="http://twitter.com/dvlaho"><img src="http://localhost/websec/images/social/twitter_bird.png" alt="Twitter" title="Twitter" /></a>';
$linkedin = '<a href="#"><img src="http://localhost/websec/images/social/linkedin.png" alt="Linkedin" title="Linkedin" /></a>';
$skype = '<a href="#"><img src="http://localhost/websec/images/social/skype.png" alt="Skype" title="Skype" /></a>';
$youtube = '<a href="#"><img src="http://localhost/websec/images/social/youtube.png" alt="Youtube" title="Youtube"/></a>';
$github = '<a href="#"><img src="http://localhost/websec/images/social/github.png" alt="Github" title="GitHub"/></a>';

// Put it all together

$social = $facebook . ' ' . $twitter . ' ' . $linkedin . ' ' . $skype . ' ' .$youtube . ' ' .$github ;

// User Social

$facebook = '<a href="#"><img src="http://localhost/websec/images/user-social/facebook.png" alt="Facebook" title="Facebook" width="26px" height="26px" /></a>';
$twitter = '<a href="#"><img src="http://localhost/websec/images/user-social/twitter_bird.png" alt="Twitter" title="Twitter" width="26px" height="26px" /></a>';
$linkedin = '<a href="#"><img src="http://localhost/websec/images/user-social/linkedin.png" alt="Linkedin" title="Linkedin" width="26px" height="26px" /></a>';
$email = '<a href="#"><img src="http://localhost/websec/images/user-social/email.png" alt="Email" title="Email" width="26px" height="26px" /></a>';
$youtube = '<a href="#"><img src="http://localhost/websec/images/user-social/youtube.png" alt="Youtube" title="Youtube" width="26px" height="26px"/></a>';
$github = '<a href="#"><img src="http://localhost/websec/images/user-social/github.png" alt="Github" title="GitHub" width="26px" height="26px"/></a>';
$about_me = '<a href="http://localhost/websec/team/dalibor_vlaho.php"><img src="http://localhost/websec/images/user-social/about_me.png" alt="About Me" title="About Me" width="26px" height="26px"/></a>';

// Do this for every user

$dalibor_vlaho = $facebook . ' ' . $twitter . ' ' . $linkedin . ' ' . $email . ' ' .$youtube . ' ' .$github . ' ' . $about_me ;


// Get User Info

$browser = $_SERVER['HTTP_USER_AGENT'];
$host = $_SERVER['HTTP_HOST'];

?>