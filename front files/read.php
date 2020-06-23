 <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "test";
    $dbconnect=mysqli_connect($hostname,$username,$password,$db);
    if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }
    $query = mysqli_query($dbconnect, "SELECT read_email('".$_GET['email_id']. "');")
        or die (mysqli_error($dbconnect));
    while ($row = mysqli_fetch_array($query)) {
        echo $row[0];
    }
?>
