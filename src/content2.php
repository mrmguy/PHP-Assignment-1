<?php
session_start();
  error_reporting(E_ALL);
  ini_set('display-errors', 'On');

if (isset($_SESSION['previous'])) {
   if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
        session_unset();
        session_destroy();
        header('Location: login.php');
        ### or alternatively, you can use this for specific variables:
        ### unset($_SESSION['varname']);
   }
}

  echo "A username must be entered. Click <a href = 'login.php'> here</a> to return to the login screen.";
  echo "A username must be entered. Click <a href = 'content1.php'> here</a> to return to content1.";
?>
