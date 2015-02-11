<?php
  error_reporting(E_ALL);
  ini_set('display-errors', 'On');

if (empty($_POST['username'])) {
	echo "A username must be entered. Click <a href = 'login.php'> here</a> to return to the login screen.";
} else {
	echo "Hello " . $_POST['username'] . " you have visited this page [n] times before. Click here to logout.";
  echo "Click <a href = 'content2.php'> here</a> to go to content2.";
}



?>
