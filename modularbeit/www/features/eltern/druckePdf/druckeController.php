<?php

use Model\Lerneinheit\Guthaben;

class DruckePdf{


public function __construct($kindsname, $stunden, $guthaben, $kindsId, $userId) {
    


$this->echoThis($kindsname, $stunden, $guthaben, $kindsId, $userId);
}

public function echoThis($kindsId, $kindsname , $userId , $guthaben, $stunden)
{
  echo $kindsId. $kindsname . $userId . $guthaben, $stunden;
  # code...
}