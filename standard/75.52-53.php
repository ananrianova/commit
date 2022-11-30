<?php
$str = 'ab-cd-ef';
echo strchr($str, '-');
echo '<br>';
echo '<br>';
echo strrchr($str, '-');
echo '<br>';
echo '<br>';
$str = 'ab--cd--ef';
echo strstr($str, '--');
?>