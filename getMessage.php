<?php
session_start();

$string1 = $_SESSION['msg'];




if (!isset($myObj) && isset($string1))
{
$myObj = new stdClass();
$myObj->htmlstuff = $string1;


//Encode the data as a JSON string
$jsonStr = json_encode($myObj);
echo $jsonStr;
}

?>