<?php
require_once "animal.php";

class frog extends animal {

    public function GetFrogName(){
        echo "<br/> Name = Alaska";
    }

    public function GetFrogLegs(){
        echo "<br/> Legs = 4";
    }

    public function GetCold(){
        echo "<br/> Cold Blooded = No";
    }

    public function GetJump(){
        echo "<br/> Jump = Hop Hop";
    }
}
?> 