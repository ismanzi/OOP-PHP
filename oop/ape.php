<?php
require_once "animal.php";

class ape extends animal {

    public function GetApeName(){
        echo "<br/> Name = Sun Go Kong";
    }

    public function GetApeLegs(){
        echo "<br/> Legs = 2";
    }

    public function GetApeCold(){
        echo "<br/> Cold Blooded = No";
    }

    public function GetApeYell(){
        echo "<br/> Yell = Auoooo";
    }
}
?> 