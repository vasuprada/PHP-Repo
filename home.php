<?php
session_start();
include 'config.php';
$userstr = ' (Guest)';
if (isset($_SESSION['uname'])){
    $uname     = $_SESSION['uname'];
    $loggedin = TRUE;
    $userstr  = " ($uname)";
}
else 
$loggedin = FALSE;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/brvapp.css" media="all" type="text/css" />
<link rel="stylesheet" href="css/chat.css" media="all" type="text/css" />
<script type="text/javascript" src="js/webcam.js"></script>
<script type="text/javascript" src="js/bookOSC.js"></script>
<?php
echo "<title>$appname$userstr</title></head><body><div class='appname'>$appname$userstr</div><header>";
if ($loggedin)
{
?>
<div class="hmenu">
<ul>
<li><a href="myblog.php">My Blog</a></li>
<li><a href="postmessage.php">New Blog</a></li>
<li><a href="viewmessages.php">Messages</a></li>		
<li><a href="members.php">Members</a></li>		 
<li><a href="viewfriends.php">Friends</a></li>
<li><a href="editprofile.php">Edit Profile</a></li>
<li><a href="webcam.php">Webcam</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
</div>
<?php		 
}
else
{
?>
<div class="hmenu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="user_registration.php">Sign up</a></li>
<li><a href="login.php">Login</a></li>
</ul>
</div>
<?php
}
?>
</header>
<div class="bannerbodybox">
<div class="banner"></div>
<div class="mycontentbox"><span class="info">&#8658; You must be logged in to view this page.</span><br />
<?php
if ($loggedin) 
echo " $uname, you are logged in.<br />";
else
{
?>           
<p>please sign up and/or log in to join in.</p>

<?php
}
include_once 'posts.php';
?>
</body></html>
