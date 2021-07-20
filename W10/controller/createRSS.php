<?php

$fileText = "";

function callToGetFromDB($sql, $conn){
    $statement = $conn->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    return $json;
}

$fileText = $fileText. "<rss version='2.0' xmlns:atom='http://www.w3.org/2005/Atom'>\n";
$fileText = $fileText. "<channel>\n";

$fileText = $fileText. "<title>Mountain Articles</title>\n";
$fileText = $fileText. "<link>http://www.mayar.abertay.ac.uk/~1704736</link>\n";

$data = json_decode(callToGetFromDB("SELECT * FROM article ORDER BY articleId DESC LIMIT 5", $conn));

for ($x=0 ; $x<sizeof($data);){
    $fileText = $fileText. "<article id='".$data[$x]->articleId."'>\n";
    $fileText = $fileText. "<title>".$data[$x]->articleTitle."</title>\n";
    $fileText = $fileText. "<author>".$data[$x]->articleAuthor."</author>\n";
    $fileText = $fileText. "<content>".$data[$x]->articleText."</content>\n";
    $fileText = $fileText. "<link>https://mayar.abertay.ac.uk/~1704736/CMP306/Coursework/P4/?article=".$data[$x]->articleId."</link>\n";


    $fileText = $fileText. "</article>";
    $x++;
}


$fileText = $fileText. "</channel>\n";
$fileText = $fileText. "</rss>\n";


$file = fopen("model/rss.xml", "w") or die("Unable to open file!");
fwrite($file, $fileText);
fclose($file);
?>
