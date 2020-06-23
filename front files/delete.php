 <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "test";
    $dbconnect=mysqli_connect($hostname,$username,$password,$db);
    if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }
    $query = mysqli_query($dbconnect, "SELECT delete_email('".$_GET['email_id']. "')");
while ($row = mysqli_fetch_array($query)) {
        echo $row[0];
    }
?>
