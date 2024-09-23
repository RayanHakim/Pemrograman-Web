<?php 
session_start();
session_destroy();

header("location:si-login.php?pesan=logout")
?>