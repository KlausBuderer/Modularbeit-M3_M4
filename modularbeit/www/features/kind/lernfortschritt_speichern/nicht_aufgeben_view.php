<?php


class NichtAufgebenView{

    private $text = array('Nicht aufgeben, ich bin mir sicher du kannst das' , 'Versuchs nochmal, Übung macht den Meister!' , 'Manchmal bewirkt eine Pause Wunder, versuche es doch später nochmals!' , 'Hast du schonmal die anderen Module versucht. Vielleicht klappt es da!');
    
    private $arraylength;
    private $randomNbr;

    public function __construct( ) {
        $this->arraylength = sizeof($this->text);
        $this->randomNbr = random_int(0, $this->arraylength);
        
    }
    
    public function ausgabe(){

        echo '<form id="myForm" action="/includes/weiterso.php" method="post">';
        echo '<input type="hidden" name="text" value="'. $this->text[$this->randomNbr].'">';
        
     
           echo  '</form>';
           echo '<script type="text/javascript">';
             echo "document.getElementById('myForm').submit()";
         echo '</script>';
    }

}