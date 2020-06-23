<?php ?>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="Vendors/CSS/._normalize.css">
        <link rel="stylesheet" type="text/css" href="Vendors/CSS/038%20Grid.css">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <link href='http://fonts.googleapis.com/css?family=lato:100,300,400,300italic' rel="stylesheet" type="text/css">
        <title> Compose </title>
    </head>
    <body>
                <form action="send.php" method="get" id="f">
                    <div class="row">
                        <div class="col span-1-of-2 box">
                            <label for="subject"><b>Subject</b></label>
                            <input type="text" placeholder="Subject" name="subject">
                        </div>
                        <div class="col span-1-of-2 box">
                            <label  for="context"><b>Context</b></label>
                            <input type="text" placeholder="Context" name="context">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3 box">
                            <label  for="reci"><b>Reciever</b></label>
                            <input type="text" placeholder="Reciever1" name="reci" required>
                        </div>  
                        <div class="col span-1-of-3 box">
                            <label  for="recii"><b>Reciever</b></label>
                            <input type="text" placeholder="Reciever2" name="recii">
                        </div>
                        <div class="col span-1-of-3 box">
                            <label  for="reciii"><b>Reciever</b></label>
                            <input  type="text" placeholder="Reciever3" name="reciii">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3 box">
                            <label  for="recCi"><b>RecieverCC</b></label>
                            <input type="text" placeholder="RecieverCC1" name="recCi">
                        </div>
                        <div class="col span-1-of-3 box">
                            <label  for="recCii"><b>RecieverCC</b></label>
                            <input type="text" placeholder="RecieverCC2" name="recCii">
                        </div>
                        <div class="col span-1-of-3 box">
                            <label  for="recCiii"><b>RecieverCC</b></label>
                            <input type="text" placeholder="RecieverCC3" name="recCiii">
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" name="myButton" value="submit" class="btn" >Send</button>
                        <button type="reset"  class="btn" value="reset">Cancel</button>
                    </div>
                 </form>
        </body>
</html>
<?php ?>

    
