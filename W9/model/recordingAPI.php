<?php

function get_latest_reading($sql, $conn)
{
    $statement = $conn->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    return $json;
}


?>


