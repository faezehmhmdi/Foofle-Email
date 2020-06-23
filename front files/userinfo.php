<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "test";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}
$q = "CALL get_my_info();";
$query = mysqli_query($dbconnect, $q)
   or die (mysqli_error($dbconnect));
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    foreach ($row as $field => $value) {
    echo "<td>" .$field. " : " . $value . "</td>"; 
    echo "<br>";
    }
    echo "</tr>";}
?>