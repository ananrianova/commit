<?php
    require_once 'student.php';
    require_once 'group.php';
    require_once 'user.php';

    $i04 = new Group('И-04');

    $x1 = new Student('Иван', 'Лысов', 18, 4.0);
    $x2 = new Student('Kjk', 'Rr', 18, 4.1);

    $i04->addStudent($x1);
    $i04->addStudent($x2);

    $i04->display();
?>