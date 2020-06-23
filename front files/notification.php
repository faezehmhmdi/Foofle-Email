 <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $db = "test";
        $dbconnect=mysqli_connect($hostname,$username,$password,$db);
        if ($dbconnect->connect_error) {
            die("Database connection failed: " . $dbconnect->connect_error);
        }
                
        $query = mysqli_query($dbconnect, "CALL get_my_notifs(1)");
    ?>
<html>
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>
        <table class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
            <tr class="w3-hover-orange">
            <td>Username</td>
            <td>Time Recieved</td>
            <td>Context</td>
            </tr>        
        <?php
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                foreach ($row as $field => $value) {
                    echo "<td>" . $value . "</td>"; 
                }
                echo "</tr>";
            }
            
     ?>   
    </table>
        </body>
</html>
<?php ?>