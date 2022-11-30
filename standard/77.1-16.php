<?php
//1-5
echo time();
echo'<br>';
echo'<br>';
echo mktime(0,0 , 0, 03, 1, 2025);
echo'<br>';
echo'<br>';
echo mktime(0, 0, 0, 12, 31);
echo'<br>';
echo'<br>';
echo (time()-mktime(13, 12, 59, 3, 15, 2000));
echo'<br>';
echo'<br>';
//6-11
echo date('Y-m-d H:i:s');
echo'<br>';
echo'<br>';
echo date('Y-m-d');
echo'<br>';
echo date('d.m.Y');
echo'<br>';
echo date('d.m.y H:i:s');
echo'<br>';
echo'<br>';
echo date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025));
echo'<br>';
echo'<br>';
$week =['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'];
$day = date('w');
echo $week[$day].'<br>';
$day1 = date('w', mktime(0, 0, 0, 6, 6, 2006));
echo $week[$day1];
echo'<br>';
echo'<br>';
$months = array('', 'Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Нов', 'Дек');
$m = date('n');
echo $months[$m];
echo'<br>';
echo'<br>';
echo date('t');
echo'<br>';
echo'<br>';
//12
$date = '2025-12-31';
echo date('d-m-Y',strtotime($date));
echo'<br>';
echo'<br>';
//13
$date = '2025-12-31';
echo date('d.m.Y', strtotime("$date +2 day"));
echo'<br>';
echo date('d.m.Y', strtotime("$date +1 month 3 days"));
echo'<br>';
echo date('d.m.Y', strtotime("$date +1 year"));
echo'<br>';
echo'<br>';
//14-16
$ng = mktime(0, 0, 0, 1, 1, date('Y') + 1);
$sec = $ng- time();
$days = floor($sec / (60*60*24));
echo "До нового года осталось: $days";
echo'<br>';
echo'<br>';
$date = date_create('2022-11-30');
date_modify($date, '-100 day');
echo date_format($date, 'd.m.Y');
?>