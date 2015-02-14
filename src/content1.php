<?php
session_start();
error_reporting(E_ALL);
ini_set('display-errors', 'On');
if (!isset($_SESSION['previous'])) {
   header('Location: login.php');
}
if ($_SESSION['previous'] === "no") {
  if (empty($_POST['username'])) {
    echo "A username must be entered. Click <a href = 'login.php'> here</a> to return to the login screen.";
  } else {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['previous'] = "yes";
  }
}
if ($_SESSION['previous'] === 'yes') {
  echo "Hello " . $_SESSION['username'] . " you have visited this page " . $_SESSION['count'] . " times before. </br> Click <a href = 'login.php?exit=yes'> here</a>  to logout.</br>";
  $_SESSION['count']++;
  echo "Click <a href = 'content2.php'> here</a> to go to content2.";
}
?>
