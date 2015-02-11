<?php
error_reporting(E_ALL);
ini_set('display-errors', 'On');

function createTable() {
  echo '<p>';
  echo '<table border = 1>';
  echo '<tr><td></td>';
  for ($i=$_GET['min-multiplier']; $i <=$_GET['max-multiplier'] ; $i++) { 
    echo '<td>' . $i . '</td>';
  };
  echo '</tr>';

for ($r=$_GET['min-multiplicand']; $r <=$_GET['max-multiplicand'] ; $r++) { 
  echo '<tr><td>' . $r;
for ($c=$_GET['min-multiplier']; $c <=$_GET['max-multiplier'] ; $c++) { 
    echo '</td><td>' . $r * $c . '</td>';
  };
};
echo '</table>';

}
?>

<!-- number entry -->
<!DOCTYPE html>
<html>
<head>
	<title>MultTable</title>
</head>
<body>
  <h2>Multiplication Numbers</h2>

  <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   min-multiplicand <input type="text" name="min-multiplicand">
   <br><br>
   max-multiplicand <input type="text" name="max-multiplicand">
   <br><br>
   min-multiplier <input type="text" name="min-multiplier">
   <br><br>
   max-multiplier <input type="text" name="max-multiplier">
   <br><br>
   <input type="submit"> 
 </form>
 <br>

 <?php
//execute when submitted

 if ($_SERVER["REQUEST_METHOD"] == "GET") {
$testNumber = True; // determine if conditions are true and run table

//check that all values exist

  foreach ($_GET as $key => $value) {
    if (empty($value)) {
      echo "Missing parameter - " . $key;
      echo '<br>';
      $testNumber = False;
    }
  }

  echo '<br>';

//check if values are integers

  foreach ($_GET as $key => $value) {
    if (!ctype_digit($value)) {
      echo $key . " must be an integer.";
      echo '<br>';
      $testNumber = False;
    }
  }
  echo '<br>';

//check min less than max
  if ($testNumber) {
  if ($_GET['min-multiplier'] >= $_GET['max-multiplier']) {
   echo "min-multiplier larger than maximum.";
   $testNumber = False;
 }
 echo '<br>';
 if ($_GET['min-multiplicand'] >= $_GET['max-multiplicand']) {
   echo "min-multiplicand larger than maximum.";
   $testNumber = False;
 }
}

 echo '<br>';
 echo '<br>';

if ($testNumber) {
  createTable();
}



//output table of multipliers function





}


?>

</body>
</html>