<script>
    <?php
    $et_json = json_encode($et);
    $it_json = json_encode($it);
    $vl_json = json_encode($vl);
    $ts_json = json_encode($ts);
    $ll_json = json_encode($ll);

    echo "var et_arr =" . $et_json . ";\n";
    echo "var it_arr =" . $it_json . ";\n";
    echo "var vl_arr =" . $vl_json . ";\n";
    echo "var ll_arr =" . $ll_json . ";\n";

 
    ?>


    new Chartist.Line('#chart1', {
        <?php
        echo "labels:" . $ts_json . ",\n";
        echo "series: [et_arr.map(parseFloat),it_arr.map(parseFloat)]\n"; ?>
    },);

    new Chartist.Line('#chart2', {
        <?php
        echo "labels:" . $ts_json . ",\n";
        echo "series: [vl_arr.map(parseFloat)]\n"; ?>
    });

    new Chartist.Line('#chart3', {
        <?php
        echo "labels:" . $ts_json . ",\n";
        echo "series: [ll_arr.map(parseFloat)]\n"; ?>
    });
</script>  