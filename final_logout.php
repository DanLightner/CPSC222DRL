<?php
session_start();
session_destroy();
header("Location: final.php");
exit;
?>
