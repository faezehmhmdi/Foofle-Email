<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "test";

$userN = $_GET['user'];
$pass = $_GET['pass'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$tel = $_GET['telephone'];
$mobile = $_GET['mobile'];
$birthday = $_GET['birthday'];
$alias = $_GET['alias'];
$id = $_GET['idNum'];
$addr = $_GET['addr'];

$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

$q = "SELECT enroll('". $userN."','" . $pass . "','" . $tel . "','" . $id. "','" . $fname . "','" . $lname . "','" . $alias . "','" . $mobile . "','" . $birthday . "','Access granted','" . $addr."');"; 
echo $q . "<br>";

$query = mysqli_query($dbconnect, $q)
   or die (mysqli_error($dbconnect));
while ($row = mysqli_fetch_array($query)) {
  echo $row[0];
}
?>
