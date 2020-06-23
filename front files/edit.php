<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "test";


$pass = $_GET['pass'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$tel = $_GET['telephone'];
$mobile = $_GET['mobile'];
$birthday = $_GET['birthday'];
$alias = $_GET['alias'];
$id = $_GET['idNum'];
$addr = $_GET['addr'];
$access = $_GET['ac'];

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

$q = "SELECT edit_proile('" . $pass . "','" . $tel . "','" . $id. "','" . $fname . "','" . $lname . "','" . $alias . "','" . $mobile . "','" . $birthday . "','" .$access . "','" . $addr."');"; 
//echo $q . "<br>";

$query = mysqli_query($dbconnect, $q)
   or die (mysqli_error($dbconnect));
while ($row = mysqli_fetch_array($query)) {
  echo $row[0];
}
?>
