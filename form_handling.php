<?php
   
        $username = filter_var($_GET['Username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_var($_GET['Password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $age = filter_var($_GET['age'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
 
        setcookie("cookie1", $username);
        setcookie("cookie2", $password);
 
        if(isset($_COOKIE["cookie1"]) && isset($_COOKIE["cookie2"])){
           
        }
        else{
            header( "Location: http://enos.itcollege.ee/~arkris/index.php" );
        }
 
        print("Hello ");
        print($username);
        print(" Your password is ");
        print($password);
?>