$(document).ready(function () {

    function updateReading() {
        $('#AJAX').load('controller/dataAJAX.php')
    }


    updateReading();
    setInterval(updateReading, 20000);

});