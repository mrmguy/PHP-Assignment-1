<?php
  error_reporting(E_ALL);
  ini_set('display-errors', 'On');
?>

<!DOCTYPE html>
<html>
<head>
	<title>LoopBack</title>
</head>
<body>
  <h2>Key / Value pairs</h2>

  <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Enter: <input type="text" name="key">
   <br><br>
   Enter: <input type="text" name="key2">
   <br><br>
   Enter: <input type="text" name="key23">
   <br><br>
   Enter: <input type="text" name="help">
   <br><br>
   <input type="submit" value="get"> 
 </form>
 <br>


 <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Enter: <input type="text" name="key">
   <br><br>
   Enter: <input type="text" name="key2">
   <br><br>
   Enter: <input type="text" name="key23">
   <br><br>
   Enter: <input type="text" name="help">
   <br><br>
   <input type="submit" value ="post"> 
 </form>
 <br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	if (empty($_POST)) {
		$arr = array("Type" => "POST", "parameters" => "NULL");
	} else {
  $arr = array("Type" => "GET", "parameters" => $_GET);
}
  $text = json_encode($arr);
  echo $text;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST)) {
		$arr = array("Type" => "POST", "parameters" => "NULL");
	} else {
   $arr = array("Type" => "POST", "parameters" => $_POST);
}
  $text = json_encode($arr);
  echo $text;
}

 //echo json objet

 ?>