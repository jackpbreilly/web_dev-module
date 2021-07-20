<?php
include("controller/getMultiData.php")
?>

<div data-role="page" id="Ten" data-title="Ten Most Recent Entries">
    <div data-role="header">
        <h1>Ten Most Recent Entries</h1>
    </div>

    <div data-role="content">

        <?php
        include("controller/lowAndHigh.php")
        ?>


        <a href="#home" data-role="button">Back to home</a>
    </div>

    <div data-role="footer" data-position="fixed">
        <h4>Page Footer - Written by 1704736 Jack Reilly</h4>
    </div>
</div>




