<?php
function getcommentData($id, $conn){
return json_decode(callToGetFromDB("SELECT * FROM comments WHERE articleId=".$id.";",$conn));
}


function addComment($id,$conn){
    if(isset($_POST["comment"])){
      $comment = "";
      if(isset($_SESSION["user"])){
        $comment = "USER ID: " .$_SESSION["user"]." ";
      }
        $comment = $comment.$_POST["comment"];
        $articleId = $id;

        $sql = $conn->prepare("INSERT INTO comments (comment, articleId) VALUES (?, ?);");
        $sql->bindParam(1, $comment);
        $sql->bindParam(2, $articleId);
        $sql->execute();
    }
}
?>
