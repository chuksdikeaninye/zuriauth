<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
echo "You are now logged out";
header('Refresh: 2; URL = index.php');
;?>