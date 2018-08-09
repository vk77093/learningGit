<?php
include("bootstrap.php");
?>

<html>
<head>
    
    <title><?php define("TITLE","formTest") ?></title>
    <body>
        <form action="validation.php" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="enter a name"><br>
        <input type="password" name="password" placeholder="enter a password">
            <br>
            <input type="submit" name="submit" value="LOG In">
        </form>
   
    
        
    </body>
    </head>
</html>