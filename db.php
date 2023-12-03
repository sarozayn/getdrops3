<?php

if(strpos($_SERVER['REQUEST_URI'],"db.php")){
    require_once 'Utils.php';
    header("Location : default.php");
}

$host="localhost";
$user="u337152881_getdrops3";
$pass="Sarozayn345";
$db="u337152881_news_website";

$conn=mysqli_connect($host,$user,$pass,$db);
if($conn->connect_error != null){
    die($conn->connect_error);
}
function formatDate1($date){
  return date('Y-m-d',strtotime($date));
}

function formatDate2($date2){
  return date('g:i a',strtotime($date2));
}

function formatDate3($date3){
  return date('l',strtotime($date3));
}

 ?>
