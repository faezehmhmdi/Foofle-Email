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
<html>
            <form  method="get" action="setVisi.php" class="FC" >
            <label class="labels" for="user"><b>User</b></label>
            <input type="text" name="user" placeholder="Enter Username">
            <div class="row">
            <input type="radio" id="ag" name="ac" value="Access granted">
            <label class="labels" for="ac"><b>Access granted</b></label><br>
            <input type="radio" id="ad" name="ac" value="Access denied">
            <label class="labels" for="ac"><b>Access denied</b></label><br>
            </div>
            <button type="submit" class="btn">Done</button>
            </form>
    </html>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$q = "CALL set_data_visibility ('". $_GET['user']."','" . $_GET['ac'] . "');";
$query = mysqli_query($dbconnect, $q)
   or die (mysqli_error($dbconnect));
?>