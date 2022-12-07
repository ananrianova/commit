<?php
function r( $arr, &$summ ) {
    if ( is_array( $arr ) && count( $arr ) > 0 ) {
        $keys = array_keys( $arr );    
        $summ = $summ + $arr[ $keys[0] ];
        array_shift( $arr );
        r( $arr, $summ );
    }
}

$summ = 0;
r( $arr, $summ );

echo "summ = ".$summ."\n";
?>