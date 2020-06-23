<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "test";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}

$subject = $_GET['subject'];
$context = $_GET['context'];
$rec1 = $_GET['reci'];
if ($rec1 == ""){
    die("One Receiver Required");
} else {
    $rec1 = "'".$rec1."'";
}
$rec2 = $_GET['recii'];
if ($rec2 == ""){
    $rec2 = 'null';
} else {
    $rec2 = "'".$rec2."'";
}

$rec3 = $_GET['reciii'];
if ($rec3 == ""){
    $rec3 = 'null';
} else {
    $rec3 = "'".$rec3."'";
}

$recC1 = $_GET['recCi'];
if ($recC1 == ""){
    $recC1 = 'null';
} else {
    $recC1 = "'".$recC1."'";
}

$recC2 = $_GET['recCii'];
if ($recC2 == ""){
    $recC2 = 'null';
} else {
    $recC2 = "'".$recC2."'";
}

$recC3 = $_GET['recCiii'];
if ($recC3 == ""){
    $recC3 = 'null';
} else {
    $recC3 = "'".$recC3."'";
}

$q = "SELECT send_email('".$subject. "','" .$context. "'," .$rec1. "," .$rec2. "," .$rec3. "," .$recC1. "," .$recC2. "," .$recC3.")";
    $query = mysqli_query($dbconnect,$q);
   while ($row = mysqli_fetch_array($query)) {
       echo $row[0];
}
?>