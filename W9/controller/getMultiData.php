<?php
$sql = "SELECT * FROM `sensor_data` ORDER BY `time_added` DESC LIMIT 10";
$data = json_decode(get_latest_reading($sql, $conn));
$et = array();
$it = array();
$ll = array();
$vl = array();
$ts = array(); // Arrays to store values in order to find min and max
// Adding values to arrays
for ($i = 0; $i <= 9; $i++) {
    $data_state_max = json_decode($data[$i]->state);
    array_push($et, $data_state_max->external);

    array_push($ts, $data[$i]->time_added);
    array_push($it, $data_state_max->internal);
    array_push($ll, $data_state_max->Light);
    array_push($vl, $data_state_max->Voltage);
}
?>
