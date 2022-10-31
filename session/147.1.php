<?php
    session_start();
    if (isset($_SESSION['time']) == false) {
        echo 'первое посещение';
    }
        else {
            $_SESSION['time']++;
        } 
   echo $_SESSION['time'] = time();
?>
    