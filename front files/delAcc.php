    <?php
        $hostname = "localhost";
        $username = "root";
            $password = "";
            $db = "test";
            $dbconnect=mysqli_connect($hostname,$username,$password,$db);
            if ($dbconnect->connect_error) {
                die("Database connection failed: " . $dbconnect->connect_error);
            }
            error_reporting(E_ERROR | E_WARNING | E_PARSE);
            $q = "CALL delete_my_account()";
            $query = mysqli_query($dbconnect, $q)
            or die (mysqli_error($dbconnect));
?> 