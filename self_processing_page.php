<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>self processing</title>
    
</head>
<body>
    <?php
        if(isset($_GET['submit']))
        {
            $name=$_GET['username'];
            $pass=$_GET['password'];

            echo"your name is ".$name." password is ".$pass;
        }
    ?>


<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
    <label for="username">Enter the name :</label>
    <input type=" text" id="username" name="username" required/><br><br>
    <label for="password">Enter the password</label>
    <input type="password" id="password" name="password" require/><br><br>
    <input type="submit" value="submit" name="submit"/>
</form>
    
</body>
</html>