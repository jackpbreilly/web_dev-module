<?php
include("controller/getMultiData.php")
?>


<div data-role="page" id="graphs" data-title="Graphs">
    <div data-role="header">
        <h1>Graphs of Sensor Data Creared using Chartist</h1>
    </div>

    <div data-role="content">
        <div class="ct-chart ct-perfect-fourth" id="chart1"></div>
        <div class="ct-chart ct-perfect-fourth" id="chart2"></div>
        <div class="ct-chart ct-perfect-fourth" id="chart3"></div>


        <a href="#home" data-role="button">Back to home</a>
    </div>

    <div data-role="footer" data-position="fixed">
        <h4>Page Footer - Written by 1704736 Jack Reilly</h4>
    </div>
</div>


<?php include("controller/createGraphs.php"); ?>












