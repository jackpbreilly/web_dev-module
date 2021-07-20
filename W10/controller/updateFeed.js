$(document).ready(function() {

    function updateReading()
    {
        $('#feed').load('controller/displayFeed.php')
    }


    updateReading();
    setInterval(updateReading, 20000);

});