<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$sql = "SELECT * FROM `sensor_data` ORDER BY `time_added` DESC LIMIT 1";
$data = json_decode(get_latest_reading($sql, $conn));
$data_state = json_decode($data[0]->state);
?>
<b>Device ID:</b> <?php echo $data[0]->device_id; ?> <br>
<b>Time & Date Added:</b> <?php echo $data[0]->time_added; ?> <br>
<b>External Temperature:</b> <?php echo $data_state->external; ?> <br>
<b>Internal Temperature:</b> <?php echo $data_state->internal; ?> <br>
<b>Light Level:</b> <?php echo $data_state->Light ?> <br>
<b>Voltage Level:</b> <?php echo $data_state->Voltage ?> <br>







