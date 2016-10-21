<?php
session_start();
echo "Current PHP version: ".phpversion();
echo $_SESSION['name'];
?>