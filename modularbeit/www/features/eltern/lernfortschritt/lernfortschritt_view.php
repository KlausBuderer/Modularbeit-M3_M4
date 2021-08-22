<?php


class LernfortschrittView{

    private $lernfortschritt = array();
    private $kindsname;
    private $array1 = array('datum', 'lerneinheit', 'beschreibung', 'anzfragengesamt', 'anzfragenkorrekt', 'vorzeitabbruch', 'punkteerreicht');
    private $array2 = array('datum', 'lerneinheit', 'beschreibung', 'anzfragengesamt', 'anzfragenkorrekt', 'vorzeitabbruch', 'punkteerreicht');
    private $array3 = array('datum', 'lerneinheit', 'beschreibung', 'anzfragengesamt', 'anzfragenkorrekt', 'vorzeitabbruch', 'punkteerreicht');
    private $array4 = array('datum', 'lerneinheit', 'beschreibung', 'anzfragengesamt', 'anzfragenkorrekt', 'vorzeitabbruch', 'punkteerreicht');


    public function __construct($lernfortschritt, $kindsname) {
     
        $this->lernfortschritt = $lernfortschritt;
        $this->kindsname = $kindsname;

    }

    public function showLernfortschritt(){ 
        
        $_SESSION['lernfortschrittTbl'] = $this->lernfortschritt;
        echo '<form id="myForm" action="/includes/lernfortschritt.php" method="post">';

        echo '<input type="hidden" name="kindsname" value="'. $this->kindsname.'">';

           echo  '</form>';
           echo '<script type="text/javascript">';
             echo "document.getElementById('myForm').submit()";
         echo '</script>';
    } 


}