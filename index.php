<?php
require_once('./php/check_login.php');
function findUser($users ,$email){
    foreach($users as $user){
        if($user[1] == $email){
            return $user;
        }
    }
}
if(!empty($_POST)){
    $email_input = $_POST ["email"];
$psw_input = $_POST ["password"];
$connection = mysqli_connect("localhost","root" , "root" , "chat_bot");
$sql = 'SELECT id , email , password FROM chat_bot.users ';
$result = mysqli_query($connection , $sql);
$users = mysqli_fetch_all($result);
print_r($users);
mysqli_free_result($result);
mysqli_close($connection);
$user  = findUser($users , $email_input);
$psw = $user[2];
$id_me = 0;
$id_me = $user[0];
$url = '../pages/home.php';
session_start();
if($psw == $psw_input){
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['id_me'] = $id_me;
    $url = $url . '?id=' . $id_me;
    header("Location: $url");
}else{
    $_SESSION['isLoggedIn'] = false;
}
}
else{
    echo "error";
}
?>
<!DOCTYPE html>
<html lang="en"
    style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body style="height: fit-content; width: fit-content;">

<form action="index.php" method="POST">
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="submit" style="margin-top: 20px;">
    </form>
</body>

</html>
    