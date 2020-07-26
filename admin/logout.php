<?php
session_start();
session_destroy();
header('location:../login.php'); //it will redirect to login page after session destroy
?>