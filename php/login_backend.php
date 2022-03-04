<?php
require_once('check_login.php');
$email_input = $_POST ["email"];
$psw_input = $_POST ["password"];
$connection = mysqli_connect("localhost","root" , "root" , "chat_bot");
$sql = 'SELECT id , email,password FROM chat_bot.users ';
$result = mysqli_query($connection , $sql);
$users = mysqli_fetch_all($result);
mysqli_free_result($result);
mysqli_close($connection);
$user  = findUser($users , $email_input);
$psw = $user[2];
$id_me = $user[0];
$url = '../pages/home.php';
if($psw == $psw_input){
    $_SESSION['isLoggedIn'] = true;
    $url = $url . '?id=' . $id_me;
    header("Location: $url");
}else{
    $_SESSION['isLoggedIn'] = false;
}
function findUser($users ,$email){
    foreach($users as $user){
        if($user[1] == $email){
            return $user;
        }
    }
}
?>