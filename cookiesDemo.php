<html>
<title>Cookies Demo</title>
    <head>
    
    <body>
        
        <h4>It will store Cookies </h4>
        <h4>Now it will start as well as Sessiom</h4>
        <form action="cookiesDemo.php" method="post">
        <input type="text" name="username" placeholder="enter name">
        <input type="submit" value="Enter" name="submit">
            </form>
        </body>
    
    
    </head>

</html>

<?php
//$name="vijayKumar";
//$value=2018;
//$expireDate=time()+(60*60*24);
//
//setcookie($name,$value,$expireDate);

//if(isset($_COOKIE['vijayKumar'])){
//    
//    $show=$_COOKIE['vijayKumar'];
//    echo $show;
//}else{
//    echo "no cookies is store in that browser";
//}

// session Deom type in that first page

session_start();

$_SESSION["MyName"]="welcome to the session Demo";

if(isset($_POST['submit'])){
    
    $_SESSION["username2"]=$_POST["username"];
}


?>