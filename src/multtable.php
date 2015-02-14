<?php
//Mark Burnstein CS290
error_reporting(E_ALL);
ini_set('display-errors', 'On');

function createTable() {
  echo '<p>';
  echo '<table border = 1>';
  echo '<tr><td></td>';
  for ($i=$_GET['min-multiplier']; $i <=$_GET['max-multiplier'] ; $i++) { 
    echo '<td>' . $i . '</td>';
  }
  echo '</tr>';

  for ($r=$_GET['min-multiplicand']; $r <=$_GET['max-multiplicand'] ; $r++) { 
    echo '<tr><td>' . $r;
  for ($c=$_GET['min-multiplier']; $c <=$_GET['max-multiplier'] ; $c++) { 
    echo '</td><td>' . $r * $c . '</td>';
  }
}
echo '</table>';
}
//execute when submitted
if (!empty($_GET)) {
  $testNumber = True; // determine if conditions are true and run table
  //check that all values exist
  foreach ($_GET as $key => $value) {
    if (empty($value)) {
      echo "Missing parameter - " . $key;
      echo '<br>';
      $testNumber = False;
    } else {
      //check if integer
      if (!ctype_digit($value)) {
      echo $key . " must be an integer.";
      echo '<br>';
      $testNumber = False;
    }
    }
  }
  echo '<br>';

//check min less than max
  if ($testNumber) {
    if ($_GET['min-multiplier'] > $_GET['max-multiplier']) {
      echo "min-multiplier larger than maximum.";
      $testNumber = False;
    }
    echo '<br>';
    if ($_GET['min-multiplicand'] > $_GET['max-multiplicand']) {
    echo "min-multiplicand larger than maximum.";
    $testNumber = False;
    }
  }
  echo '<br>';
  //output table of multipliers function
  if ($testNumber) {
    createTable();
  }
}
?>

