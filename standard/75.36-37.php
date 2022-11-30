<?php
$str = '12345';
echo strrev($str);
echo '<br>';
echo '<br>';
$str = 'level';
$eStr = ($str == strrev($str)) ? 'является' : 'не является';
echo $eStr;
?>