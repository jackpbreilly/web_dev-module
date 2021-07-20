<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ("model/connection.php");
//include ("controller/createRSS.php");

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    
</head>

<h1>Mountain RSS Feed based on <a href="model/rss.xml">rss.xml</a></h1>

<div id="feed">

</div>

<script src="controller/updateFeed.js"></script>

