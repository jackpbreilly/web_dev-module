<?php
    if(isset($_POST["username"]) AND isset($_POST["password"])){
        $username = stripslashes(trim(htmlspecialchars($_POST["username"])));
        $password = stripslashes(trim(htmlspecialchars($_POST["password"])));

        if($username == "" or $password == "" ){

        }else{
            register($username, $password, $conn);
        }

        header('Location: index.php');
    }
?>