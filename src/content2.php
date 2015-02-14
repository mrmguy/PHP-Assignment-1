<?php
session_start();
error_reporting(E_ALL);
ini_set('display-errors', 'On');
if (!isset($_SESSION['previous']) || ($_SESSION['previous'] != 'yes')) {
   header('Location: login.php');
}
echo  "Click <a href = 'content1.php'> here</a> to return to content1.";
?>
