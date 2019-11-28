<?php
session_start();

include 'config.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "done";
}
else {
    header('Location: login.html');
}