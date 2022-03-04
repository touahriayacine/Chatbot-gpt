<?php 
require_once("contact/contact.php");
require_once("contact/contact-utilities.php");
$contacts = array();
function getContactsInfo($contacts , $connection){
    $array = array();
    $i =0;
    foreach($contacts as $contact){
        $id = mysqli_real_escape_string($connection , $contact[0]);
        $sql = 'SELECT id , name , avatar FROM chat_bot.users WHERE id=' . $id;
        $result = mysqli_query($connection , $sql);
        $element = mysqli_fetch_assoc($result);
        $object = createContactInstance($element);
        $array[$i] = $object ;
        $i++;
    }
    return $array;
}
    if(!empty($_GET['id'])){
    $connection = mysqli_connect("localhost" ,"root" , "root","chat_bot");
    $id_me = $_GET['id'];
    $id_me = mysqli_real_escape_string($connection , $id_me);
    $sql = "SELECT person2_id FROM chat_bot.contacts WHERE person1_id = $id_me";
    $result = mysqli_query($connection , $sql);
    $contacts = mysqli_fetch_all($result);
    $contacts = getContactsInfo($contacts , $connection);
    mysqli_free_result($result);
    mysqli_close($connection);
    }else{
        echo "ERROR  MESSAGE THERE IS AN ERROR";
    }
    function showAllContactsOnList($contacts){
        foreach($contacts as $contact){
            showContactOnList($contact);
        }
    }
    showAllContactsOnList($contacts);
?>