<?php


function getArticle($id, $conn){

    return json_decode(callToGetFromDB("SELECT * FROM `article` WHERE `articleId` = " . $id,$conn));
}

function getArticleImages($id, $conn){
    return json_decode(callToGetFromDB("SELECT * FROM `mountain_img` WHERE `articleId` = " . $id,$conn));
}

function getListOfArticles($id, $conn){
    return json_decode(callToGetFromDB("SELECT `articleId` FROM `article_mountain` WHERE `mountainId` = " . $id,$conn));
}
function getAllArticles($id, $conn){
    return json_decode(callToGetFromDB("SELECT * FROM `article` WHERE `articleId` = " . $id,$conn));
}

function getArticleDisplayImage($id, $conn){
    return json_decode(callToGetFromDB("SELECT * FROM `mountain_img` WHERE `articleId` = " . $id ." LIMIT 1",$conn));
}
function getAllMountains($conn){
    return json_decode(callToGetFromDB("SELECT * FROM `mountain`",$conn));
}

function getMountainDisplayImage($id, $conn){
    return json_decode(callToGetFromDB("SELECT * FROM `mountain_img` WHERE `mountainId` = " . $id ." LIMIT 1",$conn));
}

function callToGetFromDB($sql, $conn){
    $statement = $conn->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    return $json;
}


?>