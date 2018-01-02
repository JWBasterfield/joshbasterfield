<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Primal Blade, Free Online RPG - <?php echo $_GET['page']; ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<body bgcolor="000000">
 <div id="wrapper">  
   <div id="header">
   </div>

   <div id="leftcolumn">
   <h3>Menu</h3>
</h3>
   <div class="menuleft">
	<ul>
		<li><a href="?page=news">Home</a></li>
		<li><a href="?page=news">News</a></li>
		<?php
		$user = $_COOKIE['war-of-chaos_user'];
		if (isset($user)) {
		?>
		<li><a href="?page=chat">Chat</a></li>
		<li class="last"><a href="logout.php">Logout</a></li>
		<?
		}
		else {
		?>
		<li><a href="?page=login">Login</a></li>
		<li class="last"><a href="?page=register">Register</a></li>
		<?php
		}
		?>
	</ul>
	<br />
	<br />
	<?
	if (isset($user)) {
	?>
	<h3>Game Play</h3>
	<ul>
	<li><a href="?page=profile">Profile</a></li>
	<li><a href="?page=stats">Statistics</a></li>
	<li><a href="?page=construct">Construction Site</a></li>
	<?
	require("config.php");
	$row1 = mysql_query("SELECT * FROM user WHERE username = '$user'") or die(mysql_error());
	while ($row=mysql_fetch_array($row1)) {
		if ($row['subscription']=='yes') {
	?>
			<li class="last"><a href="?page=suggest">Make a Suggestion</a></li>
	<?
		}else {
	?>
			<li class="last"><a href="?page=subscriptions">Subscriptions</a></li>
	<?
		}
		echo "</ul><br /><br />";
		echo "<h3>Guild Play</h3><ul>";
		if ($row['tribe']!=NULL) {
?>
	<li><a href="?page=guild">Guild</a></li>
	<li><a href="?page=chat&chat=true">Guild Chat</a></li>
	<li><a href="?page=hitlist">Guild Hit List</a></li>
	<li><a href="?page=guild_forum">Guild Forum</a></li>
<?
	}else {
		if (preg_match("/\bcastle\b/i", $row[buildings])) {
?>
		<li class="last"><a href="?page=joinaguild">Create a Guild</a></li>
<?
}
?>
		<li class="last"><a href="?page=joinaguild">Join a Guild</a></li>
<?
			}
		}
	}
?>
	</ul>
        <br/>
        <br/>
</div>
   </div>
   
   <div id="centercolumn">
   <div id="boxes_I">
   <div class="box1">
  
	<?
		$page = $_GET[page];
		if (isset($page)) {
			if (file_exists($page.".php")) {
				require($page.".php");
			}else {
				echo $page." does not exist in our page's.";
			}
		}else {
			require("news.php");
		}
	?>
  
   </div>
   </div>
</div>   
   <div id="rightcolumn">
<h3>User Login</h3>
<div class="reg">
<p>New User Register <a href="#">here</a>.</p>
</div>
<div class="textright1">
<h2>.</h2>
<p>Primal Blade is planning on being recoded on 14/01/09</p>
   </div>
<div class="textright2">
<h2>.</h2>
<p>Unavalible.</p>
   </div>
<div class="textright3">
<h2>.</h2>
<p>Everything is currently in order ^_^</p>
<div class="textright4">
<h2>.</h2>
<p><center><script type="text/javascript"><!--
google_ad_client = "pub-2895691542175626";
/* 120x240, created 1/14/09 */
google_ad_slot = "7720116987";
google_ad_width = 120;
google_ad_height = 240;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center></p>
   </div>
   </div>
   </div>
   
   <div id="footer"> <p>  Copyright &copy; 2007-2008 <a href="http://www.Js-Designz.com/"title="Js-Designz.com">Js-Designz</a> and <a href="http://www.xstaticcodes.com/">X-Static Codes</a> </p> </div>
</div>
   
</body>
</html>


