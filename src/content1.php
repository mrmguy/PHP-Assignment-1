<?php
session_start();
  error_reporting(E_ALL);
  ini_set('display-errors', 'On');
if (isset($_SESSION['previous'])) {
   if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
        session_destroy();
        ### or alternatively, you can use this for specific variables:
        ### unset($_SESSION['varname']);
   }
}


if (empty($_POST['username'])) {
	echo "A username must be entered. Click <a href = 'login.php'> here</a> to return to the login screen.";
} else {
	echo "Hello " . $_POST['username'] . " you have visited this page " . $_SESSION['count'] . " times before. Click <a href = 'login.php?exit=yes'> here</a>  to logout.";
	$_SESSION['count']++;
  echo "Click <a href = 'content2.php'> here</a> to go to content2.";
}
session_unset();
session_destroy();


?>
