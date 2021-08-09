<?php

class GuthabenView{

    public $guthaben;
    public $username;
    

    public function __construct($guthaben)
    {

        $this->guthaben = $guthaben;
        
    }


    public function showGuthaben(){

   echo '<form id="myForm" action="/includes/guthaben.php" method="post">';
   echo '<input type="hidden" name="guthaben" value="'. $this->guthaben.'">';
   echo '<input type="hidden" name="username" value="'. $this->username.'">';
   

      echo  '</form>';
      echo '<script type="text/javascript">';
        echo "document.getElementById('myForm').submit()";
    echo '</script>';
    }

}





