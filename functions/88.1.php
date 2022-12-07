<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

function r( $arr ) {
    if ( is_array( $arr ) && count( $arr ) > 0 ) {
        $keys = array_keys( $arr );    
        echo $keys[0]." => ".$arr[ $keys[0] ]."\n";
        array_shift( $arr );
        r( $arr );
    }
}

r( $arr );