<?php
$str = ' hfhjmg hhzaf ';
echo trim($str);
echo '<br>';
echo '<br>';
$str = '/php/';
echo trim($str, '/');
echo '<br>';
echo '<br>';
$str = 'слова слова слова.';
echo rtrim($str, '.').'.';
?>