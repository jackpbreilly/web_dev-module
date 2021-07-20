<?php

function checkPassword($username, $password, $conn){
    // getting username from DB
    $sql = "SELECT * FROM user WHERE userName = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $username);
    $stmt->execute();
    $row = $stmt->fetch();

    // Checking to see if password matches DB.
    if(password_verify($password, $row["userPassword"])) {
        return $row["userId"];
    }
    return 1;
}
function logout(){
    session_destroy();
    header('Location: index.php');
}

function register($username, $password, $conn){
    $enc_password = password_hash($password, PASSWORD_BCRYPT);
    $sql ="INSERT INTO `user` (`userId`, `userName`, `userPassword`) VALUES (NULL, ?, ?);";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $enc_password);
    $stmt->execute();
    echo "success!";
}
?>