<?php

class GuthabenView{

    public $guthaben;

public function __construct($guthaben)
{

    $this->guthaben = $guthaben;
    
}


public function showGuthaben(){

    include "../../../includes/guthaben.php";

}


}