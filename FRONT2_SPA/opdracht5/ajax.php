<?php

require "config.php";
$data = [];
$result = mysqli_query($mysqli, "SELECT * FROM leden ORDER BY id");
while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}

$jsonArray = json_encode($data);
echo $jsonArray;