<?php
    session_start();
	$_SESSION['result']=$_SESSION['TEST']+$_SESSION['TEST1'];
    echo $_SESSION['result']
?>