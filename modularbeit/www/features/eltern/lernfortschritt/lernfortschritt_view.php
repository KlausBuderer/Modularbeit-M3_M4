<?php


class LernfortschrittView
{

    private $lernfortschritt = array();
    private $kindsname;

    public function __construct($lernfortschritt, $kindsname)
    {

        $this->lernfortschritt = $lernfortschritt;
        $this->kindsname = $kindsname;
    }

    //Aufruf des Lernfortschrittsview und Übergabe der Lernforschritte des Kindes
    public function showLernfortschritt()
    {

        $_SESSION['lernfortschrittTbl'] = $this->lernfortschritt;
        echo '<form id="myForm" action="/includes/lernfortschritt.php" method="post">';


        echo '<input type="hidden" name="kindsname" value="'. $this->kindsname.'">';

           echo  '</form>';
           echo '<script type="text/javascript">';
             echo "document.getElementById('myForm').submit()";
         echo '</script>';
    } 

        echo  '</form>';
        echo '<script type="text/javascript">';
        echo "document.getElementById('myForm').submit()";
        echo '</script>';
    }
}
