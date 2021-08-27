<?php

class KinderUebersichtView{

public function __construct()
{
    //include_once 'public/kinder_uebersicht_template.php';
    $this->ausgabe();
}

public function ausgabe(){


   echo '<form id="myForm" action="/public/kinder_uebersicht_template.php" method="post">';
   echo '<input type="hidden" name="userId" value="1">';
}

}