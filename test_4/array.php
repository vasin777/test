<?php
$array = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51];
$array_count = (array_count_values($array));
foreach ($array_count as $arr) {
    echo $arr;
}
foreach (array_unique($array) as $array_out) {
        echo $array_out.'-';
}

