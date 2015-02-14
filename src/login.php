<?php
//Mark Burnstein CS290
session_start();
if ($_SERVER['REQUEST_METHOD']) {
  session_unset();
  session_destroy();
  session_start();
}
error_reporting(E_ALL);
ini_set('display-errors', 'On');
$_SESSION['previous'] = "no";
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
