<?php

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$search = 6;
$result = false;

for ($i = 0; $i < count($num); $i++) {
    if($num[$i] == $search) {
        echo $search . " found at index " . $i;
        $result = true;
    }
}

?>