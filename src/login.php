<?php
session_start();
  error_reporting(E_ALL);
  ini_set('display-errors', 'On');
  $_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
  $_SESSION['count']=0;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
  <h2>Login</h2>

  <form method="POST" action="content1.php"> 
   username: <input type="text" name="username">
   <br><br>
   <input type="submit" value="Login"> 
 </form>
 <br>
