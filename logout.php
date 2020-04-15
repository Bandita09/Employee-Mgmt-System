<?php
//Start the Session
session_start();
unset($_SESSION['auth']);
header('Location: ../login.php');
?>