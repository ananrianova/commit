<?php
	session_start();
	
	if (!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 1;
	} else {
		$_SESSION['counter']++;
        if ($_SESSION['counter'] >= 10) {
            $_SESSION['counter']=0;
        }	}
	
	echo $_SESSION['counter'];
?>