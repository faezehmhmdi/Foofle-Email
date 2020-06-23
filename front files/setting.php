<?php ?>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="Vendors/CSS/._normalize.css">
        <link rel="stylesheet" type="text/css" href="Vendors/CSS/038%20Grid.css">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link href='http://fonts.googleapis.com/css?family=lato:100,300,400,300italic' rel="stylesheet" type="text/css">
        <title> Setting </title>
    </head>
        <body>
        <header>
            <nav>
                <div class="row">
                    <div class="col span-1-of-5 box">
                        <a class="btn btn-ghost" href="#editForm">Edit Profile</a>
                    </div>
                    <div class="col span-1-of-5 box">
                        <a class="btn btn-ghost" href="userinfo.php">Your Info</a>
                    </div>
                    <div class="col span-1-of-5 box">
                        <a class="btn btn-ghost" href="anotheruserinfo.php">User Info</a>
                    </div>
                    <div class="col span-1-of-5 box">
                        <a class="btn btn-ghost" href="setvisi.php">Edit Visibility</a>
                    </div>   
                    <div class="col span-1-of-5 box">
                        <a class="btn btn-ghost" href="delAcc.php">Delete Acc</a>
                    </div>
                </div>
            </nav>
            </header>
            <div class="row">
                <h2>              </h2>
                <h2>Edit your Info</h2>
            <div class="form-s" id="editForm">
                <form id="form1"  action="edit.php" class="form-c" method="get">
                    <div class="row">
                        <div class="col span-1-of-3 box">
                            <label class="labels" for="pass"><b>Password</b></label>
                            <input type="password" placeholder="Password" name="pass" required>
                        </div>
                        <div class="col span-1-of-3 box">
                            <label class="labels" for="fname"><b>Name</b></label>
                            <input type="text" placeholder="Name" name="fname" required>
                        </div>  
                        <div class="col span-1-of-3 box">
                            <label class="labels" for="lname"><b>Last Name</b></label>
                            <input type="text" placeholder="Last Name" name="lname" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-4 box">
                            <label class="labels" for="telephone"><b>Telephone</b></label>
                            <input  type="tel" placeholder="Telephone" name="telephone" required>
                        </div> 
                        <div class="col span-1-of-4 box">
                            <label class="labels" for="mobile"><b>Mobile</b></label>
                            <input  type="tel" placeholder="Mobile" name="mobile" required>
                        </div>
                        <div class="col span-1-of-4 box">
                            <label class="labels" for="addr"><b>Address</b></label>
                            <input type="text" placeholder="Address" name="addr" required>    
                        </div>
                        <div class="col span-1-of-4 box">
                            <label class="labels" for="alias"><b>Nickname</b></label>
                            <input type="text" placeholder="Alias" name="alias" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3 box">
                            <label class="labels" for="idNum"><b>Iden Number</b></label>
                            <input type="text" placeholder="ID Number" name="idNum" required>
                        </div>
                        <div class="col span-1-of-3 box">
                            <label class="labels" for="birthday"><b>Birthday</b></label>
                            <input type="date" placeholder="Date" name="birthday" required> 
                        </div>
                        <div class="col span-1-of-3 box">
                            <input type="radio" id="ag" name="ac" value="Access granted">
                            <label class="labels" for="ac"><b>Access granted</b></label><br>
                            <input type="radio" id="ad" name="ac" value="Access denied">
                            <label class="labels" for="ac"><b>Access denied</b></label><br>
                    </div>
                    </div>
                        <button type="button" class="btn" value="submit">Done</button>
                        <button type="reset" class="btn cancel" >Cancel</button>       
                 </form>
            </div>
            </div>
            
    </body>
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script> 
</html>
<?php ?>