<?php
require_once("contact.php");
function printAllContacts($contacts){
    foreach($contacts as $contact){
        $contact->printContact();
    }
}
function createContactInstance($element){
    $object = new contact();
        $object->id = $element['id'];
        $object->name = $element['name'];
        $object->avatar = $element['avatar'];
        return $object;
}
function showContactOnList($contact){
    if($contact!= null){
        echo <<<end
        <li class="message">
                    <div class="avatar">
                        <img src="$contact->avatar" alt="">
                        <div class="connected"></div>
                    </div>
                    <div class="name-lastMssg">
                        <h4>$contact->name</h4>
                        <p>Hi there. How are you ? </p>
                    </div>
                    <div class="time">
                        <h4>09:00</h4>
                    </div>
                </li>
    end;
    }else{
        echo "the array is empty";
    }
}
?>