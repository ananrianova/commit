<?php
    $arr = [14, 22, 3, 0,  -14, 15, -8, 27];

    foreach ($arr as $key =>  $elem) {
        if ($elem == 3) {
                echo $key;
                break;
        }
}
?>