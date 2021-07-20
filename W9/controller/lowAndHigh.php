<?php
for ($i = 0; $i <= 9; $i++) {
    $data_state = json_decode($data[$i]->state);
    // Prints if high or lowest value
    echo "<b>";
    if ($data_state->external === min($et)) {
        echo "Lowest External Temperature</br>";
    } else if ($data_state->external === max($et)) {
        echo "Highest External Temperature</br>";
    }
    if ($data_state->internal === min($it)) {
        echo "Lowest Internal Temperature</br>";
    } else if ($data_state->internal === max($it)) {
        echo "Highest Internal Temperature</br>";
    }
    if ($data_state->Light === min($ll)) {
        echo "Lowest Light Level</br>";
    } else if ($data_state->Light === max($ll)) {
        echo "Highest Light Level</br>";
    }
    if ($data_state->Voltage === min($vl)) {
        echo "Lowest Voltage Level</br>";
    } else if ($data_state->Voltage === max($vl)) {
        echo "Highest Voltage Level</br>";
    }
    echo "</b>";
    ?>
    <b>Device ID:</b> <?php echo $data[$i]->device_id; ?> <br>
    <b>Time & Date Added:</b> <?php echo $data[$i]->time_added; ?> <br>
    <b>External Temperature:</b> <?php echo $data_state->external; ?> <br>
    <b>Internal Temperature:</b> <?php echo $data_state->internal; ?> <br>
    <b>Light Level:</b> <?php echo $data_state->Light ?> <br>
    <b>Voltage Level:</b> <?php echo $data_state->Voltage ?> <br>
    <b>_____________________________</b> <br>
<?php } ?>