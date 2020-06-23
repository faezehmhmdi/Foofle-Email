 <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "test";
    $dbconnect=mysqli_connect($hostname,$username,$password,$db);
    if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }
            
    $query = $query = mysqli_query($dbconnect, "CALL get_my_outbox(1)");
?>
<html>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>
        <table class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
            <tr class="w3-hover-orange">
            <td>Email ID</td>
            <td>Sender</td>
            <td>Subject</td>
            <td>Sending Time</td>
            <td>Context</td>
            <td>Unread</td>
            <td>Delete</td>
            </tr>
        <?php
            while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                foreach ($row as $field => $value) {
                    echo "<td>" . $value . "</td>"; 
                }
                echo '<td><input  type="button"  name="delete" value="  " onclick="delete_email(\''.$row['email_id'].'\')"></td>';
                echo "</tr>";
                
            }
     ?>   
    </table>
        </body>
    <script>
    function delete_email(id) {
        const XHR = new XMLHttpRequest();
        XHR.open( "GET", "http://localhost:81/delete.php?email_id="+id , false);
        XHR.send( '' );
        alert(XHR.responseText);
        location.reload()
        }
    </script>
</html>
<?php           
?> 