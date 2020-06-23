<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "test";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}
?>
<form method="get" action="">
    <label class="labels" for="user"><b>User</b></label>
    <input type="text" name="user" placeholder="Enter Username">
    <button type="submit" class="btn">Show</button>
</form>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$q = "CALL get_info('". $_GET['user']."');";
$query = mysqli_query($dbconnect, $q)
   or die (mysqli_error($dbconnect));
while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>";
    foreach ($row as $field => $value) {
    echo "<td>" .$field. " : " . $value . "</td>"; 
    echo "<br>";
    }
    echo "</tr>";
}
?>