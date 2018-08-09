<?php
include("bootstrap.php");

?>
<?php
if(isset($_POST["submit"])){
    $un=$_POST["username"];
    $pass=$_POST["password"];
     $name=array("vijay","krishna","dalip");
    $password=array("vijay123","krishna123","dalip123");
    
    if(strlen($un)<5){
        echo "<div class='alert alert-warning' role='alert'>
        useranme cant be less than 5
        </div>";
    }
    elseif(strlen($un)>10){
        echo "<div class='alert alert-warning' role='alert'>username cant be more than 10
        </div>";
    }
    elseif($un==NULL){
        echo "<div class='alert alert-warning' role='alert'>username cant be null
        </div>";
    } 
    elseif(!in_array($un,$name) || !in_array($pass,$password)){
        echo"<div class='alert alert-warning' role='alert'>
        username and password  not found
        </div>";
    }
//    elseif(!in_array()){
//       echo" <div class='alert alert-warning' role='alert'>
//       pasword not match 
//       </div>";
//    }
    
    else{
    echo "<div class='alert alert-success' role='alert'>welcome your name is $un  your password is $pass
    </div>";
    }
}


?>