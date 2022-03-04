<?php
session_start();
$home = '../pages/home.php';
$login = '../index.php';
if(!empty($_SESSION) && $_SESSION['isLoggedIn'] == true && !empty($_SESSION["id_me"])){
    $id = $_SESSION["id_me"];
    $home = $home . "?id=" . $id;
    header("Location: $home");
}
?>