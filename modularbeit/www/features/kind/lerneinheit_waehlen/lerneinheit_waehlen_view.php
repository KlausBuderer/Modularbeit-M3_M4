<?php

class LerneinheitWaehlenView{

public $lerneinheit = [];
public $lerninhalt;
public $stufe;
public $modul;



public function __construct($lerneinheit, $modul, $lerninhalt, $stufe)
{
    $this->lerninhalt = $lerninhalt;
    $this->stufe = $stufe;
    $this->modul = $modul;
    $this->lerneinheit = $lerneinheit;
}


public function ausgabe(){

    //Aufruf Template und übergabe von Daten

   echo '<form id="myForm" action="/includes/aufgaben.php" method="post">';
   echo '<input type="hidden" name="lerninhalt" value="'. $this->lerninhalt.'">';
   echo '<input type="hidden" name="stufe" value="'. $this->stufe.'">';
   echo '<input type="hidden" name="modul" value="'. $this->modul.'">';
    $_SESSION['lerneinheit'] = $this->lerneinheit;

      echo  '</form>';
      echo '<script type="text/javascript">';
        echo "document.getElementById('myForm').submit()";
    echo '</script>';
}


function console_log($data){
echo '<script>';
echo 'console.log('.json_encode($data). ')';
echo '</script>';

}

}