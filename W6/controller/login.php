<?php
$validUser = NULL;
if(isset($_POST['username']) AND isset($_POST['password'])){
    $username = stripslashes(trim(htmlspecialchars($_POST["username"])));
    $password = stripslashes(trim(htmlspecialchars($_POST["password"])));

    if($username == "" or $password == "" ){

    }else{
        $validUser = checkPassword($username, $password, $conn);
    }
}

if($validUser != NULL){
    session_start();
    $_SESSION["user"] = $validUser;
    header("Location: index.php");
}
?>