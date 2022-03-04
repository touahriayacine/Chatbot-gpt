<?php
class contact {
    public $id;
    public $name;
    public $avatar;

    function printContact(){
        echo "[ id = " . $this->id . ", name = " . $this->name . " , avatar = " . $this->avatar . " ]";
    }
}
?>