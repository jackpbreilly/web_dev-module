<?php

  // Required files
  include("model/connection.php");
  include("model/recordingAPI.php");

?>

<!DOCTYPE html> 
<html> 
	<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
	</head> 
<body> 

<!-- First Page -->
<div data-role="page" id="home" data-title="Home Page">
	<div data-role="header">
		<h1>Home Page</h1>
	</div>

	<div data-role="content">
		<a href="#LastEntry" data-role="button">Last Entry</a>
		<a href="#Ten" data-role="button">Ten Most Recent Entries</a>
 		<a href="#AjaxLastEntry" data-role="button">Last Entry With Ajax</a>
 		<a href="#graphs" data-role="button">Graphs formed using Chartist</a>

	</div>
		<div data-role="footer" data-position="fixed">
		<h4>Page Footer - Written by 1704736 Jack Reilly</h4>
	</div>
</div>
 <?php
    include("controller/pageRoute.php");
  ?>

<script src="controller/AJAXReading.js"></script>
  
</body>
</html>


