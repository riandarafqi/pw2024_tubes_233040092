<?php
session_start();
session_destroy();
header("Location: latihan.php");
exit;
?>