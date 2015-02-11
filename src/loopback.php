<?php
  error_reporting(E_ALL);
  ini_set('display-errors', 'On');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	if (empty($_GET)) {
		$arr = array("Type" => "GET", "parameters" => "NULL");
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