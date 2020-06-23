<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "test";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}
    
$userN = $_GET['username'];
$pass = $_GET['psw'];
$q = "SELECT login('".$userN. "','" .$pass."');";
$query = mysqli_query($dbconnect, $q)
   or die (mysqli_error($dbconnect));
while ($row = mysqli_fetch_array($query)) {
    if($row[0] == 'Logged in Successfully') {
       // include('userpage.html');
        ?> <html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="Vendors/CSS/._normalize.css">
        <link rel="stylesheet" type="text/css" href="Vendors/CSS/038%20Grid.css">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link href='http://fonts.googleapis.com/css?family=lato:100,300,400,300italic' rel="stylesheet" type="text/css">
        <title> <?php echo $userN ?> </title>
    </head>
        <body>
        <header>
            <nav>
                <div class="row">
                    <div class="col span-1-of-5 box">
                        <a class="btn btn-ghost" href="inbox.php">Inbox</a>
                    </div>
                    <div class="col span-1-of-5 box">
                        <a class="btn btn-ghost" href="outbox.php">Outbox</a>
                    </div>
                    <div class="col span-1-of-5 box">
                        <a class="btn btn-ghost" href="notification.php">Notifications</a>
                    </div>
                    <div class="col span-1-of-5 box">
                        <a class="btn btn-ghost" href="setting.php">Setting</a>
                    </div>
                    
                    <div class="col span-1-of-5 box">
                        <a class="btn btn-ghost" href="compose.php">Compose</a>
                    </div>
                </div>
                <div class="hero-text-box">
                    <h1><?php echo $row[0] ?></h1>
                </div>
            </nav>
            </header>
    </body>
</html>
<?php
    }
    else{
        echo $row[0];
    }
}
?>